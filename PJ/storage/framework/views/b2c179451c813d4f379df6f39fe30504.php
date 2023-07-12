<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="shopping__cart__table">


                        <table class="uupdate_cart-url" border-radius="1px" data-url=<?php echo e(url('updatesavedcart')); ?>>
                            <thead style="height:10px; background-color: rgb(253, 255, 111)">
                                <tr style="height:10px">
                                    <th>Product</th>
                                    <th>Quantity </th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $total = 0;
                                    $id = 0;
                                ?>
                                <?php if(isset($cart)): ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:100px;height:100px"
                                                        src=" <?php echo e(asset('user')); ?>/img/product/<?php echo e($item['photo']); ?>"
                                                        alt="">

                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6> <?php echo e($item['name']); ?></h6>
                                                    <h5>$ <?php echo e($item['price']); ?></h5><small>(quantity
                                                        <?php echo e($item['quantity_kho']); ?>)</small>
                                                </div>



                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input class="qunatityy" type="text"
                                                            value="<?php echo e($item['quantity']); ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>$ <?php echo e($item['price'] * $item['quantity']); ?></b></td>
                                            <td class="cart__closen">
                                                <a href="<?php echo e(url('removeordersave/' . $item['id'])); ?>">
                                                    <i class="fa fa-trash btn btn-danger"></i>
                                                </a>
                                                <a class="fa fa-upload btn btn-success saved_cart_update"
                                                    data-id="<?php echo e($item['id']); ?>" href="<?php echo e(url('updatesavedcart')); ?>">
                                                    
                                                </a>
                                            </td>
                                            <?php
                                                $total += $item['price'] * $item['quantity'];
                                                $id++;
                                            ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td>without products</td>
                                        <td></td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="<?php echo e(url('shop')); ?>">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total
                                <span>
                                    <?php
                                        echo "$ " . $total;
                                    ?>
                                </span>
                            </li>
                        </ul>
                        <button id="noButton" style="border:1px"> <a href="<?php echo e(url('shop/paymentsavedcart')); ?>" id="payment"
                                class="primary-btn2" style="display:block">Payment</a></button>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/user/dashboard/cart/cartsaved1.blade.php ENDPATH**/ ?>