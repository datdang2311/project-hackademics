<?php
include("../config/config.php");
/**
 * Created by PhpStorm.
 * User: Dang Quoc Dat
 * Date: 2/21/2017
 * Time: 12:04 PM
 */

$sql = "SELECT * FROM nhanvien WHERE id=:id";
$id=2;
$result = $connection->prepare($sql);
$result->bindParam(":id",$id);
$result->execute();
$result->setFetchMode(PDO::FETCH_ASSOC);
$row = $result->fetch();
echo json_encode($row, JSON_UNESCAPED_UNICODE);