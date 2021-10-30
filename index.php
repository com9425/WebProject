<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Guitar Info.</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		section table {
			width: 100%;
			table-layout: fixed;
		}

		section table caption {
			background-color: #008B8B;
			color: white;
		}

		section table,
		section  td {
			border-collapse: collapse;
		}

		section table td {
			padding: 3px;
			border-bottom: 1px dotted #008B8B;
		}

		section table a {
			text-decoration: none;
			color: #000000;
		}

		section td.course {
			color: red;
			font-weight: bold;
		}

		section table tr td {
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
		}

		section table tr td:nth-child(1) {
			width: 30%;
		}

	
		
	</style>
 <script>
            function login(){
                if(!document.member_form.id.value){
                    alert("아이디를 입력 하세요");
                    document.member_form.id.focus();
                    return;
                }

                if(!document.member_form.pass.value){
                    alert("비밀번호를 입력 하세요");
                    document.member_form.pass.focus();
                    return;
                }

                document.member_form.submit();
            }
        </script>
</head>

<body>
	<header>
		<?php include 'common/header.php'; ?>
	</header>
	<div id="contetns">
	<?php include 'common/mainbanner.php'; ?>
		<div id="news">
			<section id="new_course">
				<table>
					<caption>
						<h3>신제품</h3>
					</caption>
					<tr>
						<td class="course">신제품</td>
						<td>
							<div><a href="newgoods.php">레스폴 CR100</a></div>
						
						</td>
					</tr>
					<tr>
						<td class="course">신제품</td>
						<td><a href="lastgoods.php">X100 OPBK</a></td>
					</tr>
					
				</table>
			</section>
			<section id="new_info">
				<table>
					<caption>
						<h3>공지 사항</h3>
					</caption>
					<?php
					//DB Connection
					include "common/dbconn.php";

					//sql문 작성
					$sql = "SELECT serial, subject, ent_date FROM notify ORDER BY serial DESC LIMIT 5";

					//쿼리 전송 및 결과 받기
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while ($row = $result->fetch_assoc()) {
					?>
							<tr>
								<td class="course"><?php echo $row['ent_date'] ?></td>
								<td><a href="m03_06_board_contents.php?serial=<?php echo $row['serial'] ?>"><?php echo $row['subject'] ?></a></td>
							</tr>
					<?php
						}
					} else {
						echo "공지사항이 없습니다.";
					}

					//db 접속 종료
					$conn->close();
					?>
				</table>
			</section>

			<article>
			<form name="member_form" action="member_login.php" method="post">
			<table class="mainlogin">
				<tr>
					<th>ID:</th>
					<td>
						<input type="text" name="id" size="20">
					</td>
					<td rowspan="2">
						<button type="button" style="width:100px; height:50px;" onclick="login()">로그인</button>
					</td>
				</tr>
				<tr>
					<th>Password:</th>
					<td>
						<input type="password" name="pass" size="20">
					</td>
				</tr>


			</table>
			</form>
			</article>
		</div>
	</div>
	<footer>
		<?php include 'common/footer.php'; ?>
	</footer>

</body>

</html>