<?php

class OrderDB {
    
    // admin
    public static function getOrdersCondition($state, $buyDate1) {
        $db = Database::getDB();
        $query = "Select * from orders 
        where state = :state && convert(buyDate, datetime) > convert(:buyDate1, datetime) order by orderID";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':buyDate1', $buyDate1);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }
    public static function sumTotalPaid(){
        $db = Database::getDB();
        $query = "select * from orders where state = 'Đã giao'";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }
    public static function changeState($state, $orderID) {
        $db = Database::getDB();
        $query = "update orders set state = :state where orderID = :orderID";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':orderID', $orderID);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function filterOrderNotByAccount($state) {
        $db = Database::getDB();
        $query = "Select * from orders 
        where state = :state order by orderID";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }

    public static function filterOrderNotByAccountPagination($state, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from orders 
        where state = :state order by orderID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }
    public static function searchOrder($content) {
        $db = Database::getDB();
        $query = "Select * from orders 
        where orderID like '%$content%' order by orderID";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }

    public static function searchOrderPagination($content, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "Select * from orders 
        where orderID like '%$content%' order by orderID limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }
    public static function getOrders() {
        $db = Database::getDB();
        $query = "SELECT * FROM orders ORDER BY orderID desc";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }

    public static function getOrdersPagination($productNumber, $offset) {
        $db = Database::getDB();
        $query = "SELECT * FROM orders ORDER BY orderID desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }
    // user
    public static function filterOrder($state, $email) {
        $db = Database::getDB();
        $query = "select * from orders as o 
	join orderdetail as od
	on o.orderID = od.orderID
    join accounts as a
    on a.accountID = od.accountID
    where a.email = :email && o.state = :state
    group by o.orderID order by o.orderID desc";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }

    public static function filterOrderPagination($state, $email, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from orders as o 
	join orderdetail as od
	on o.orderID = od.orderID
    join accounts as a
    on a.accountID = od.accountID
    where a.email = :email && o.state = :state
    group by o.orderID order by o.orderID desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();
        return $orders;
    }

    // hủy đơn hàng
    public static function cancelOrder($orderID) {
        $db = Database::getDB();
        $query = "update orders set state = 'Đã hủy' where orderID = :orderID";
        $statement = $db->prepare($query);
        $statement->bindValue(':orderID', $orderID);
        $statement->execute();
        $statement->closeCursor();
    }

    // hiển thị hóa đơn của 1 user
    public static function getOrdersByAccount($email) {
        $db = Database::getDB();
        $query = "select * from orders as o 
	join orderdetail as od
	on o.orderID = od.orderID
    join accounts as a
    on a.accountID = od.accountID
    where a.email = :email
    group by o.orderID order by o.orderID desc";
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $getOrdersByAccount = $statement->fetchAll();
        $statement->closeCursor();
        return $getOrdersByAccount;
    }

    // hiển thị hóa đơn của 1 user có phân trang
    public static function getOrdersByAccountPagination($email, $productNumber, $offset) {
        $db = Database::getDB();
        $query = "select * from orders as o 
	join orderdetail as od
	on o.orderID = od.orderID
    join accounts as a
    on a.accountID = od.accountID
    where a.email = :email
    group by o.orderID order by o.orderID desc limit $productNumber offset $offset";
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $getOrdersByAccountPagination = $statement->fetchAll();
        $statement->closeCursor();
        return $getOrdersByAccountPagination;
    }

    // xem thông tin hóa đơn đặt hàng của 1 user
    public static function viewProductsByOrder($orderID) {
        $db = Database::getDB();
        $query = "select * from orderdetail as od 
	join orders as o 
    on o.orderID = od.orderID
    join product as p 
    on p.productID = od.productID
    join productdetails as pd 
    on pd.productID = od.productID
    where o.orderID = :orderID";
        $statement = $db->prepare($query);
        $statement->bindValue(':orderID', $orderID);
        $statement->execute();
        $viewProductsByOrder = $statement->fetchAll();
        $statement->closeCursor();
        return $viewProductsByOrder;
    }

    // cập nhật sổ lượng sản phẩm khi đặt hàng thành công 
    public static function updateQuantityAfterOrder($quantity, $productID) {
        $db = Database::getDB();
        $query = "update product set quantity = :quantity where productID = :productID";
        $statement = $db->prepare($query);
        $statement->bindValue(':quantity', $quantity);
        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $statement->closeCursor();
    }

    // thêm sản phẩm đặt hàng vào bảng order detail
    public static function addOrderDetail($orderDetailID, $orderID, $productID, $quantity_order, $subtotal, $accountID) {
        $db = Database::getDB();
        $query = "insert into orderdetail "
                . " (orderDetailID, orderID, productID, quantity_order, subtotal, accountID) values "
                . " (:orderDetailID, :orderID, :productID, :quantity_order, :subtotal, :accountID) ";
        $statement = $db->prepare($query);
        $statement->bindValue(':orderDetailID', $orderDetailID);
        $statement->bindValue(':orderID', $orderID);
        $statement->bindValue(':productID', $productID);
        $statement->bindValue(':quantity_order', $quantity_order);
        $statement->bindValue(':subtotal', $subtotal);
        $statement->bindValue(':accountID', $accountID);
        $statement->execute();
        $statement->closeCursor();
    }

    // thêm nội dung đặt hàng vào bảng order
    public static function addOrder($orderID, $total, $discountCode, $typeShip, $customerAddress, $customerNameAddress, $typePay, $note, $buyDate, $state) {
        $db = Database::getDB();
        $query = "insert into orders "
                . " (orderID, total, discountCode, typeShip, customerAddress, customerNameAddress, typePay, note, buyDate, state) "
                . " values "
                . " (:orderID, :total, :discountCode, :typeShip, :customerAddress, :customerNameAddress, :typePay, :note, :buyDate, :state) ";
        $statement = $db->prepare($query);
        $statement->bindValue(':orderID', $orderID);
        $statement->bindValue(':total', $total);
        $statement->bindValue(':discountCode', $discountCode);
        $statement->bindValue(':typeShip', $typeShip);
        $statement->bindValue(':customerAddress', $customerAddress);
        $statement->bindValue(':customerNameAddress', $customerNameAddress);
        $statement->bindValue(':typePay', $typePay);
        $statement->bindValue(':note', $note);
        $statement->bindValue(':buyDate', $buyDate);
        $statement->bindValue(':state', $state);
        $statement->execute();
        $orderID = $db->lastInsertID();
        $statement->closeCursor();
        return $orderID;
    }

}
?>

