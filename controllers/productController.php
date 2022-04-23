<?php
require_once 'dbConnect.php';

class productController extends dbConnect{
    public $db;//permes db me iu qas databazes

    public function __construct(){
    
        $this->db=$this->connectDB();
    }

    //CRUD

    public function readData(){
        $query = $this->db->prepare('SELECT * from product');// ruhen te dhenat prej databazes
        $query->execute();
        return $query->fetchAll();//fetch sepse rikthehet ne forme te objektit
    }

    public function insert($request){
        $query = $this ->db->prepare('INSERT INTO User(email,password, confirm password,role)
        VALUES(:email, :password, :confirm password, :role)');  
        $query ->bindParam(':name', $request ['Name']);
        $query ->bindParam(':image', $request ['Image']);
        $query ->bindParam(':price', $request [' Price']);
        $query ->bindParam(':added_by', $request ['Added_by']);
        $query ->execute();
        return header ('Location: productDashboard.php '); 
    }

    public function edit($id){
        $query = $this ->db->prepare ('SELECT * from product WHERE id = :id');
        $query ->bindParam(':id',$id);
        $query ->execute();
        return $query->fetch();
    }
    public function update($request, $id){
        $query =$this->db->prepare ('UPDATE Product SET name=:name, image=:image,  price=:price, added_by=:added_by Where id =:id');
        $query ->bindParam(':name', $request ['Name']);
        $query ->bindParam(':image', $request ['Image']);
        $query ->bindParam(':price', $request [' price']);
        $query ->bindParam(':added_by', $request ['added_by']);
        $query ->bindParam(':id',$id);
        $query ->execute();
        return header ('Location: productDashboard.php ');
    }

    public function delete($id){
        $query=$this ->db->prepare ('DELETE from Product WHERE id=:id');
        $query ->bindParam(':id',$id);
        $query ->execute(); 
        return header ('Location: productDashboard.php ');
    }
}
?>


