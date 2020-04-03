<?php $__env->startSection('content'); ?>

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-6">
                        <h3 style="color:#000000">Chào mừng đến với<br /><b><i>NMM Techstore</i></b> !</h3>
                        <a class="white_bg_btn btn-lg" href="<?php echo e(asset('shop/category/1')); ?>">Bắt đầu khám phá</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="halemet_img">
                            <img src="/nmm/public/uploads/product_images/homepage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Feature Product Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="row hot_product_inner">
                     <div class="col-lg-6">
                        <div class="hot_p_item">
                            <a href="<?php echo e(asset('shop/brand/2')); ?>"><img class="img-fluid" src="<?php echo e(asset('homepage/img/product/hot-product/hot-p-1.jpg')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hot_p_item">
                            <a href="<?php echo e(asset('shop/brand/1')); ?>"><img class="img-fluid" src="<?php echo e(asset('homepage/img/product/hot-product/hot-p-2.jpg')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div style="margin: 25px 0 0 0;">
                            <img alt="CÔ VY LÀM KHÓ CÓ NMM LO" src="<?php echo e(asset('homepage/img/product/hot-product/hot-p-3.png')); ?>" title="CÔ VY LÀM KHÓ CÓ NMM LO" width="100%">
                </div>
                
            </div>
        </div>
    </section>
    <!--================Clients Logo Area =================-->
    <section class="clients_logo_area">
        <div style="background-image: url('/nmm/public/homepage/img/background2.png');">
            <div class="container">
                <div class="main_title">
                    <h2>Thương hiệu nổi bật</h2>
                </div>
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <a href="<?php echo e(asset('shop/brand/1')); ?>">
                            <img src="<?php echo e(asset('homepage/img/clients-logo/c-logo-1.png')); ?>" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(asset('shop/brand/5')); ?>">
                            <img src="<?php echo e(asset('homepage/img/clients-logo/c-logo-2.png')); ?>" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(asset('shop/brand/2')); ?>">
                            <img src="<?php echo e(asset('homepage/img/clients-logo/c-logo-3.png')); ?>" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(asset('shop/brand/3')); ?>">
                            <img src="<?php echo e(asset('homepage/img/clients-logo/c-logo-4.png')); ?>" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo e(asset('shop/brand/7')); ?>">
                            <img src="<?php echo e(asset('homepage/img/clients-logo/c-logo-5.png')); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Clients Logo Area =================-->
    <section class="feature_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="section-header flashsale_samsung">
				        <div class="main_title">
							    			<img src="<?php echo e(asset('homepage/img/product/hot-product/flashsale.gif')); ?>" style="width: 250px;height:auto;vertical-align:middle;" alt="flashsale">
		    						</div>
				    <div class="clear"></div>
			            </div>
                    <div class="feature_p_slider owl-carousel">
                        <?php $__currentLoopData = $featureProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featureItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">   
                                    <a href="/nmm/public/shop/product/<?php echo e($featureItem->id); ?>">
                                    <img height="262" src="/nmm/public/<?php echo e($featureItem->images[0]->image_path); ?>" alt="">
                                    <div class="p_icon">
                                        <a style="cursor: pointer" class="wish-list" productid="<?php echo e($featureItem->id); ?>"><i class="lnr lnr-heart"></i></a>
                                        <a style="cursor: pointer" class="add-to-cart" productid="<?php echo e($featureItem->id); ?>"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    </a>
                                </div>
                                <a href="/nmm/public/shop/product/<?php echo e($featureItem->id); ?>"><h4><?php echo e($featureItem->name); ?></h4></a>
                                <?php if($featureItem->promotion_price!=0): ?>
                                    <h5 ><strike class="mr-1"><?php echo e($featureItem->unit_price); ?>đ</strike><span style="color: red"><?php echo e($featureItem->promotion_price); ?>đ</h5></span>
                                <?php else: ?>
                                    <h5 style="color: red"><?php echo e($featureItem->unit_price); ?>đ</h5>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Product Area =================-->

    <!--================Latest Product Area =================-->
    <section class="feature_product_area latest_product_area">
        <div class="main_box">
            <div class="container">
                <div class="feature_product_inner">
                    <div class="main_title">
                        <h2>Sản phẩm mới nhất</h2>
                        <p>Những mặt hàng mới được cập nhật liên tục</p>
                    </div>
                    <div class="latest_product_inner row">
                    <?php $__currentLoopData = $latestProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <a href="/nmm/public/shop/product/<?php echo e($latestItem->id); ?>">
                                    <img height="262" src="/nmm/public/<?php echo e($latestItem->images[0]->image_path); ?>" alt="">
                                    <div class="p_icon">
                                        <a style="cursor: pointer" class="wish-list" productid="<?php echo e($latestItem->id); ?>"><i class="lnr lnr-heart"></i></a>
                                        <a style="cursor: pointer" class="add-to-cart" productid="<?php echo e($latestItem->id); ?>"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    </a>
                                </div>
                                <a href="/nmm/public/shop/product/<?php echo e($latestItem->id); ?>"><h4><?php echo e($latestItem->name); ?></h4></a>
                                <?php if($latestItem->promotion_price!=0): ?>
                                    <h5 ><strike class="mr-1"><?php echo e($latestItem->unit_price); ?>đ</strike><span style="color: red"><?php echo e($latestItem->promotion_price); ?>đ</h5></span>
                                <?php else: ?>
                                    <h5 style="color: red"><?php echo e($latestItem->unit_price); ?>đ</h5>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area">
        <div class="main_box">
            <div class="container">
                <div class="main_title">
                    <h2 class="phukien_title" style="color:red"><a href="/nmm/public/shop/category/5">Phụ kiện điện thoại</a></h2>
                    <p>Những phụ kiện không thể thiếu cho dế yêu của bạn</p>
                </div>
                <div class="row most_product_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            <?php $__currentLoopData = $accessories1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media">
                                <div class="d-flex">
                                    <a href="/nmm/public/shop/product/<?php echo e($ac1->id); ?>">
                                        <img src="/nmm/public/<?php echo e($ac1->images[0]->image_path); ?>" height="70" width="70" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/<?php echo e($ac1->id); ?>"><h4><?php echo e($ac1->name); ?></h4></a>
                                    <?php if($ac1->promotion_price!=0): ?>
                                    <h3><strike class="mr-1"><?php echo e($ac1->unit_price); ?>đ</strike><span style="color: red"><?php echo e($ac1->promotion_price); ?>đ</h3></span>
                                <?php else: ?>
                                    <h3 style="color: red"><?php echo e($ac1->unit_price); ?>đ</h3>
                                <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            <?php $__currentLoopData = $accessories2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media">
                                <div class="d-flex">
                                    <a href="/nmm/public/shop/product/<?php echo e($ac2->id); ?>">    
                                    <img src="/nmm/public/<?php echo e($ac2->images[0]->image_path); ?>" height="70" width="70" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/<?php echo e($ac2->id); ?>"><h4><?php echo e($ac2->name); ?></h4></a>
                                    <?php if($ac2->promotion_price!=0): ?>
                                    <h3><strike class="mr-1"><?php echo e($ac2->unit_price); ?>đ</strike><span style="color: red"><?php echo e($ac2->promotion_price); ?>đ</h3></span>
                                <?php else: ?>
                                    <h3 style="color:red"><?php echo e($ac2->unit_price); ?>đ</h3>
                                <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="most_p_list">
                            <?php $__currentLoopData = $accessories3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media">
                                <div class="d-flex">
                                <a href="/nmm/public/shop/product/<?php echo e($ac3->id); ?>">
                                    <img src="/nmm/public/<?php echo e($ac3->images[0]->image_path); ?>" height="70" width="70" alt="">
                                </a>
                                </div>
                                <div class="media-body">
                                    <a href="/nmm/public/shop/product/<?php echo e($ac3->id); ?>"><h4><?php echo e($ac3->name); ?></h4></a>
                                    <?php if($ac3->promotion_price!=0): ?>
                                    <h3><strike class="mr-1"><?php echo e($ac3->unit_price); ?>đ</strike><span style="color: red"><?php echo e($ac3->promotion_price); ?>đ</h3></span>
                                <?php else: ?>
                                    <h3 style="color: red"><?php echo e($ac3->unit_price); ?>đ</h3>
                                <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="wishlist1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Most Product Area =================-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/index.blade.php ENDPATH**/ ?>