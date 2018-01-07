<!DOCTYPE html>
<head>
<style type="text/css">
* {

box-sizing:border-box;
}
body {
margin:0;
padding:0;
background:#ddd;
}
ul {
list-style-type:none;
overflow:hidden;
margin:0px;
padding:10px;
background:white;
color:black;
}
#navbar  {
border-bottom: 2px solid #939496;
box-shadow:5px 10px #888;
margin-bottom:15px;

}
ul li {
float:left;
padding:8px;
}
li a {
	font-family:Verdana, Geneva, sans-serif;
	font-style:normal;
	font-weight:500;
text-decoration:none;
text-align:center;
display:block;
color:grey;
padding-left:20px;
}
#dropdown a{

padding:0px;
margin:0px;
}
li a:hover {
color:black;
}
#content a{
display:block;
padding:10px;
}
#content {
color:grey;

}
#dropdown #content  {
display:none;
position:absolute;
min-width:120px;
}
#dropdown:hover #content {
display:block;
background: white;
color:white;
}
#header {
width:100%;
background:black;
text-align:center;
padding:180px;
background-repeat: no-repeat;
background-size:75%;
background-image: url("http://192.168.0.3/basics/images/Supreme_pizza.png");
float:right;
background-position:right; /* life saver here */
}


/*#bgpic {
	float:left;
	width:50%;
background:white;
padding:180px;
background-repeat:no-repeat;
background-size: 50%;
background-image: url("http://192.168.0.3/basics/images/50-off.png");
}*/
/*#container {
background:white;
margin-top:20px;
padding:0px;
}*/
#container:after {
clear:both;
display:table;
content:"";

}

#box {
background:#ddd;
margin-top:20px;
}
#footer {
padding:20px;
background:black;
color:#ddd;
}
#left-col {
width:25%;
padding:30px;
height:300px;
margin:20px;
float:left;
text-align: left;
background-color:white;
box-shadow: 5px 10px #888;
}
#right-col {
box-shadow: 5px 10px #888;
text-align:left;
padding:30px;
height:300px;
margin:20px;
margin-left:30px;
float:left;
width:30%;
background:white;
}


#img-menu {
background-image:url("http://192.168.0.3/basics/images/small-pandd.jpeg");
overflow:hidden;
padding:20px;
width:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}
#img-menu-2 {
	background-size:100%;
background-image:url("http://192.168.0.3/basics/images/special.jpg");
overflow:hidden;
padding:20px;
width:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}
#img-menu-1 {
background-image:url("http://192.168.0.3/basics/images/hot.jpg");
overflow:hidden;
padding:20px;
width:100%;
background-size:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}


#img-menu-3 {
background-image:url("http://192.168.0.3/basics/images/pasta.jpeg");
overflow:hidden;
padding:20px;
width:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}
#img-menu-4 {
	background-size:100%;
background-image:url("http://192.168.0.3/basics/images/dessert.jpg");
overflow:hidden;
padding:20px;
width:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}
#img-menu-5 {
background-image:url("http://192.168.0.3/basics/images/drinks.jpg");
overflow:hidden;
padding:20px;
width:100%;
background-size:100%;
padding-bottom: 160px;
position:;
display:block;
background-repeat: no-repeat;


}

#left-col a {
	color:black;
text-decoration:none;
}
#footer {
	padding:160px;
}
#footer #contacts  {
padding-left: 160px;
float:left;
display:block;
}
#footer #services {
	padding:20px;
	padding-left:80px;
display:block;
float:left;
}
#footer #about {
	padding-left:80px;
	padding:20px;
display:block;
float:left;
}
#footer #customer {
padding:20px;
display:block;
}
#header #button a {
text-decoration:none;
color:white;
}
#header #button {
border-radius:12px;
background-color:red;
/*display:inline-block;*/
margin:4px 2px;
font-size:16px;
position:absolute;
left:20px;
bottom:230px;
text-align:center;
padding:20px;
border:none;
float:left;
}
#header h1 {
	font-size:50px;
position:absolute;
bottom:300px;
left:20px;
color:red;
}
</style>
</head>
<html>
<body>
<ul id="navbar">
<li><a href="#">Contact Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Customer Support</a></li>
<li><a><li id="dropdown" ><a>Menu &#9660;</a>
<div id="content">
<a href="#">Chicken wings</a>
<a href="#">Pizza</a>
<a href="#">dessert</a>
<a href="#">Pastas</a>
<a href="#">Deals</a>
<a href="#">drop-5</a>
<a href="#">drop-6</a>
<a href="#">drop-7</a>
<a href="#">drop-8</a>
<a href="#">drop-9</a>
</div>
</li>

<a href="#"><img height="60px" style="float:right;padding-right:20px;" src="http://192.168.0.3/basics/images/yum.png"/></a>
<li style="float:right;display:block;padding-right:20px;"><a>home</a></li>
<li style="float:right"><a href="#" >Sign-up/login</a></li>
</ul>
<div id="header-container">
<div id="bgpic"> </div>

<div id="header">
<h1><i>We Deliver Fast</i></h1> 
<div id="button">
<a href="#">Order Now</a>
</div>
</div>
</div>
<div id="container">
<div id="left-col">
<h4 style='color:red; '>Pizza</h4>
<a href="menu">
<div id="box">
<div style="height:100px;" id="img-menu"></div>
</a>
</div>
</div>
<div id="right-col">
<p style='color:red'>Mozzarella Sticks</p>
<div id="box">
<div id="img-menu-2"></div>
</div>
</div>

<div id="right-col">
<p style='color:red'>Chicken Wings</p>
<div id="box">
<div id="img-menu-1"></div>
</div>
</div>

<div id="left-col">
<p style='color:red'>Pastas</p>
<a href="menu">
<div id="box">
<div style="height:100px;" id="img-menu-3"></div>
</a>
</div>
</div>
<div id="right-col">
<p style='color:red'>Desserts</p>
<div id="box">
<div id="img-menu-4"></div>
</div>
</div>

<div id="right-col">
<p style='color:red'>Drinks</p>
<div id="box">
<div id="img-menu-5"></div>
</div>
</div>
</div>
<div id="footer">
<div  id="contacts">
<h4>Contact<h4>
<h4>City where you reside</h4>
<h4>State</h4>
<h4>Zip Code</h4>
<h4>Email@address</h4>
<h4>Phone number</h4>

</div>
<div id="services">
<h3>Our Services</h3>
<h4>lorem</h4>
<h4>ipsum</h4>
<h4>Dolor</h4>
</div>
<div id="about">
<h3>About Us</h3>
<h4>lorem</h4>
<h4>ipsum</h4>
<h4>dolor</h4>
<h4>amet</h4>
</div>
<div id="customer">
<h3>Customer Service</h3>
<h4>Contacts Us</h4>
<h4>Find Our Restaurant</h4>
<h4>FAQ</h4>
</div>
<h3 style="float:right; padding:60px;">Copyright &copyJan 6, 2017<h3>
</div>
</body>
</html>