<!DOCTYPE html>
<html>
<head>
	<title>Coffee Blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1">
	<style type="text/css">
		* {
			box-sizing:border-box;
		}
		body {
			font-family:Arial;
			padding:0;
			margin:0;
			padding-left:20px;
			padding-right:20px;
			background-color: #f1f1f1;
		}
		#header h2 {
			margin-top:20px;
		}
		#header {
			background-size:100%;	
			background-color: white;
			text-align:center;
			background-image: url("http://192.168.0.3/basics/images/coffeeshop2.png");
			padding-top:250px;
			font-size:40px;
			background-repeat: no-repeat;
			
		}

		#banner {
			
			overflow:hidden;
			background-color: black;
			opacity: .5;

		}
		#banner a {
			text-align: center;
			text-decoration:none;
			float:left;
			color:white;
			padding:20px 22px;
			dipslay:block;
		}

		#banner a:hover {
			background-color:#f1f1f1;
			color:black;
		}
		#navbar {
			overflow:hidden;
			background-color: black;
			/*margin-bottom: 20px;*/
		}
		#navbar a#drop, {
			visibility: hidden;
			float: right;
		}
		#drop, #hidedrop {
			visibility:hidden;
			
		}
		#navbar a {
			text-align: center;
			text-decoration:none;
			float:left;
			color:white;
			padding:18px 20px;
		}
		#navbar a:hover {background-color:blue;color:black;}
		
		#navbar ul  li {list-style-type:none;}

		#left-col {
			float:left;
			width:75%;
		}
		#right-col {
			float:right;
			width:25%;
			padding-left:20px;
			background-color: #f1f1f1;
		}
		#container:after {
			display:table;
			clear:both;
			content:"";
		}
		#img {
			background-image:  url("http://192.168.0.3/basics/images/coffee.jpeg");
			background-color:#ddd;
			padding:20px;
			width:100%;
			overflow:hidden;
			border-radius:8px;
			margin-bottom:20px;
			position:relative;
			top:4px;
		}
		#img:hover {

		}
		#side-img {
			
			border-radius:50%;
			width:100%;
			overflow:hidden;
			position:relative;
			margin-bottom:30px;
			
		}
		#box {
			background-color:white;
			padding:20px;
			margin-top:20px;
		}
		#footer {
			background-color:black;
			opacity:.4;
			color:white;
			padding:20px;
			margin-top:20px;
			margin-bottom:20px;
		}

/*########### MOBILE STARTS HERE #################*/
/*# NOTE: this css needs to handle the drop down for mobile ###*/
		@media (max-width:800px){
			#right-col, #left-col {
				width:100%;
				padding:0;	
			}
			body {
				padding:0;
				margin:0;
			}
			#header, #img {
				background-size:100%; 
				padding:0;
				padding-bottom: 100px;
				background-repeat:no-repeat;

			}
			/* hide header content if mobile*/
			#header p, #header a {
				visibility: hidden;
				clear:both;
				float:left;
				display:none;
			}
			
			/* make the drop down visible*/
			#navbar a#drop {
				visibility:visible;
				float:right;
				display:block;
				padding:20px;
				background-color: red;
				color:blue;

			}
			/* button to hide dropdown set to visible */
			#dropNav #hidedrop{
				visibility: visible;
				background-color: red;

			}
			/* hide navbar a tags all except first */
			#navbar a:not(:first-child) {
				display:none;
				float:right;
			}

			/* add navbar drop class for when JS changes class name*/
			#dropNav  {
				overflow:hidden;
				background-color: black;
			}
			#dropNav a {
				float:center;
				text-decoration:none;
				text-align:center;
				display:block;
				color:red;
				padding:20px 22px;
			}
			/* hide the basics dropdown button if mobile */
				/* mobile when pressed it pops up */
				/* hide home from dropdown in production*/
		}
		/*##### mobile Ends here ########*/
/*########################################################****/
/*\******** Drop Down inside Navbar styling *********\/

		/* needs scrutinized */
		#dropdown-container {
			display:inline-block;
			float:center;
			overflow:hidden;
			position:absolute;
		}
		#dropdown-container:hover #drop-down  {
			display:block;
			margin-top:52px;
			position:relative;
		}
		#dropdown-container ul li a {
				display:block;
				background:#000;
				padding:20px 30px 20px 30px;
				color: #fff;
		}

		#dropdown-container ul li:hover {
				background:#f00;
		}

		#drop-down {display: none;opacity:.5;position:absolute;}
		
		#drop-down a: {
			/*background-color: grey;*/
				text-align:left;
		}
		#dropdown-container #drop-down a:hover   {
			/*background-color: blue;*/
		}

/* all the way to here fro scrutinization */
	</style>
</head>
<body>
<?php 
## add htmlspecial characters as to hault any malicious attacks ###
echo htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ."\n\n\n");

?>
<div id="header">
	
	<h2 style="opacity: .5; color:red;">Coffee Blog</h2>
	<p style="color:#000;">We Drink Coffee</p>
	
	<div id="banner">
		
		<a href="">We Love</a>
		<a href="">COFFEE</a>
		<a href="">in</a>
		<a href="">the</a>
		<a href="">Morning</a>
	</div>
</div>


<div id="navbar">
	<a href="#">HOME</a>
	<a href="#">OF</a>
	<a href="#">THE</a>
	<div id="dropdown-container">
		<a id ="#coffee" href="#coffee">COFFEE! &#9660;</a>
		<div id="drop-down">
			<ul>
				<li><a href="#">Drop-1</a></li>
				<li><a href="#">Drop-2</a></li>
			</ul>
		</div>
	</div>

	<a href="javascript:void(0);" id="drop" onclick="dropdown()">&#9776;</a>
	<a href="javascript:void(0);" id="hidedrop" onclick="hideDrop()">&#9776;</a>
</div>
<script type="text/javascript">
	function dropdown() {
		document.getElementById("navbar").id="dropNav";
	}

	function hideDrop() {
		document.getElementById("dropNav").id="navbar";
	}
</script>
<div id="container">
	<div id="left-col">
		<div id="box">
			<h2 >WE LOVE COFFEE!</h2>
			<h5>Dec 15, 2017</h5>
			<div id='img' style="height:200px;"></div>
		</div>
		<div id="box">
			<h2>box header 2</h2>
			<h5>Dec 15, 2017</h5>
			<div id="img" style="height:200px;"></div>
		</div>
		<div id="box">
			<h2>box header 2</h2>
			<h5>Dec 15, 2017</h5>
			<div id="img" style="height:200px;"></div>
		</div>
	</div>
	<div id="right-col">
		<div id="box">
			<h2><strong>Extra strong Java</strong></h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;">
				<img id="side-img" src="http://192.168.0.3/basics/images/donut.jpg" />
			</div>
		</div>
		<div id="box">
			<h2>coffee subject</h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;"><img id="side-img" src="http://192.168.0.3/basics/images/coffee.jpeg"  /></div>
		</div>
		<div id="box">
			<h2>right column header</h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;"><img id="side-img" src="http://192.168.0.3/basics/image/icecoffee.jpg" /></div>
		</div>
		<div id="box">
			<h2>right column header</h2>
			<p>info about coffee</p>
		</div>
	</div>
</div>
<div id="footer">
	<h1>COPYRIGHT &copyOF FOOTER</h1>
</div>
</body>
</html>
