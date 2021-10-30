<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Guitar Info.</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/sub.css">
		<style>
		section	div#context p{
				line-height: 30px;
				margin:0 10px;
			}
			section	div#context img{
				float:right;
				padding:20px;
			}
				
			.guitarimg{
				width: 300px;
				float: left;
			
			}

			.guitarimg img{
				width:300px;
			}
		
			section table td{
				border: 1px solid black ;
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
					<p>브랜드별 기타</p>
				</div>
				<div id="sub_item">
					<ul>
				<?php include 'common/sub_item.php';?>
				</ul>		
					</div>
			</nav>
			<section>
			<?php include 'common/sub_banner.php';?>
				<div id="navigation">
					<p>브랜드별기타 > fender</p>
				</div>	
				<table>	
				<tr>
					<td><table class="guitarimg">
					<tr><td><img src="images/redoox/1.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
					<td><table class="guitarimg">
					<tr><td><img src="images/redoox/2.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
					<td><table class="guitarimg">
					<tr><td><img src="images/redoox/3.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
					<td><table class="guitarimg">
					<tr><td><img src="images/redoox/4.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
				</tr>
				
				<tr>

				<td><table class="guitarimg">
					<tr><td><img src="images/redoox/5.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
				<td><table class="guitarimg">
					<tr><td><img src="images/redoox/6.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table></td>
				<td><table class="guitarimg">
					<tr><td><img src="images/redoox/7.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
					</table>
				</td>
		
				</tr>
				
		</table>
			</section>
		</div>



		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
