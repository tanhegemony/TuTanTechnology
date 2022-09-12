<?php

class MemberDB {
    // admin
    public static function getMembersPagination($memberNumber, $offset){
        $db = Database::getDB();
        $query = "SELECT * FROM members ORDER BY memberID limit $memberNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $members = $statement->fetchAll();
        $statement->closeCursor();
        return $members;
    }
    public static function getMembersCondition($joinDate1) {
        $db = Database::getDB();
        $query = "select * from members where convert(joinDate, datetime) > convert(:joinDate1, datetime)";
        $statement = $db->prepare($query);
        $statement->bindValue(':joinDate1', $joinDate1);
        $statement->execute();
        $members = $statement->fetchAll();
        $statement->closeCursor();
        return $members;
    }
    public static function searchMember($content) {
        $db = Database::getDB();
        $query = "select * from members where emailMember like '%$content%' 
        order by memberID";
        $statement = $db->prepare($query);
        $statement->execute();
        $members = $statement->fetchAll();
        $statement->closeCursor();
        return $members;
    }

    public static function searchMemberPagination($content, $memberNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from members where emailMember like '%$content%' 
        order by memberID limit $memberNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $members = $statement->fetchAll();
        $statement->closeCursor();
        return $members;
    }
   public static function deleteMembers($memberID) {
        $db = Database::getDB();
        $query = "DELETE FROM members WHERE memberID = :memberID";
        $statement = $db->prepare($query);
        $statement->bindValue(':memberID', $memberID);
        $statement->execute();
        $statement->closeCursor();
    }
    // user
    public static function addMember($memberID, $emailMember, $joinDate, $accountID) {
        $db = Database::getDB();
        $query = "INSERT INTO members(memberID, emailMember, joinDate, accountID) "
                . " values "
                . " (:memberID, :emailMember, :joinDate, :accountID)";
        $statement = $db->prepare($query);
        $statement->bindValue(':memberID', $memberID);
        $statement->bindValue(':emailMember', $emailMember);
        $statement->bindValue(':joinDate', $joinDate);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function getMembers() {
        $db = Database::getDB();
        $query = "SELECT * FROM members order by memberID";
        $statement = $db->prepare($query);
        $statement->execute();
        $members = $statement->fetchAll();
        $statement->closeCursor();
        return $members;
    }

    public static function getMemberByAccountID($accountID) {
        $db = Database::getDB();
        $query = "SELECT * FROM members where accountID = :accountID";
        $statement = $db->prepare($query);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $row = $statement->fetch();
        if (($row)) {
            $member = new Member();
            $member->setAccountID($row['accountID']);
            $member->setEmailMember($row['emailMember']);
            $member->setJoinDate($row['joinDate']);
            $member->setMemberID($row['memberID']);
            return $member;
        }
    }

}
?>

