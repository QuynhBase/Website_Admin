<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Nhúng css -->
	<link rel="stylesheet" href="./app/views/Client/css/fontawesome-free-5.15.4/css/all.min.css">
	<link rel="stylesheet" href="./app/views/Client/js/bootstrap-5.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="./app/views/Client/css/style.css">
</head>

<body>
	
	<!-- #product-list -->
	<section id="product-list" class="block">
		
		<div class="container">
			<h2 class="title text-center">Sản phẩm</h2>
			<div class="row row-cols-xl-5">
<!-- product -->
				<?php foreach($loadHome as $key => $value) { ?>
					<div class="col">
					<div class="product">

						<!-- <ul class="top">
							<li class="sale">Sale</li>
							<li class="icon"><i class="fas fa-heart"></i></li>
						</ul> -->
						<div class="product-img">
							<a href="detailed&id=<?php echo $value['id'] ?>"><img src="<?php echo $value['image'] ?>" alt="img" width="100px" height="270px" ></a>
						</div>
						<div class="bottom text-center">
							<ul class="star">
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star no-active"></i></li>
								<li>(3)</li>
							</ul>
							<h3 class="name"><?php echo $value['name'] ?></h3>
							<ul class="price">
								<li class="price-2"><span class="p"><?php echo number_format($value['price'], 3, '.', ',') ?></span></li>
							</ul>
							<a class="add-to-cart"> <i class="fas fa-shopping-basket"></i> Add</a>
						</div>
					</div>
				</div>
				<?php } ?>
					
				
			
				
			</div>
		</div>
	</section>
</body>

</html>