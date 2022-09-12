<?php

class Member {

    private $memberID, $emailMember, $joinDate, $accountID;

    public function __construct() {
        $this->memberID = 0;
        $this->emailMember = '';
        $this->joinDate = '';
        $this->accountID = 0;
        
    }

    public function getJoinDate() {
        return $this->joinDate;
    }

    public function setJoinDate($value){
        $this->joinDate = $value;
    }

        
    public function getMemberID() {
        return $this->memberID;
    }

    public function getEmailMember() {
        return $this->emailMember;
    }

    public function getAccountID() {
        return $this->accountID;
    }

    public function setMemberID($value) {
        $this->memberID = $value;
    }

    public function setEmailMember($value) {
        $this->emailMember = $value;
    }

    public function setAccountID($value) {
        $this->accountID = $value;
    }

}
?>

