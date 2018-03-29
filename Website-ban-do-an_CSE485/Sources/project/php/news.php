<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- External Css -->
    <link rel="stylesheet" href="../css/project.css">
	<title>Tin tức</title>
</head>
<body>
	<?php 
		include ('header.php');
	 ?>
	
	<div class="container">
        <div class="row">
            <?php include ('left.php'); ?>
            <!-- left-section-bar -->

           
            <div class="col-md-8">          
	            <div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
				<div class="row">
					<div class="col-md-12">
					<h2 style="color: blue; border-bottom: 1px solid red; text-align: center;" >
						Tin Tức
					</h2>
						<a href="news1"><h5>Tưng bừng khuyến mãi ngày 8-3</h5></a>
						<p>Tưng bừng khuyến mại mừng ngày <br> quốc tế phụ nữ 8/3 Hòa cùng không khí rộn ràng <br> ngày quốc tế phụ nữ 8/3, thay lời chúc tới <br>những người mẹ - người phụ nữ <br>trong ngày này,cửa hàng SHIP ĐỒ...</p>		
						<p>
						<a class="btn" href="news1.php">Xem thêm »</a>
						</p>
					</div>
				</div>
				</div>
 			</div>
 
        </div>        
    </div>

	

	 <?php 
	 	include ('footer.php');
	  ?>
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>