<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section End -->

    <h3 align="center"><b>CART PAID</b></h3>
    <div class="section-divider"></div>
    <!-- Shopping Cart Section Begin -->
    <div style="font-family: Roboto">
    <section class="">
        <div class="container">
            <div class="row" style=" border: 1px solid #ccc;">
                <div class="col-md-2"></div>
                <div class="col-md-6"
                    style=" background-image: linear-gradient(rgb(255, 255, 255),rgb(255, 255, 255),rgb(255, 255, 255))">

                    <div class="">
                        <table class="update_cart-url" border-radius="3px" data-url=<?php echo e(url('updatecart')); ?>>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>total</td>
                                <td></td>

                            </tr>
                            <tbody>
                                <?php
                                    $total = 0;
                                    $id = 0;
                                ?>
                                <?php if(isset($cart)): ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img style="width:60px;height:60px"
                                                    src=" <?php echo e(asset('user')); ?>/img/product/<?php echo e($item['photo']); ?>"
                                                    alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6 style="font-size: 13px"> <?php echo e($item['name']); ?></h6>
                                                <h5 style="font-size: 13px">$ <?php echo e($item['price']); ?></h5>

                                            </div>


                                        </td>
                                        <td width="100px"><b style="font-size: 17px"> X <?php echo e($item['quantity']); ?></b></td>

                                        <td><b>$<?php echo e($item['price'] * $item['quantity']); ?></b></td>

                                        

                                        <?php
                                            $total += $item['price'] * $item['quantity'];
                                            $id++;
                                        ?>
                                        </tr>
                                        <tr></tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td>Chu co san pham duoc mua</td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container">
                        <h4 style="text-align:center;color:green">Cart total</h4>
                        <br>
                       <div style="text-align:center;"><span>
                        <?php
                            echo " <b> $ " . $total."</b>";
                        ?>
                    </span> <button id="noButton" class="btn btn-success" style="border:1px"> Paid</button></div>
                    <br>
                        <div  style="text-align:center;color:rgb(255, 81, 0)">Created at : <?php echo e($created); ?></div>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class=" col-md-4">
            <div align="center" class="continue__btn">
                <a  class="btn btn-dark" href="<?php echo e(url('shop')); ?>">Continue Shopping</a>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/user/dashboard/cart/cartpaid.blade.php ENDPATH**/ ?>