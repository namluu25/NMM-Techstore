

<?php $__env->startSection('content'); ?>


    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Shopping Cart</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="cart.html">Cart</a>
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
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="/nmm/public/<?php echo e($item->product->images[0]->image_path); ?>" width="55px" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p><?php echo e($item->product->name); ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5 style="color: red"><?php echo e($item->product->unit_price); ?> đ</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="<?php echo e($item->quantity); ?>" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5 style="color:red;"><?php echo e($item->product->unit_price * $item->quantity); ?> đ</h5>
                            </td>
                            <th><a href="removeCartItem?product_id=<?php echo e($item->product_id); ?>" class="btn btn-warning" style="color: #fff">Xóa</a></th>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bottom_button">
                            <td>
                                <a class="gray_btn" href="#">Update Cart</a>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="cupon_text">
                                    <input type="text" placeholder="Coupon Code">
                                    <a class="main_btn" href="#">Apply</a>
                                    <a class="gray_btn" href="#">Close Coupon</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>

                        <tr class="out_button_area">
                            <td>
                            </td>
                            <td>
                            </td>

                            <td>
                                <form action="checkout" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <textarea type="text" name="address" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-primary">Checkout</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/cart.blade.php ENDPATH**/ ?>