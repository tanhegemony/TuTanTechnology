<?php

class Account {

    private $accountID, $email, $password, $roles, $confirmPassword, $registerDate, $stateAccount;

    public function __construct() {
        $this->accountID = 0;
        $this->email = '';
        $this->roles = '';
        $this->password = '';
        $this->registerDate = '';
        $this->stateAccount = '';
    }
    
    public function getRegisterDate() {
        return $this->registerDate;
    }

    public function getStateAccount() {
        return $this->stateAccount;
    }

    public function setRegisterDate($value){
        $this->registerDate = $value;
    }

    public function setStateAccount($value){
        $this->stateAccount = $value;
    }

    
    public function getAccountID() {
        return $this->accountID;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        return $this->roles;
    }

    

    public function getConfirmPassword() {
        return $this->confirmPassword;
    }

    public function setAccountID($value) {
        $this->accountID = $value;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function setRoles($value) {
        $this->roles = $value;
    }


    public function setConfirmPassword($value) {
        $this->confirmPassword = $value;
    }

}
?>

