<?php 
//select no postgres

$conn = new PDO('pgsql:host=localhost;port=5432;dbname=teste1',"postgres","senha");
//

$stmt = $conn->prepare("select * from b bx");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);


 ?>