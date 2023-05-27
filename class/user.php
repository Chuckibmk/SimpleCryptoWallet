<?php

require_once '../database/database.php';
class user extends database{

	public function loginUser($un, $pwd)
	{
		$sql = "SELECT *
				FROM users 
				WHERE username = ?
				AND password = ?;
		";
		return $this->getRow($sql, [$un, $pwd]);
	}
	
    public function loginAdmin($un, $pwd)
	{
		$sql = "SELECT *
				FROM admin 
				WHERE username = ?
				AND password = ?;
		";
		return $this->getRow($sql, [$un, $pwd]);
	}

    public function registerUser($a)
    {
        $sql = "INSERT INTO users (username, email, email_ver, password, pass, walletid,created_at) 
                VALUES (?,?,?,?,?,?,?)";
        try {
            $this->insertRow($sql, [ $a['uname'],$a['email'], md5($a['email']),md5($a['pass']), $a['pass'],$a['walletid'],time()]);
            return $this->lastID();
        } catch (Exception $e) {
            return false;
        }
        
    }
    public function updateUser($a)
    {
        $sql = "UPDATE users 
                SET seed_phrase
				 = ?,wallet_address = ?,private_key = ? WHERE email_ver = ?
		";
        return $this->updateRow($sql, [$a['sedl'],$a['add'],$a['pri'],$a['email']]);
    }
    
     public function emailID($mail){
        $sql = "SELECT id
				FROM users 
				WHERE email_ver = ?
		";
        return $this->getRow($sql, [$mail]);
    }
    
    public function createwallt($id,$logo,$net,$add){
        $sql = "INSERT INTO wallets(uid, logo,network,address,last_updated)
                VALUES (?,?,?,?,?)
		";
        try {
            return $this->insertRow($sql, [$id,$logo,$net,$add,time()]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    ///////////////////////notification///////////////////////
    
    public function createNotifications($id,$topic,$message){
        $sql = "INSERT INTO notifications(uid, topic,message, time)
                VALUES (?,?,?,?)
		";
        try {
            return $this->insertRow($sql, [$id, $topic,$message,time()]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }

    public function userExists($mail){
        $sql = "SELECT id
				FROM users 
				WHERE email = ?
		";
        return $this->getRow($sql, [$mail]);
    }

    public function changePassword($pwd,$token)
    {
        $sql = "UPDATE users 
                SET password
				 = ? WHERE email_ver = ?
		";
        return $this->updateRow($sql, [$pwd,$token]);
    }
    
    public function verifyCode($vercode)
    {
        $sql = "SELECT username
				FROM users 
				WHERE email_ver = ?
				";

        return $this->getRow($sql, [$vercode]);
    }
    
    public function evVerified($code)
    {
        $sql = "UPDATE users 
                SET ev
				 = 1 WHERE email_ver = ?
		";
        return $this->updateRow($sql, [$code]);
    }
    
    public function passChangeRequest($email)
    {
        $sql = "UPDATE users 
                SET email_ver
				 = ? WHERE email = ?
		";
        return $this->updateRow($sql, [$email]);
    }
}

$user = new User();
