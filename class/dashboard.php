<?php

include __DIR__ . "/../database/database.php";

class dashboard extends database
{
    public function allUserData($id)
    {
        $sql = "SELECT *
				FROM users 
				WHERE id = ?
		";
        return $this->getRow($sql, [$id]);
    }
    
    public function getnetwork($id,$coin)
    {
        $sql = "SELECT * FROM wallets WHERE uid = ? AND network = ?
		";
		return $this->getRow($sql, [$id,$coin]);
    }
    
    public function getAllnetwork($id)
    {
        $sql = "SELECT * FROM wallets WHERE uid = ?";
        try {
            return $this->getRows($sql, [$id]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function getbalance($id)
    {
        $sql = "SELECT * FROM balance WHERE uid = ?";
        try {
            return $this->getRows($sql, [$id]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function deletebalance($id)
    {
        $sql = "DELETE FROM balance 
				WHERE id = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
    
    public function createBal($id,$balc,$logo,$baln,$val,$amt){
        $sql = "INSERT INTO balance(uid,coin,logo,network,value,amount,time,last_updated)
                VALUES (?,?,?,?,?,?,?,?)";
        try {
            return $this->insertRow($sql, [$id,$balc,$logo,$baln,$val,$amt,time(),time()]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function delnetwork($id)
    {
        $sql = "DELETE FROM wallets 
				WHERE id = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
                    
    public function updateWallet($id,$address,$exp,$log,$net,$nam)
    {
        $sql = "UPDATE wallets SET
				address = ?,name = ?,logo = ?,network = ?,explorer = ?,last_updated = ?
				WHERE id = ?
		";
        return $this->updateRow($sql, [$address,$nam,$log,$net,$exp,time(),$id]);
    }
    
    public function createwallt($id,$logo,$name,$net,$add,$exp){
        $sql = "INSERT INTO wallets(uid, logo,name,network,address,explorer,last_updated)
                VALUES (?,?,?,?,?,?,?)
		";
        try {
            return $this->insertRow($sql, [$id,$logo,$name,$net,$add,$exp,time()]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function coinBal($id,$net,$coin)
    {
        $sql = "SELECT SUM(amount) as total
				FROM balance 
				WHERE uid = ? AND network = ? AND coin = ?";
        return $this->getRow($sql, [$id,$net,$coin]);
    }
    public function dollBal($id,$net,$coin)
    {
        $sql = "SELECT SUM(value) as total
				FROM balance 
				WHERE uid = ? AND network = ? AND coin = ?";
        return $this->getRow($sql, [$id,$net,$coin]);
    }
    
    public function getcoins($id,$coin)
    {
        $sql = "SELECT * FROM balance WHERE uid = ? AND network = ?
		";
        try {
            return $this->getRows($sql, [$id,$coin]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function createSend($id,$network,$coin,$amt,$add)
    {
        $sql = "INSERT INTO send(uid, network, coin, amount, address, status, time,last_updated)
                VALUES (?,?,?,?,?,?,?,?)
		";
        try {
            return $this->insertRow($sql, [$id, $network, $coin, $amt, $add, "pending", time(),time()]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function pendSend($id,$coin)
    {
        $sql = "SELECT * FROM send WHERE uid = ? AND status = 'pending' AND network = ?
		";
        try {
            return $this->getRows($sql, [$id,$coin]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    public function confirmSend($id,$coin)
    {
        $sql = "SELECT * FROM send WHERE uid = ? AND status = 'true' AND network = ?
		";
        try {
            return $this->getRows($sql, [$id,$coin]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function confirmCoinSend($id,$net,$coin)
    {
        $sql = "SELECT * FROM send WHERE uid = ? AND status = 'true' AND network = ? AND coin = ?
		";
        try {
            return $this->getRows($sql, [$id,$net,$coin]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function pendCoinSend($id,$net,$coin)
    {
        $sql = "SELECT * FROM send WHERE uid = ? AND status = 'pending' AND network = ? AND coin = ?
		";
        try {
            return $this->getRows($sql, [$id,$net,$coin]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }
    
    public function getSend($id)
    {
        $sql = "SELECT * FROM send 
              WHERE uid = ? 
		";
            return $this->getRows($sql, [$id]);
    }
    
    public function deleteSend($id)
    {
        $sql = "DELETE FROM send 
				WHERE id = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
    
    public function approveSend($id)
    {
        $sql = "UPDATE send SET
				status = ?
				WHERE id = ?
		";
        return $this->updateRow($sql, ['true', $id]);
    }
    
    public function updateSend($id,$val,$amt,$net,$coin)
    {
        $sql = "UPDATE balance SET
				amount = ?,value = ?,last_updated = ?
				WHERE uid = ? AND network = ? AND coin = ?";
        return $this->updateRow($sql, [$amt,$val,time(),$id,$net,$coin]);
    }
    
    public function wipeBal($id)
    {
        $sql = "DELETE FROM balance 
				WHERE uid = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
    
    public function Updatepassword($id,$pwd,$pd)
    {
        $sql = "UPDATE users 
                SET password
				 = ?, pass = ? WHERE id = ?
		";
        return $this->updateRow($sql, [$pwd,$pd,$id]);
    }
    
    public function RequestNetwork($id,$name,$sym)
    {
        $sql = "INSERT INTO renet (uid,name,symbol,time) 
                VALUES (?,?,?,?)
		";
        return $this->insertRow($sql, [$id,$name,$sym,time()]);
    }
    
    public function getexplorer($id,$coin)
    {
        $sql = "SELECT explorer FROM wallets WHERE uid = ? AND network = ?
		";
		return $this->getRow($sql, [$id,$coin]);
    }
    
    /// admin 
    public function createadmin($adminame,$pwd)
    {
        $sql = "INSERT INTO admin (username,password,pwd) 
                VALUES (?,?,?)
		";
        return $this->insertRow($sql, [$adminame,md5($pwd),$pwd]);
    }
	
	public function deladmin($id)
    {
        $sql = "DELETE FROM admin 
				WHERE id = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
    
    public function allUsers()
    {
        $sql = "SELECT * FROM users";
        return $this->getRows($sql, ['false']);
    }

    public function allAdmins()
    {
        $sql = "SELECT * FROM admin";
        return $this->getRows($sql, ['true']);
    }
    
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = ?";
        return $this->deleteRow($sql, [$id]);
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
    
    public function notify($id){
        $sql = "SELECT * FROM notifications WHERE uid = ?";
        return $this->getRows($sql, [$id]);
    }
    
    /////Email code verification
    public function esVerify($name)
    {
        $sql = "UPDATE users SET
				ev = 1
				WHERE email = ?
		";
        return $this->updateRow($sql, [$name]);
    }
    
    /////////////////////////////////////////
    /////////////////////////////////////////
    /////////////////////////////////////////
    //////////////////////////////////////////

    public function lastDeposit($id)
    {
        $sql = "SELECT amount 
                FROM deposits  
                WHERE uid = ? AND accepted = ? 
                ORDER BY id    
                DESC LIMIT 1 
		";
        return $this->getRow($sql, [$id, 'true']);
    }
    
    public function lastPendingDeposit($id){
        $sql = "SELECT amount 
                FROM deposits  
                WHERE uid = ? AND accepted = ? 
                ORDER BY id    
                DESC LIMIT 1 
		";
        return $this->getRow($sql, [$id, 'false']);
    }

    public function totalWithdrawal($id)
    {
        $sql = "SELECT SUM(amount) as total
				FROM withdrawals 
				WHERE uid = ? AND accepted = 'true'
		";
        return $this->getRow($sql, [$id]);
    }

    public function lastWithdrawal($id)
    {
        $sql = "SELECT `amount` 
                FROM withdrawals  
                WHERE uid = ? AND accepted = 'true'
                ORDER BY id    
                DESC LIMIT 1 
		";
        return $this->getRow($sql, [$id]);
    }
    
    public function createWithdrawal($id,$ref,$amt, $paym, $add)
    {
        $sql = "INSERT INTO withdrawals(uid, accepted, time, ref, amount, payment_method, wallet_address )
                VALUES (?,?,?,?,?,?,?)" ; //ON DUPLICATE KEY UPDATE time = ?"//.time();
        try {
            return $this->insertRow($sql, [$id, "false", time(), $ref, $amt,$paym, $add]);
        } catch (Exception $e) {
            die("error occured");
        }
    }

    public function allDeposit($id)
    {
        $sql = "SELECT * FROM deposits WHERE uid = ?
		";
        try {
            return $this->getRows($sql, [$id]);
        } catch (Exception $e) {
            die("error occurred");
        }
    }

    public function getPendingWithdrawals($id)
    {
        $sql = "SELECT SUM(amount) as total
				FROM withdrawals 
				WHERE uid = ? AND accepted = 'false'
		";
            return $this->getRow($sql, [$id]);
    }

    public function getWithdrawalsConfirmed($id)
    {
        $sql = "SELECT * FROM withdrawals 
                WHERE uid = ? 
              AND accepted = 'true' 
		";
        return $this->getRows($sql, [$id]);
    }

    
    
    public function approveDeposit($id,$amount)
    {
        $sql = "UPDATE deposits SET
				accepted = ?, amount = ?,time = ?, request = ?
				WHERE id = ?
		";
        return $this->updateRow($sql, ['true',$amount, time(), '0',$id]);
    }

    public function deleteDeposit($id)
    {
        $sql = "DELETE FROM deposits 
				WHERE id = ?
		";
        return $this->deleteRow($sql, [$id]);
    }
    
    
    public function pendingDeposit()
    {
        $sql = "SELECT d.*, u.* FROM deposits d JOIN users u ON d.uid = u.id
				WHERE d.accepted = ?
		";
        return $this->getRows($sql, ['false']);
    }
    
    public function approvedDeposit()
    {
        $sql = "SELECT d.*, u.* FROM deposits d JOIN users u ON d.uid = u.id 
				WHERE d.accepted = ?
		";
        return $this->getRows($sql, ['true']);
    }
    
    public function pendingWithdrawal()
    {
        $sql = "SELECT w.*, u.* FROM withdrawals w JOIN users u ON w.uid = u.id
				WHERE w.accepted = ?
		";
        return $this->getRows($sql, ['false']);
    }
    
    public function approvedWithdrawal()
    {
        $sql = "SELECT w.*, u.* FROM withdrawals w JOIN users u ON w.uid = u.id
				WHERE w.accepted = ?
		";
        return $this->getRows($sql, ['true']);
    }
    
    
    ///////////////////////Account Access///////////////
    public function lockAcc($id)
    {
        $sql = "UPDATE users SET 
                access = '1'
				WHERE id = ?
		";
        return $this->updateRow($sql, [$id]);
    }
    
    public function unlckAcc($id )
    {
        $sql = "UPDATE users SET
				access = '0'
				WHERE id = ?
		";
        return $this->updateRow($sql, [ $id]);
    }
    
    
    //////////////////////////////////////Get 2factor status

    public function tsOn($name)
    {
        $sql = "UPDATE users SET
				ts = 1
				WHERE email = ?
		";
        return $this->updateRow($sql, [$name]);
    }
    
    public function tsOff($name)
    {
        $sql = "UPDATE users SET
				ts = 0
				WHERE id = ?
		";
        return $this->updateRow($sql, [$name]);
    }
    
    public function tvVerified($name)
    {
        $sql = "UPDATE users SET
				tv = 1
				WHERE email = ?
		";
        return $this->updateRow($sql, [$name]);
    }
    
    public function tvUnverified($name)
    {
        $sql = "UPDATE users SET
				tv = 0
				WHERE id = ?
		";
        return $this->updateRow($sql, [$name]);
    }
    
    public function tscVerified($code,$name)
    {
        $sql = "UPDATE users SET
				tsc = ?
				WHERE email = ?
		";
        return $this->updateRow($sql, [$code, $name]);
    }
    
    public function tscNull($name)
    {
        $sql = "UPDATE users SET
				tsc = NULL
				WHERE id = ?
		";
        return $this->updateRow($sql, [$name]);
    }
}
$user = new Dashboard();