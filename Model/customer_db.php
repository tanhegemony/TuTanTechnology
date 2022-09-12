<?php
class CustomerDB{
    // admin
    public static function getCustomerByID($customerID) {
        $db = Database::getDB();
        $query = 'SELECT * FROM customer WHERE customerID = :customerID ';
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customerID);
        $statement->execute();
        $customer = $statement->fetch();
        $statement->closeCursor();
        return $customer;
    }
    public static function searchCustomer($content) {
        $db = Database::getDB();
        $query = "Select * from customer where customerName like '%$content%' "
                . " or customerPhone like '%$content%' "
                . " or customerEmail like '%$content%' order by customerID";
        $statement = $db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll();
        $statement->closeCursor();
        return $customers;
    }
    public static function searchCustomerPagination($content, $customerNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from customer where customerName like '%$content%' "
                . " or customerPhone like '%$content%' "
                . " or customerEmail like '%$content%' order by customerID limit $customerNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll();
        $statement->closeCursor();
        return $customers;
    }
    public static function getCustomersPagination($customerNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from customer order by customerID limit $customerNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll();
        $statement->closeCursor();
        return $customers;
    }
    public static function getCustomers() {
        $db = Database::getDB();
        $query = "Select * from customer order by customerID";
       $statement = $db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll();
        $statement->closeCursor();
        return $customers;
    }
    public static function deleteCustomer($customerID) {
        $db = Database::getDB();
        $query = 'DELETE FROM customer WHERE customerID = :customerID';
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customerID);
        $statement->execute();
        $statement->closeCursor();
    }
    // user
    public static function updateCustomer($customerID, $customerImage, $customerName, $customerPhone,
            $customerAddress, $customerNameAddress) {
        $db = Database::getDB();
        $query = "update customer set customerImage = :customerImage, customerName = :customerName, customerPhone = :customerPhone, "
                . " customerAddress = :customerAddress, customerNameAddress = :customerNameAddress"
                . " where customerID = :customerID ";
        $statement = $db->prepare($query);
        $statement->bindValue(':customerImage', $customerImage);
        $statement->bindValue(':customerName', $customerName);
        $statement->bindValue(':customerPhone', $customerPhone);
        $statement->bindValue(':customerAddress', $customerAddress);
        $statement->bindValue(':customerNameAddress', $customerNameAddress);
        $statement->bindValue(':customerID', $customerID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function getCustomer($accountID) {
        $db = Database::getDB();
        $query = "select * from customer where accountID=:accountID";
        $statement = $db->prepare($query);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $customer = $statement->fetch();
        $statement->closeCursor();
        return $customer;
    }
    //thêm tài khoản
    public static function addCustomer($customerID, $customerImage, $customerName, $customerPhone, $customerEmail,
            $customerAddress, $customerNameAddress, $accountID) {
        $db = Database::getDB();
        $query = "INSERT INTO customer (customerID, customerImage, customerName, customerPhone, customerEmail, "
                . " customerAddress, customerNameAddress, accountID) "
                . " values "
                . " (:customerID, :customerImage, :customerName, :customerPhone, :customerEmail, "
                . " :customerAddress, :customerNameAddress, :accountID)";
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customerID);
        $statement->bindValue(':customerImage', $customerImage);
        $statement->bindValue(':customerName', $customerName);
        $statement->bindValue(':customerPhone', $customerPhone);
        $statement->bindValue(':customerEmail', $customerEmail);
        $statement->bindValue(':customerAddress', $customerAddress);
        $statement->bindValue(':customerNameAddress', $customerNameAddress);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $statement->closeCursor();
    }
}
    
?>

