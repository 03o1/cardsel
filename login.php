<?php
session_start();
if($_POST){
    $users = @file("data/users.txt");
    if($users){
        foreach($users as $u){
            list($user,$pass)=explode(",",trim($u));
            if($_POST['user']==$user && $_POST['pass']==$pass){
                $_SESSION['user']=$user;
                header('Location: user.php'); exit;
            }
        }
    }
    echo 'Invalid login';
}
?>
<form method='POST'>
<h2>Login</h2>
<input name='user'>
<input name='pass' type='password'>
<button>Login</button>
</form>
