<?php
session_start();
if(!isset($_SESSION['user'])) header('Location: login.php');

echo "<h2>Welcome ".$_SESSION['user']."</h2>";

$products = @file("data/products.txt");
if($products){
foreach($products as $p){
list($name,$price)=explode(",",trim($p));
echo "<div>
<b>$name</b> - $price PKR
<form method='POST' action='buy.php'>
<input type='hidden' name='product' value='$name'>
<input name='category' placeholder='Category'><br>
<input name='codes' placeholder='Codes'><br>
<input name='account' placeholder='Account'><br>
<input name='whatsapp' placeholder='WhatsApp'><br>
<button>Sell</button>
</form><hr></div>";
}}
?>