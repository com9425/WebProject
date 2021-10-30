<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Guitar Info.</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
			div.course_title{
				border:1px dotted gray;
				overflow:auto;
				padding:10px;
				margin-bottom:30px;
			}
			div.course_title img{
				float:left;
				border:1px solid #ccc;
				padding:5px;
			}
			div.course_title ul{
				margin-left:300px; 
			}
			div.course_title ul li{
				font-size:14pt;
				margin-bottom:10px;
			}
			div.course_title ul span.title{
				display:inline-block;
				width:100px;
			}
			div.course_title ul span#course_name{
				color:red;
				font-weight:bold;
			}
			div.course_title a{
				display:inline-block;
				padding:10px;
				background-color:green;
				color:white;
				width: 100px;
				text-align:center;
				text-decoration:none;
				margin-left:400px;
			}
			div.course_title a:hover{
				background-color: red;
			}
			img{
				width:auto;
				height: auto;
			}
		</style>
	</head>
	<body>
		<header>
		<?php include 'common/header.php';?>
		</header>
		<div id="contetns">
			<nav id="sub_menu">
				<div id="sub_title">
					<div>
						<p>신제품</p>
					</div>
				</div>
				<div id="sub_item">
					<ul>
						
						<li><a href="newgoods.php">이달의 신제품</a></li>
						<li><a href="lastgoods.php">지난달 신제품</a></li>
					</ul>
				</div>
			</nav>
			
				
				<img src="images/new/3.jpg">
				<img src="images/new/3-1.jpg">
				<img src="images/new/3-2.jpg">
				<img src="images/new/3-3.jpg">
				<img src="images/new/3-4.jpg">
				
					
				
		
		</div>
		<div id="board_bottom">
					<p>이전 | 1 | 2 | 3 | 4 | 5 | 다음</p>
		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
