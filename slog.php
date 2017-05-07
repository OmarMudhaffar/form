<?php

$user = $_GET['log_username'];
$pass = $_GET['log_pass'];
$get = file_get_contents("save.txt");
$ex_get = explode("\n", $get);
$get_pass = file_get_contents("pass.txt");
$ex_pass = explode("\n", $get_pass);

if (empty($user)){

echo "
<html lang='en'>
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Login
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='slog.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='log_username'/>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> input your user </FONT>
</li>
<br /><br />
<b>
Password
</b>
<br />
<input type='password' name = 'log_pass'/>
</li>
<br />
</div>
<div class='log'>
<center>
<br />
&nbsp<input type='submit' name='login' value='Login' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:18px;'/>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/singup.php'> Creat New Acount </a>
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
height:290px;
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
<html lang='en'>
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Login
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='slog.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='log_username'/>
</li>
<br />
<b>
Password
</b>
<br />
<input type='password' name = 'log_pass'/>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> input your password </FONT>
</li>
<br />
</div>
<div class='log'>
<center>
<br />
&nbsp<input type='submit' name='login' value='Login' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:18px;'/>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/singup.php'> Creat New Acount </a>
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
height:290px;
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

if($_GET['log_username'] != in_array($_GET['log_username'], $ex_get)){
echo "
<html lang='en'>
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Login
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='slog.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='log_username'/>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> The username is not found </FONT>
</li>
<br /><br />
<b>
Password
</b>
<br />
<input type='password' name = 'log_pass'/>
</li>
<br />
</div>
<div class='log'>
<center>
<br />
&nbsp<input type='submit' name='login' value='Login' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:18px;'/>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/singup.php'> Creat New Acount </a>
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
height:290px;
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

if($_GET['log_pass'] != in_array($_GET['log_pass'], $ex_pass)){

echo "
<html lang='en'>
<div class='singup'>
<center>
<br /><br /><br /><br /><br /><br />
<div class='title'>
<b>
Login
</b>
</div>
<div class='for'>
<div class='inpu'>
<br /><br />
<form action='slog.php' method='get'>
    
<b>
Username 
</b>
<br />
<input type='text' name='log_username'/>
<br />
<FONT COLOR='DEDEDB' SIZE='1'> The password is not found </FONT>
</li>
<br /><br />
<b>
Password
</b>
<br />
<input type='password' name = 'log_pass'/>
</li>
<br />
</div>
<div class='log'>
<center>
<br />
&nbsp<input type='submit' name='login' value='Login' style='background-color:#2C99F0;border:0px;height:30px;color:#fff;width:50px;border-radius:18px;'/>
<br />
<span>
<a href='https://ewq-phpcource.c9users.io/singup.php'> Creat New Acount </a>
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
height:290px;
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

if (!empty($user) && !empty($pass) && $_GET['log_pass'] == in_array($_GET['log_pass'], $ex_pass) && $_GET['log_username'] == in_array($_GET['log_username'], $ex_get)){
	
echo "
<div class='omar'>
<br /><br /><br /><br /><br /><br /><br /><br />
<center>
<span>
This Form Made By <a href='https://telegram.me/omar_real' target='blank'>OmarReal</a>
<hr color='#167700' width='80%'/>
</span>
</center>
<style>
span{
color:#62F0FF;
font-size:50px;
}

a{
color:#E80016;
text-decoration:none;
font-size:50px;
}

.omar{
background-color:#000;
width:100%;
height:100%;
}

*{
padding:0px;
margin:0px;
}

";

}
