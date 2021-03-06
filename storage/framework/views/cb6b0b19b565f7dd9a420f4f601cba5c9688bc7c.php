<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <a href="mailto:namluu253@gmail.com">namluu253@gmail.com</a>
                <a href="#">Welcome to NMM Techstore</a>
            </div>

            <div class="float-right d-flex">
                <?php if(Auth::guard('customer')->check()): ?>
                    <div class="hidden" id="id_customer" id_customer="<?php echo e(Auth::guard('customer')->user()->id); ?>"></div>
                    <div class="dropdown" >
                        <a style="color: #5f3985; font-weight: 600; cursor: pointer"class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome,  <?php echo e(Auth::guard('customer')->user()->name); ?></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item" ><a class="nav-link" style="color: #5f3985;"href="logout">Logout</a></li>

                        </ul>
                    </div>
                <?php else: ?>
                    <a href="login" style="line-height: 36px; color: #5f3985; font-weight: 600" class="mr-4">Login</a>
                    <a href="registration" style="line-height: 36px;color: #5f3985; font-weight: 600">Register</a>
                    <div class="hidden" id="id_customer" id_customer="-1"></div>
                <?php endif; ?>
                <ul class="header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu" style="font-weight: 600">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/nmm/public/shop/homepage"><img src="<?php echo e(asset('homepage/img/logo.png')); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo e(asset('shop/homepage')); ?>">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="<?php echo e(asset('shop/category/1')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('shop/category/1')); ?>">Theo loại</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('shop/brand/1')); ?>">Theo hãng</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('shop/contact')); ?>">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="<?php echo e(asset('shop/cart')); ?>" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
                        <li class="nav-item"><a href="<?php echo e(asset('shop/wishlist')); ?>" class="cart"><i class="lnr lnr lnr-heart"></i></a></li>
                        <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
<?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/layouts/header.blade.php ENDPATH**/ ?>