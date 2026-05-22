<?php
session_start();
if(!isset($_SESSION['admin'])){
if(@$_POST['pass']=='admin123'){$_SESSION['admin']=1;} else {
echo '<form method=POST><input name=pass type=password><button>Admin</button></form>'; exit;
}}
echo "<h2>Admin Panel</h2>";
echo "<a href='add_product.php'>Add Product</a><br><br>";
echo nl2br(@file_get_contents('data/orders.txt'));
?>