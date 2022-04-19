<?php
require_once '../config/Database.php';

class MenuController {
    public $db;

    public function __construct(){
        $this ->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this ->db->pdo->query ('SELECT = from User');
         return $query->fetchAll();
    }

    public function insert($request){
        $query = $this ->db->pdo->prepare('INSERT INTO User(email,password, confirm password,role)
        VALUES(:email, :password, :confirm password, :role)');  
        $query ->bindParam(':email', $request ['Email']);
        $query ->bindParam(':password', $request ['Password']);
        $query ->bindParam(':confirm email', $request ['Confirm Email']);
        $query ->bindParam(':role', $request ['Role']);
        $query ->execute();
        return header ('Location: Profound.html '); 
    }

    public function edit($id){
        $query = $this ->db->pdo->prepare ('SELECT * from user WHERE id = :id');
        $query ->bindParam(':id',$id);
        $query ->execute();
        return $query->fetch();
    }
    public function update($request, $id){
        $query =$this->db->pdo->prepare ('UPDATE User SET email=:email, password=:password, confirm password=:password, role=:role Where id =:id');
        $query ->bindParam(':email', $request ['Email']);
        $query ->bindParam(':password', $request ['Password']);
        $query ->bindParam(':confirm email', $request ['Confirm Email']);
        $query ->bindParam(':role', $request ['Role']);
        $query ->bindParam(':id',$id);
        $query ->execute();
        return header ('Location: Profound.html ');
    }

    public function delete($id){
        $query = $this ->db->pdo->prepare ('DELETE from User WHERE id=:id');
        $query ->bindParam(':id',$id);
        $query ->execute(); 
        return header ('Location: Profound.html ');
}


?>