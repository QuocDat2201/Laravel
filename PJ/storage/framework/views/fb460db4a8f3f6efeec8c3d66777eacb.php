
<?php $__env->startSection('content'); ?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>About Us</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">
                    <img src=" <?php echo e(asset('user')); ?>/img/about/about-us.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Who We Are ?</h4>
                    <p>Contextual advertising programs sometimes have strict policies that need to be adhered too.
                        Let’s take Google as an example.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Who We Do ?</h4>
                    <p>In this digital generation where information can be easily obtained within seconds, business
                        cards still have retained their importance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Why Choose Us</h4>
                    <p>A two or three storey house is the ideal way to maximise the piece of earth on which our home
                        sits, but for older or infirm people.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section Begin -->

<!-- Testimonial Section End -->

<!-- Counter Section Begin -->

<!-- Counter Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Team</span>
                    <h2>Meet Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src=" <?php echo e(asset('user')); ?>/img/about/team-1.jpg" alt="">
                    <h4>John Smith</h4>
                    <span>Fashion Design</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src=" <?php echo e(asset('user')); ?>/img/about/team-2.jpg" alt="">
                    <h4>Christine Wise</h4>
                    <span>C.E.O</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src=" <?php echo e(asset('user')); ?>/img/about/team-3.jpg" alt="">
                    <h4>Sean Robbins</h4>
                    <span>Manager</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src=" <?php echo e(asset('user')); ?>/img/about/team-4.jpg" alt="">
                    <h4>Lucy Myers</h4>
                    <span>Delivery</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Client Section Begin -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\aptech-k1\PJ\resources\views/user/pages/aboutus.blade.php ENDPATH**/ ?>