<?php

$user = $_GET['username'];
$pass = $_GET['pass'];
$email = $_GET['email'];


$get_user = file_get_contents('save.txt');
$ex_user = explode("\n", $get_user);

$get_email = file_get_contents('email.txt');
$ex_email = explode("\n", $get_email);
$number = strlen($_GET['pass']);
if(!empty($user) && !empty($pass) && !empty($email) && !in_array($_GET['username'], $ex_user) && !in_array($_GET['email'],$ex_email) && $number > 6){
file_put_contents('save.txt', "\n" . $user,FILE_APPEND);
file_put_contents('pass.txt', "\n" . $pass,FILE_APPEND);
file_put_contents('email.txt', "\n" . $email, FILE_APPEND);
}

if (empty($user)){
    
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username'/> 
<br />
<FONT COLOR='DEDEDB' SIZE='1'> input your user </FONT>
</li>
<br /><br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass' value=$pass>
</li>
<br />
<b>
Email
</b>
<br />
<input type='email' name='email' value=$email>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}

elseif (empty($email)){
    
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username' value=$user> 
</li>
<br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass' value=$pass>
</li>
<br />
<b>
Email
</b>
<br />
<input type='email' name='email' />
<br />
<FONT COLOR='DEDEDB' SIZE='1'> input your email </FONT>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}

elseif (empty($pass)){
    
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username' value=$user> 
</li>
<br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass'>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> input your password </FONT>
</li>
<br /><br />
<b>
Email
</b>
<br />
<input type='email' name='email' value=$email>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}

if(!empty($user) && !empty($pass) && !empty($email) && !in_array($_GET['username'], $ex_user) && !in_array($_GET['email'], $ex_email) && $number > 6){
echo '
<html lang="en">
<div class="singup">
<center>
<br /><br /><br /><br /><br /><br />
<div class="title">
<b>
Login
</b>
</div>
<div class="for">
<div class="inpu">
<br /><br />
<form action="slog.php" method="get">
    
<b>
Username 
</b>
<br />
<input type="text" name="username"/>
</li>
<br />
<b>
Password
</b>
<br />
<input type="password" name = "pass"/>
</li>
<br />
</div>
<div class="log">
<center>
<br />
&nbsp<input type="submit" name="login" value="Login" style="background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:18px;"/>
<br />
<span>
<a href="https://ewq-phpcource.c9users.io/singup.php"> Creat New Acount </a>
</span>
</form>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:250px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
';
}

if ($_GET["username"] == in_array($_GET['username'], $ex_user)){
    
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username'> 
<br />
<FONT COLOR='DEDEDB' SIZE='1'> The username is alredy use </FONT>
</li>
<br /><br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass' value=$pass>
</li>
<br />
<b>
Email
</b>
<br />
<input type='email' name='email' value=$email>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}

if ($_GET["email"] == in_array($_GET['email'], $ex_email)){
    
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username' value=$user> 
</li>
<br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass' value=$pass>
</li>
<br />
<b>
Email
</b>
<br />
<input type='email' name='email'>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> The email is alredy use </FONT>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}

if($number < 6){
	
echo "
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Sing Up 
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='save.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='username' value=$user> 
</li>
<br />
<b>
Password
</b>
<br />
<input type='password' name = 'pass'>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> your password is to short </FONT>
</li>
<br /><br />
<b>
Email
</b>
<br />
<input type='email' name='email' value=$email>
<br />
</div>
<div class='log'>
<center>
<br />
<input type='submit' name='singup' value='Sing Up' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:12px;'/>
</form>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/login.php'> Do You Have Acount ? </a>
</span>
</center>
</div>
</div>
</center>
</div>

<style>
*{
padding:0px;
margin:0px;
}

.singup{
background:#000;
width:100%;
height:100%;
}

.for{
color:#fff;
text-align:center;
width:400px;
height:350px;
background-color:rgba(255, 0, 0, 0.4);
border-bottom:1px;
border-radius:0px 0px 95px 95px;
margin-bottom:4px;
}

form input{
border:0px;
border-radius:22px;
height:20px;
color:#000;
}

form input:hover{
background-color:#000;
color:#fff;
}

.title{
color:#000;
height:50px;
width:400px;
background:#fff;
border-radius:0px 0px 0px 0px;
font-size:30px;
}

a{
text-decoration:none;
color:#fff;
line-height:3;
}

span{
color:#fff;
font-size:20px;
}

</style>
";

}
