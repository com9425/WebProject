<?PHP
session_start();
?>
<h1><a href="index.php">Guitar Info</a></h1>
<div id="member">
<?php
if(!isset($_SESSION['id'])){
?>
				<ul>
					<li><a href="login.php">로그인</a></li>
					<li><a href="member_signup.php">회원가입</a></li>
				</ul>

				<?php
} else {
?> 
    <ul>
        <li><?php echo $_SESSION['name'] ?>님 환영합니다.</li>
        <li><a href="logout.php">로그아웃</a></li>
        <li><a href="member_modify.php">회원정보수정</a></li>
    </ul>
<?php
}
?>  
			</div>

			<nav id="top_menu">
				<ul>
					<li><a href="m01_01_fender.php">기타정보</a></li>
					<li><a href="newgoods.php">신제품</a></li>
					<li><a href="m03_01_notify.php">커뮤니티</a></li>
				</ul>
			</nav>