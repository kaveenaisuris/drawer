<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: "Ink Free";
    font-style: italic;
}
header{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("image/fire.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.title{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,50%);
}
.title h1{
    color: #fff;
    font-size: 60px;
}
.login{
    position: absolute;
    top: 45%;
    left: 25%;
    font-size: 20px;
    transform: translate(-50%,50%);
}
.lgn{
    border: 1px solid #fff;
    padding: 15px 50px;
    color:#fff;
    text-decoration: navy;
    transition: 0.6s ease;
}
.lgn:hover{
    background-color: #fff;
    color: #000;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.register{
    position: absolute;
    top: 45%;
    left: 73%;
    font-size: 20px;
    transform: translate(-50%,50%);
}
.rgstr{
    border: 1px solid #fff;
    padding: 15px 40px;
    color:#fff;
    text-decoration: none;
    transition: 0.6s ease;
}
.rgstr:hover{
    background-color: #fff;
    color: #000;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

body{
    margin: 0;
    padding: 0;
    background: url("image/fire.jpg");
    background-size: cover;
    font-family: "Ink Free";
}
.loginBox{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    height: 420px;
    padding: 80px 40px;
    box-sizing: border-box;
    background: rgba(0,0,0,0.5);
}
.registerBox{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    height: 470px;
    padding: 80px 40px;
    box-sizing: border-box;
    background: rgba(0,0,0,0.5);
}

.user{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: calc(-100px/2);
    left: calc(50% - 50px);
}
h2
{
	margin: 0;
	padding: 0 0 20px;
    color: #cf3f1b;
	text-align: center;
}
.loginBox p,.registerBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.loginBox input,.registerBox input
{
	width: 100%;
	margin-bottom: 20px;
}

.loginBox input[type="text"],
.loginBox input[type="password"],
.registerBox input[type="text"],
.registerBox input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
        font-size: 16px;
}

.loginBox input[type="text"],.registerBox input[type="text"]{
    font-family: sans-serif;
}


.loginBox input[type="submit"],.registerBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #cc4506;
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="submit"]:hover,
.registerBox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}
.loginBox a,.registerBox a
{
	color: orangered;
	font-size: 14px;
	font-weight: bold;
	text-decoration: underline;
}
.loginBox a:hover,.registerBox a:hover{
    color: blue;
}


            </style>
    </head>


    <body>
        <header>
            <div class="title">
                <h1>Homepage</h1>
            </div>
            <div class="login">
                <a href="login" class="lgn">Login</a>
            </div>
            <div class="register">
                <a href="register" class="rgstr">Register</a>
            </div>
        </header>
    </body>
</html>
