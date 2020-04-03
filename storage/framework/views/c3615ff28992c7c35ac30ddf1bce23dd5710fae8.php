<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2><?php echo e($hang_sp->name); ?></h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="category.html">Brand</a>
                        <a href="category.html"><?php echo e($hang_sp->name); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Category Product Area =================-->
    <section class="cat_product_area p_120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <font size="4">Hiển thị <?php echo e(count($sp_theoHang)); ?> sản phẩm</font>
                        </div>
                        <div class="right_page ml-auto">
                            <div class="row"><?php echo e($sp_theoHang->links()); ?></div>
                        </div>
                    </div>
                    <div class="latest_product_inner row">
                    <?php $__currentLoopData = $sp_theoHang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img height="262" src="/nmm/public/<?php echo e($item->images[0]->image_path); ?>" alt="">
                                    <div class="p_icon">
                                        <a style="cursor: pointer" class="wish-list" productid="<?php echo e($item->id); ?>"><i class="lnr lnr-heart"></i></a>
                                        <a style="cursor: pointer" class="add-to-cart" productid="<?php echo e($item->id); ?>"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="/nmm/public/shop/product/<?php echo e($item->id); ?>"><h4><?php echo e($item->name); ?></h4></a>
                                <?php if($item->promotion_price!=0): ?>
                                    <h5><strike class="mr-1"><?php echo e($item->unit_price); ?>đ</strike><span style="color: red"><?php echo e($item->promotion_price); ?>đ</h5></span>
                                <?php else: ?>
                                    <h5 style="color: red"><?php echo e($item->unit_price); ?>đ</h5>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Category</h3>
                            </div>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li><a href="<?php echo e(route('categorys',$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </aside>
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Brands</h3>
                            </div>
                             <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li><a href="<?php echo e(route('brands',$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
    <!--================Most Product Area =================-->
    <section class="most_product_area most_p_withoutbox">
        <div class="container">
            <div class="main_title">
                <h2>Các sản phẩm khác</h2>
            </div>
            <div class="latest_product_inner row">
            <?php $__currentLoopData = $sp_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-6">

                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="/nmm/public/<?php echo e($item->images[0]->image_path); ?>" alt="" height="100px" width="100px">
                            <div class="p_icon">
                                <a style="cursor: pointer" class="wish-list" productid="<?php echo e($item->id); ?>"><i class="lnr lnr-heart"></i></a>
                                <a style="cursor: pointer" class="add-to-cart" productid="<?php echo e($item->id); ?>"><i class="lnr lnr-cart"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4><?php echo e($item->name); ?></h4></a>
                        <?php if($item->promotion_price!=0): ?>
                            <h5 ><strike class="mr-1"><?php echo e($item->unit_price); ?>đ</strike><span style="color: red"><?php echo e($item->promotion_price); ?>đ</h5></span>
                        <?php else: ?>
                            <h5 style="color: red"><?php echo e($item->unit_price); ?>đ</h5>
                        <?php endif; ?>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="center_page ml-auto">
                <div class="row"><?php echo e($sp_khac->links()); ?></div>
            </div>
         </div>
        </div>
    </section>
    <!--================End Most Product Area =================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/brand.blade.php ENDPATH**/ ?>