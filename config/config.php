<?php

$server = "172.30.5.11";
$dbName = "TOTVS_TST";
$uid = "alex.felix";
$pwd = "Jonasmen@5533";


try {
  $conn = new PDO("sqlsrv:server=$server; database = $dbName", $uid, $pwd);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro na conexão " . $e->getMessage();
}
