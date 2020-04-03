

<?php $__env->startSection('content'); ?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Liên hệ</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="contact_info f_p_item">
                <div class="info_item">
                    <i class="lnr lnr-home"></i>
                    <h6>Hà Nội, Việt Nam</h6>
                    <p>Đại học Khoa học và Công nghệ Hà Nội</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-phone-handset"></i>
                    <h6><a href="#">(+84) 912345678</a></h6>
                    <p>Mon to Fri 9am to 6 pm</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-envelope"></i>
                    <h6><a href="#">namluu253@gmail.com</a></h6>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/homepage/contact.blade.php ENDPATH**/ ?>