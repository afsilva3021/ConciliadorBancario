<?php
require_once "../config/config.php";


$query = "SELECT TOP 100 * FROM FK5010";
$stmt = $conn->query($query);
