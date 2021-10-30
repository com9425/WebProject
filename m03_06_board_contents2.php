<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Guitar Info.</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
		
			div#contetns{
				width:90%;
				margin:auto;
			}
			section{
				float:right;
				width:75%;
				
			}
			div#board_subject, div#board_data, div#board_body{
				border-bottom:1px solid #000000;
				
			}
			div#board_data{
				height:30px;
				
				
			}
			div.board_left{
				width:200px;
				float:left;
				
			}
			div.board_right{
				width: 300px;
				float:right;
				text-align:right;
				
			}
			span.field_name{
				font-weight:bold;
			}
			span.field_value{
				color:red;
				font-weight:bold;
			}
			div#board_body{
				clear:both;
				margin-top:20px;
			}
			div#board_bottom button{
				font-size: 12pt;
				padding:5px 10px;
				font-weight:bold;
				color:white;
				background-color:#000000;
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
					<p>커뮤니티</p>
				</div>
				<?php include 'common/community_subitem.php';?>
			</nav>
			<section>
				
				<div id="navigation">
					<p>커뮤니티 > 공지사항 > 내용보기</p>
				</div>
				<?php
//JSON 객체 분리하기
$serial = $_GET["serial"];

//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "UPDATE usee SET view_cnt = view_cnt+1 WHERE serial = ".$serial;

//db 전송
$conn->query($sql);

//sql문 작성
$sql = "SELECT * FROM usee WHERE serial = ".$serial;

//db 전송
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>


				<div id="board_subject">
				<h3><?php echo "제목 : " ,$row["subject"] ?></h3>
				</div>
				<div id="board_data">
					<div class="board_left">
						<span class="field_name">작성자 </span> <span class="field_value">관리자</span>
					</div>
					<div class="board_right">
						<span class="field_name">등록일 </span> <span class="field_value">2019-12-27</span>
						 <span class="field_name">조회수 </span> <span class="field_value">10</span>
					</div>
				</div>
				<div id="board_body">
					<?php echo $row["content"] ?>
				</div>
<?php        
    }
} else {
    echo "0 results";
}
$conn->close();
?>				
				<div id="board_bottom">
					<div class="board_left">
						<a href="m03_03_usee.php"><button>목록보기</button></a>
					</div>
					<div class="board_right">
					<a href="m03_09_usee_update2.php?serial=<?php echo $serial?>"><button>수정하기</button></a>
					<button onclick="query_delete()">삭제하기</button>
					</div>
				</div>
			</section>
		</div>
		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		<script>
			function query_delete(){
				var ans = confirm("정말로 삭제 하시겠습니까?");
				if(ans == true) {
					location.href="m03_10_usee_delete2.php?serial=<?php echo $serial ?>";
				}
			}
			</script>
	</body>
</html>
