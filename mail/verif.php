<?php

 
// include database and object files
include('koneksi.php');

$active = isset($_GET['active']) ? $_GET['active'] : die();
 
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



if($stmt->execute()){
    echo '{';
        echo '"message": "Status Berhasil di Update."';
    echo '}';
}
else{
    echo '{';
        echo '"message": "Gagal Update Status."';
    echo '}';
}

  
?>