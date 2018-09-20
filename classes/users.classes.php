<?php
	class users
	{
		protected $db = null;

		public function __construct($db){
			$this->db = $db;
		}

		public function registerUsers($email, $password, $name, $nick, $isPT){

			$encPass = password_hash($password, PASSWORD_DEFAULT);
			//Insert users data into the database
			$query = "INSERT INTO users (email, password, name, nickname, isPT) VALUES (:email, :password, :name, :nickname, :isPT)";
			$pdo = $this->db->prepare($query);
			$pdo->bindParam(':email', $email);
			$pdo->bindParam(':password', $encPass);
			$pdo->bindParam(':name', $name);
			$pdo->bindParam(':nickname', $nick);
			$pdo->bindParam(':isPT', $isPT);
			$pdo->execute();

      return $this->db->lastInsertId();
		}

    public function checkUser($email, $password){
    	//gets the users email and password and checks to see if they exsist.
    	$query = "SELECT * FROM users WHERE user_email = :email";
    	$pdo = $this->db->prepare($query);
    	$pdo->bindParam(':email', $email);
    	$pdo->execute();

    	$user = $pdo->fetch(PDO::FETCH_ASSOC);

    	if(empty($user)){
    		return false;
    	}else if(password_verify($password, $user[‘user_password’])){
    		return $user;
    	}else{
    		return false;
    	}
    }
	}
?>
