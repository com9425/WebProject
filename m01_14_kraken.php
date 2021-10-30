!DOCTYPE html>
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
				<?php include 'common/sub_item.php';?>
				</div>
			</nav>
			<section>
			<?php include 'common/sub_banner.php';?>
				<div id="navigation">
					<p>브랜드별기타 > fender</p>
				</div>
				<table class="guitarimg">
					<tr><td><img src="images/kraken/1.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table>
				
				<table class="guitarimg">
					<tr><td><img src="images/kraken/2.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table>
				<table class="guitarimg">
					<tr><td><img src="images/kraken/3.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table>
				<table class="guitarimg">
					<tr><td><img src="images/kraken/4.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table>
				<table class="guitarimg">
					<tr><td><img src="images/kraken/5.jpg"></td></tr>
					<tr><td>Spear GLADIUS B - SCRATCHED IRON</td></tr>
					<tr><td>1,119,000원</td></tr>
				</table>
			
				
						
							
							
			
			
				
			</section>
		</div>
		<footer>
		<?php include 'common/footer.php'; ?>
		</footer>
		
	</body>
</html>
