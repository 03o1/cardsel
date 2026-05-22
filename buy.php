<?php
session_start();
$data = $_SESSION['user'].",". $_POST['product'].",". $_POST['category'].",". $_POST['codes'].",". $_POST['account'].",". $_POST['whatsapp'].",".date('Y-m-d H:i')."\n";
file_put_contents('data/orders.txt',$data,FILE_APPEND);
echo "Order saved";
?>