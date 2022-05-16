<?php
require_once 'dbConnect.php';

class productController extends dbConnect{
    public $db;//permes db me iu qas databazes

    public function __construct(){
    
        $this->db=$this->connectDB();
    }

    //CRUD

    public function readData(){
        $query = $this->db->prepare('SELECT * from produktet');// ruhen te dhenat prej databazes
        $query->execute();
        return $query->fetchAll();//fetch sepse rikthehet ne forme te objektit
    }

    public function insert($request){
        $query = $this ->db->prepare('INSERT INTO produktet (name,image,galleryone,gallerytwo,gallerythree,prices,description,details,added_by)
        VALUES(:name, :image,:galleryone,:gallerytwo,:gallerythree, :prices,:description,:details ,:added_by)');  
        $query ->bindParam(':name', $request ['name']);
        $query ->bindParam(':image', $request ['image']);
        $query->bindParam(':galleryone',$request['galleryone']);
        $query->bindParam(':gallerytwo', $request['gallerytwo']);
        $query->bindParam(':gallerythree', $request['gallerythree']);
        $query ->bindParam(':prices', $request ['prices']);
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':details', $request['details']);
        $query ->bindParam(':added_by', $request ['added_by']);
        $query ->execute();
        return header ('Location: productDashboard.php '); 
    }

    public function edit($id){
        $query = $this ->db->prepare ('SELECT * from produktet WHERE id = :id');
        $query ->bindParam(':id',$id);
        $query ->execute();
        return $query->fetch();
    }
    public function update($request, $id){
        
        $query = $this->db->prepare('UPDATE produktet SET  name = :name, image = :image,prices = :prices,
        galleryone=:galleryone, gallerytwo=:gallerytwo, gallerythree =:gallerythree,
        description = :description, details = :details 
        WHERE id = :id');
        $query->bindParam(':name', $request['name']);
        
        $query ->bindParam(':image', $request ['image']);
        $query->bindParam(':prices', $request['prices']);
        $query->bindParam(':galleryone',$request['galleryone']);
        $query->bindParam(':gallerytwo', $request['gallerytwo']);
        $query->bindParam(':gallerythree', $request['gallerythree']);
        $query->bindParam(':description', $request['description']);
        $query->bindParam(':details', $request['details']);
        
        $query->bindParam(':id', $id);
        $query->execute();
        $query ->execute();
        return header ('Location: productDashboard.php ');
    }

    public function delete($id){
        $query=$this ->db->prepare ('DELETE from produktet WHERE id=:id');
        $query ->bindParam(':id',$id);
        $query ->execute(); 
        return header ('Location: productDashboard.php ');
    }
    public function slider(){
        $query = $this->db->prepare('SELECT * from produktet LIMIT 6');
        $query->execute();
        return $query->fetchAll();
    }
}
?>


