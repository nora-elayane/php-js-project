<?php
//user_id	user_name	user_password	user_profile	user_bio ; 
class Database{
    private $pdo ; 
    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=project;charset=utf8" , "root" , "") ; 

        } catch (PDOException $e) {
            echo $e->getMessage() ; 
        }
    }
    public function createAcc($username , $password){
            $stm = $this->pdo->prepare("INSERT INTO users (user_name ,user_password) VALUES(? , ? )") ; 
            $pass = password_hash($password , true) ; 
            $stm->execute([$username , $pass]) ; 
    }

    public function findUser($username){
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE user_name = ?") ; 
        $stm->execute([$username]) ; 
        return $stm->fetch(PDO::FETCH_ASSOC) ?:false ;
    }
}

$db = new Database() ; 




?>