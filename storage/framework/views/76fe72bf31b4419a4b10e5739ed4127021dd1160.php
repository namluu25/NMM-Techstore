<?php $__env->startSection('content'); ?>


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Wish List</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="cart.html">Wish List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="/nmm/public/<?php echo e($item->products->images[0]->image_path); ?>" width="55px" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo e($item->products->name); ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 style="color: red"><?php echo e($item->products->unit_price); ?>đ</h5>
                                </td>
                                <td>
                                   <div><?php echo e($item->products->category->name); ?></div>
                                </td>
                                <td>
                                    <h5><?php echo e($item->products->brand->name); ?></h5>
                                </td>
                                <td>
                                    <a style="cursor: pointer" href="deleteWishlist?id=<?php echo e($item->products->id); ?>"><button class="btn btn-danger">Delete</button></a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/wishlist.blade.php ENDPATH**/ ?>