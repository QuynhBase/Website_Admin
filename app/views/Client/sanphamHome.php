<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/shop/shop-layout-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 10:12:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Shop Layout V1 - Glowing - Bootstrap 5 HTML Templates</title>
<script src="../../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script><link rel="icon" href="../assets/images/others/favicon.ico">
<link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
<link rel="stylesheet" href="assets/vendors/slick/slick.css">
<link rel="stylesheet" href="assets/vendors/mapbox-gl/mapbox-gl.min.css">
<link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
<main id="content" class="wrapper layout-page">
<section class="page-title z-index-2 position-relative">
<div class="bg-body-secondary">
<div class="container">
<nav class="py-4 lh-30px" aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center py-1">
<li class="breadcrumb-item"><a href="../index-2.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Shop Grid Layout</li>
</ol>
</nav>
</div>
</div>
<div class="text-center py-13">
<div class="container">
<h2 class="mb-0">Sản Phẩm</h2></div>
</div>
</section>





<?php foreach ($loadHome as $key => $value) {?>
    <div class="container container-xxl pb-16 pb-lg-18 mb-lg-3">
            <div class="row gy-50px">
                <div class="col-sm-6  col-lg-4 col-xl-3">
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="detailed&id=<?php echo $value['id'] ?>" class="hover-zoom-in d-block" title="Shield Conditioner">
                                <img src="<?php echo $value['image'] ?>" 
                                    class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                <ins class="text-decoration-none"><?php echo number_format($value['price'], 3, '.', ',') ?></ins></span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html"><?php echo $value['name'] ?></a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    
<?php }?>







<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendors/clipboard/clipboard.min.js"></script>
<script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
<script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendors/lightgallery/lightgallery.min.js"></script>
<script src="assets/vendors/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
<script src="assets/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="assets/vendors/lightgallery/plugins/video/lg-video.min.js"></script>
<script src="assets/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js"></script>
<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/gsap/gsap.min.js"></script>
<script src="assets/vendors/gsap/ScrollToPlugin.min.js"></script>
<script src="assets/vendors/gsap/ScrollTrigger.min.js"></script>
<script src="assets/vendors/mapbox-gl/mapbox-gl.js"></script>
<script src="assets/js/theme.min.js"></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
