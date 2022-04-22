<?php

    require_once 'dbConnect.php';
    //calssa useri
    class Useri extends dbConnect{
        private $id;
        private $email;
        private $password;
        private $confirm_password;
        private $role;

        private $dbconn;

        public function __construct($id='', $email='', $password='', $confirm_password='', $role=''){
            $this->id=$id;
            $this->email=$email;
            $this->password=$password;
            $this->confirm_password=$confirm_password;
            $this->role=$role;

            $this->dbconn=$this->connectDB();

        }
        public function setId($id){
            $this->id=$id;

        }
        public function getId(){
            return $this->id;

        }
        public function setEmail($email){
            $this->email=$email;

        }
        public function getEmail(){
            return $this->email;
 
         }

         public function setPassword($password){
            $this->password=$password;

        }
        public function getPassword($password){
            $this->password=$password;

        }
        public function setRole($role){
            $this->role=$role;

        }
        public function getRole(){
           return $this->role;

        }

        //Crud
        //i insertojme te dhenat
        public function insertoDhenat($request){
            
            
            $sql="INSERT INTO `user`(,`email`,`password`, `confirm_password`,`role`)  VALUES (:email,:password,:confirm_password, :role)";

            $stm=$this->dbconn->prepare($sql);

        
           $stm->bindParam(':email',$request['email']);
           $stm->bindParam(':password',$request['password']);
           $stm->bindParam(':confirm_password',$request['confirm_password']);
           $stm->bindParam(':role',$request['role']);
         

           
            if( $stm->execute()) {
                $message = "Successfully created your account";
            } else {
                header("Location: login.php?error=Sorry,A problem occurred creating your account");
                
            }
            
        }
        public function insert($e,$p,$c){
            
            
            $sql="INSERT INTO user(,`email`,`password`,`confirm_password`)  VALUES (:email,:password, :confirm_password)";

            $stm=$this->dbconn->prepare($sql);

           $stm->bindParam(':email',$e);
           $stm->bindParam(':password',$p);
           $stm->bindParam(':confirm_password',$c);
          
         

           
            if( $stm->execute()) {
                $message = "Successfully created your account";
            } else {
                header("Location: login.php?error=Sorry,A problem occurred creating your account");
                
            }
            
        }
//kthene vetem nje User qe e ka email e njejt me ate qe ja dergojme
        public function lexoUserin($email){
            $sql="SELECT * FROM user where email=:email";

            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':email',$email);
            $stm->execute();

            return $stm->fetch();

        }
//kthene te gjitha te dhenat nga useri 
        public function lexoDhenat(){
            $sql="SELECT * FROM user";

            $stm=$this->dbconn->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();

        }

//edit
        public function edit($id){
                              
         $query = $this->dbconn->prepare('SELECT * from user WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
  
        }
//update
        public function update($request, $id){
            $query = $this->dbconn->prepare('UPDATE user SET 
            email = :email,  role = :role WHERE id = :id');//SET-me i perditesu te dhenat
           $query->bindParam(':email',$request['email']);
         
           $query->bindParam(':role',$request['role']);
           $query->bindParam(':id', $id);
            $query->execute();
    
            return header('Location: userDashboard.php');
        }
        //fshijme userin ne database
        public function deleteDhenat($id){
            $sql = "DELETE FROM user where id=:id";

            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':id', $id);
            $stm->execute();
            return header("Location: userDashboard.php");

        }
    }

    
?>