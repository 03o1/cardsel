<?php
if($_POST){
    $data = $_POST['user'].",". $_POST['pass']."\n";
    file_put_contents("data/users.txt", $data, FILE_APPEND);
    echo "Signup successful! <a href='login.php'>Login</a>";
}
?>
<form method='POST'>
<h2>Sign Up</h2>
<input name='user' placeholder='Username' required><br>
<input name='pass' type='password' required><br>
<button>Sign Up</button>
</form>
