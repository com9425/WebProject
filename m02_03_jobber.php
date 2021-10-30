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
		</style>
	</head>
	<body>
		<header>
		<?php include 'common/header.php';?>
		</header>
		<div id="contetns">
			<nav id="sub_menu">
				<div id="sub_title">
					<p>교육과정 소개</p>
				</div>
				<div id="sub_item">
					<ul>
						<li><a href="m02_01_course.html">국가기간전략사업</a></li>
						<li><a href="m02_02_tomorrow.html">내일배움카드훈련</a></li>
						<li><a href="m02_03_jobber.html">직장인국비지원</a></li>
					</ul>
				</div>
			</nav>
			<section>
				<div id="sub_banner">
					<img src="images/sub_banner02.jpg">
				</div>
				<div id="navigation">
					<p>교육과정소개 > 직장인국비지원</p>
				</div>
				<div class="course_title">
					<img src="images/course_java.jpg">
					<ul>
						<li><span class="title">과정명</span><span id="course_name">자바기반 응용소프트웨어 개발자 양성과정</span></li>
						<li><span class="title">교육기간</span>2019-12-10~2020-05-14</li>
						<li><span class="title">교육시간</span>9:20~18:10 / 일일8시간 / ( 월 화 수 목 금 )</li>
						<li><span class="title">모집인원</span>20 명</li>
					</ul>
					<a href="m02_04_course_detail.html">상세보기</a>
				</div>
				<div class="course_title">
					<img src="images/course_java.jpg">
					<ul>
						<li><span class="title">과정명</span><span id="course_name">자바기반 응용소프트웨어 개발자 양성과정</span></li>
						<li><span class="title">교육기간</span>2019-12-10~2020-05-14</li>
						<li><span class="title">교육시간</span>9:20~18:10 / 일일8시간 / ( 월 화 수 목 금 )</li>
						<li><span class="title">모집인원</span>20 명</li>
					</ul>
					<a href="m02_04_course_detail.html">상세보기</a>
				</div>
				<div class="course_title">
					<img src="images/course_java.jpg">
					<ul>
						<li><span class="title">과정명</span><span id="course_name">자바기반 응용소프트웨어 개발자 양성과정</span></li>
						<li><span class="title">교육기간</span>2019-12-10~2020-05-14</li>
						<li><span class="title">교육시간</span>9:20~18:10 / 일일8시간 / ( 월 화 수 목 금 )</li>
						<li><span class="title">모집인원</span>20 명</li>
					</ul>
					<a href="m02_04_course_detail.html">상세보기</a>
				</div>
			</section>
		</div>
		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
