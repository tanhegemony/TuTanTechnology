<?php

class AccountDB {
    
    // admin
    public static function deleteAccount($accountID) {
        $db = Database::getDB();
        $query = 'DELETE FROM accounts WHERE accountID = :accountID';
        $statement = $db->prepare($query);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function getAccountsPagination($accountNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from accounts order by accountID limit $accountNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $accounts = $statement->fetchAll();
        $statement->closeCursor();
        return $accounts;
    }
    public static function getAccountByID($accountID) {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts WHERE accountID = :accountID ';
        $statement = $db->prepare($query);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $row = $statement->fetch();
        $account = new Account();
        $account->setAccountID($row['accountID']);
        $account->setEmail($row['email']);
        $account->setRoles($row['roles']);
        $account->setStateAccount($row['stateAccount']);
        $account->setRegisterDate($row['registerDate']);
        return $account;
    }
    public static function searchAccount($content) {
        $db = Database::getDB();
        $query = "Select * from accounts where email like '%$content%' order by accountID";
        $statement = $db->prepare($query);
        $statement->execute();
        $accounts = $statement->fetchAll();
        $statement->closeCursor();
        return $accounts;
    }
    public static function searchAccountPagination($content, $accountNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from accounts where email like '%$content%' "
                . "order by accountID limit $accountNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $accounts = $statement->fetchAll();
        $statement->closeCursor();
        return $accounts;
    }
    public static function getAccountByState($stateAccount) {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts WHERE stateAccount = :stateAccount ';
        $statement = $db->prepare($query);
        $statement->bindValue(':stateAccount', $stateAccount);
        $statement->execute();
        $accounts = $statement->fetchAll();
        $statement->closeCursor();
        return $accounts;
    }
    public static function updateAccountAdmin($accountID, $roles) {
        $db = Database::getDB();
        $query = "update accounts set  roles = :roles"
                . " where accountID = :accountID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':roles', $roles);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $statement->closeCursor();
    }
    // user
    //cập nhật mật khẩu
    public static function updatePassword($email, $password) {
        $db = Database::getDB();
        $query = "Update accounts set password = :password "
                . " where email = :email";
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    }

    //cập nhật tài khoản
    public static function updateAccount($email, $stateAccount) {
        $db = Database::getDB();
        $query = "Update accounts set stateAccount = :stateAccount "
                . " where email = :email";
        $statement = $db->prepare($query);
        $statement->bindValue(':stateAccount', $stateAccount);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    }

    //thêm tài khoản
    public static function addAccount($accountID, $email, $password, $roles, $registerDate, $stateAccount) {
        $db = Database::getDB();
        $query = "INSERT INTO accounts (accountID, email, password, roles, registerDate, stateAccount) "
                . " values "
                . " (:accountID, :email, :password, :roles, :registerDate, :stateAccount)";
        $statement = $db->prepare($query);
        $statement->bindValue(':accountID', $accountID);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':roles', $roles);
        $statement->bindValue(':registerDate', $registerDate);
        $statement->bindValue(':stateAccount', $stateAccount);
        $statement->execute();
        $statement->closeCursor();
    }

    
    public static function checkLogin($email, $password) {
        $db = Database::getDB();
        $query = "select * from accounts where email = '$email' and password = '$password'";
        $statement = $db->prepare($query);
        $statement->execute();
        $login = $statement->fetch();
        $statement->closeCursor();
        return $login;
    }


    public static function getAccount($email) {
        $db = Database::getDB();
        $query = "select * from accounts where email=:email";
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        $account = new Account();
        $account->setRoles($row['roles']);
        $account->setStateAccount($row['stateAccount']);
        $account->setPassword($row['password']);
        $account->setRegisterDate($row['registerDate']);
        $account->setEmail($row['email']);
        $account->setAccountID($row['accountID']);
        return $account;
    }

    public static function getAccounts() {
        $db = Database::getDB();
        $query = "select * from accounts";
        $statement = $db->prepare($query);
        $statement->execute();
        $accounts = $statement->fetchAll();
        $statement->closeCursor();
        return $accounts;
    }

}
?>

