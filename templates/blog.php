<!DOCTYPE html>
<html>
<head>
	<title>delete me also</title>
	<style type="text/css">
		* {
			box-sizing:border-box;
		}
		body {
			font-family:Arial;
			padding:20px;
			background-color: #f1f1f1;
		}
		#header h2 {

		}
		#header {
			background-image: url("images/coffeeshop.jpg");
			background-color: white;
			text-align:center;
			padding:180px;
			font-size:40px;

		}
		#navbar {
			
			overflow:hidden;
			background-color: black;
			/*margin-bottom: 20px;*/
		}
		#navbar a {
			text-align: center;
			text-decoration:none;
			float:left;
			color:white;
			padding:20px 22px;
			dipslay:block;
		}
		#navbar a:hover {
			background-color:#f1f1f1;
			color:black;
		}
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
			background-image:  url("images/coffee.jpeg");
			background-color:#ddd;
			padding:20px;
			width:100%;
			overflow:hidden;
		}
		#box {
			background-color:white;
			padding:20px;
			margin-top:20px;
		}
		#footer {
			background-color:#ddd;
			color:white;
			padding:20px;
			margin-top:20px;
		}
		@media (max-width 800px) {
			#left-col, #right-col {
				width:100%;
				padding:0;
			}
		}
	</style>
</head>
<body>

<div id="header">
	<h2 >Blog Header</h2>
	<p>some info about the blog</p>
</div>

<div id="navbar">
	<a href="#">We Love</a>
	<a href="#">COFFEE</a>
	<a href="#">in</a>
	<a href="#">the</a>
	<a href="#">Morning</a>
</div>

<div id="container">
	<div id="left-col">
		<div id="box">
			<h2 >WE LOVE COFFEE!</h2>
			<h5>Dec 15, 2017</h5>
			<div id='img' style="height:200px;">Image goes here
				
			</div>
		</div>
		<div id="box">
			<h2>box header 2</h2>
			<h5>Dec 15, 2017</h5>
			<div id="img" style="height:200px;">Image goes here</div>
		</div>
		<div id="box">
			<h2>box header 2</h2>
			<h5>Dec 15, 2017</h5>
			<div id="img" style="height:200px;">Image goes here</div>
		</div>
	</div>
	<div id="right-col">
		<div id="box">
			<h2><strong>Extra strong Java</strong></h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;">coffee cup</div>
		</div>
		<div id="box">
			<h2>coffee subject</h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;">coffee cup</div>
		</div>
		<div id="box">
			<h2>right column header</h2>
			<p>info about coffee</p>
			<div id="img" style="height:100px;">coffee cup</div>
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