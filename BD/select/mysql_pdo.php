<?php

require_once('../dados_banco.php');

try {
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM authors";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
    echo $row['firstName']. "  -  " .$row['lastName']."<br/>\n";
}
$conn->close();
?>