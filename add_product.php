<?php
session_start();
if(!isset($_SESSION['admin'])) die('No access');

if($_POST){
$data=$_POST['name'].",".$_POST['price']."\n";
file_put_contents('data/products.txt',$data,FILE_APPEND);
echo "Added";
}
?>
<form method='POST'>
<input name='name'>
<input name='price'>
<button>Add</button>
</form>
