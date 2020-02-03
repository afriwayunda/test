<?php
include('config.php');
$query = "SELECT max(asset_code) as maxcode FROM tbl_asset";
$etc = mysqli_query($connect,$query);
$data = mysqli_fetch_array($etc);

$code_asset = $data['maxcode'];
$num = (int) substr($code_asset, 3, 3);
$num++;

$char = "PC-";
$code_asset = $char . sprintf("%03s", $num);
?>