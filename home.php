<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Life Bricks</title>
	<link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
  	<script src="../jquery-1.12.0.js"></script>	
  	<link rel="stylesheet" href="../css/homestyle.css">
</head>
<body> 
	<?php include "../includes/header.php" ?>
	<?php include "../includes/navigation.php" ?>
	<div class="container-fluid" id="container-carousel">
		<div class="row">
			<div class="col-md-4">			
			<span class="glyphicon glyphicon-chevron-left" id="left"></span>
			</div> 	
			<div class="col-md-4" id="carousel">
				<div class="images" style="display:block;"><img src="../img/img1.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img2.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img3.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img4.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img5.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img6.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img7.jpg" alt="Inspirational Image"></div>
				<div class="images"><img src="../img/img8.jpg" alt="Inspirational Image"></div>
			</div>
			<div class="col-md-4">
				<span class="glyphicon glyphicon-chevron-right" id="right"></span>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="tables">
		<div class="row">
			<div class="col-md-3" id="t1">
				<a href="motivation.php">
					<div class="table1">
						<h3>Motivation</h3>
					</div>
				</a>
			</div>

			<div class="col-md-3" id="t2"><a href="life.php"><div class="table2">
					<h3>Life</h3>
			</div></a></div>
			<div class="col-md-3" id="t3"><a href="humour.php"><div class="table3">
					<h3>Humour</h3>
			</div></a></div>
			<div class="col-md-3" id="t4"><a href="success.php"><div class="table4">
					<h3>Success</h3>
			</div></a></div>
		</div>
	</div>	
	<?php include "../includes/footer.php" ?>	
	<script>
		var currentIndex=0;
		function displayImage(){
			items.hide();
			item=$
			(".images").eq(currentIndex);
			item.css("display","block");
		}
		function checkIndex()
		{
			if(currentIndex==8) currentIndex=0;
			if(currentIndex==-1) currentIndex=7;
		}
		items=$(".images");
		len=items.length;
		setInterval(function(){
			currentIndex++;
			checkIndex();
			displayImage();
		},3000);
		$("#left").click(function(){
			currentIndex++;
			checkIndex();
			displayImage();
		});
			currentIndex--;
			checkIndex();
			displayImage();
		});
	</script>
</body>
</html>
