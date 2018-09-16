<?php
include('koneksi.php');
 
$product->active = isset($_GET['active']) ? $_GET['active'] : die();
 

if($product->updateByActive()){
    echo '{';
        echo '"message": "Status Berhasil di Update."';
    echo '}';
}
else{
    echo '{';
        echo '"message": "Gagal Update Status."';
    echo '}';
}

function updateByActive(){
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                status=1
            WHERE
                active=:active";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    $this->active=htmlspecialchars(strip_tags($this->active));

    // bind values
    $stmt->bindParam(":active", $this->active);

    // execute the query
    if($stmt->execute()){
        return true;
    }

    return false;
}
?>