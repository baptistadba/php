<?php 
//seçect no mysql

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', "root", "");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);


 ?>