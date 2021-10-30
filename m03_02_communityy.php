<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Guitar Info.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
		
			div#board_total{
				width:200px;
				float:left;
			}
			div#board_search{
				width:300px;
				float:right;
			
			}
			div#board{
				
				padding-left: 200px;
				margin:auto;
				margin-left: 20px;
				
			}
			div#board table, th, td{
				border-collapse:collapse;
			}
			div#board table{
				width: 100%;
				border-top:2px solid #000000;
				border-bottom:2px solid #000000;
				margin-top:50px;
			}
			div#board table tbody tr:hover{
				background-color:#CCCCCC;
			}
			div#board table th{
				padding:5px;
				border-bottom:1px solid #000000;
			}
			div#board table td{
				text-align:center;
				padding: 5px;
				border-bottom:1px dotted #000000;
			}
			
			div#board table td.board_subject{
				text-align:left;
			}
			div#board table td.board_subject a{
				text-decoration:none;
				color:#000000;
			}
			div#board_bottom{
				text-align:center;
			}
			div#board_bottom p#buttons{
				text-align:right;
			}
			div#board_bottom p#buttons button{
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
					<p>커뮤니티 > 공지사항</p>
				</div>
				<?php
//DB Connection
include "common/dbconn.php";

//sql문 작성
$sql = "SELECT serial, subject, author, ent_date, view_cnt FROM communityy ORDER BY serial DESC";

//쿼리 전송 및 결과 받기
$result = $conn->query($sql);
?>				
				<div id="board_top">
					<div id="board_total">Total <?php echo $result->num_rows ?>, 0/00Pages</div>
					<div id="board_search"><input type="search"> <input type="button" value="검색" /></div>
				</div>
				<div id="board">
					<table>
						<thead>
							<tr>
								<th style="width: 5%;">번호</th>
								<th>제목</th>
								<th style="width: 10%;">작성자</th>
								<th style="width: 10%;">등록일</th>
								<th style="width: 10%;">조회수</th>
							</tr>
						</thead>
						<tbody>
						<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td>". $row['serial'] ."</td>";
		echo "<td class='board_subject'>";
		echo "<a href='m03_06_board_contents1.php?serial=". $row['serial'] ."'>";
		echo $row['subject'];
		echo "</a>";
		echo "</td>";
		echo "<td>". $row['author'] ."</td>";
		echo "<td>". $row['ent_date'] ."</td>";
		echo "<td>". $row['view_cnt'] ."</td>";
		echo "</tr>";
		
    }
} else {
    echo "조회된 내역이 없습니다.";
}

//db 접속 종료
$conn->close();
?>					

							
						</tbody>
					</table>
				</div>
				<div id="board_bottom">
					<p>이전 | 1 | 2 | 3 | 4 | 5 | 다음</p>
					<p id="buttons">
						<a href="m03_07_board_write1.php"><button>글쓰기</button></a>
					</p>
				</div>
			</section>
		</div>
		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
