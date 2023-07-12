<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container" >
            <div class="row">
                <div class="col-md-8" style=" background-image: linear-gradient(rgb(255, 255, 255),rgb(255, 255, 255),rgb(255, 255, 255))">
                    <div class="shopping__cart__table">
                        <table class="table table-sm update_cart-url" border-radius="3px" data-url=<?php echo e(url('updatecart')); ?>>
                            <thead style="background-color: rgb(131, 255, 100)">
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th align="center">Total</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $total=0;
                                    $id=0;
                                ?>
                                <?php if(isset($cart)): ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:100px;height:100px"
                                                        src=" <?php echo e(asset('user')); ?>/img/product/<?php echo e($item['photo']); ?>"
                                                        alt="">
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6> <?php echo e($item['name']); ?></h6>
                                                    <h5>$ <?php echo e($item['price']); ?></h5>
                                                </div>

                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input class="qunatity" type="text"
                                                            value="<?php echo e($item['quantity']); ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>$ <?php echo e($item['price'] * $item['quantity']); ?></b></td>
                                            
                                            <?php
                                                $total += $item['price'] * $item['quantity'];
                                                $id++;
                                            ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td>Chu co san pham duoc mua</td>
                                    </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="continue__btn">
                                <a href="<?php echo e(url('shop')); ?>">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total 
                                 <span>
                                    <?php
                                        echo "$ ".$total;
                                    ?>
                                </span>
                            </li>
                        </ul>
                            <button class="btn btn-success" style=" width:300px;"  >Paid</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aptech-k1\PJ\resources\views/user/dashboard/cart/cartsaved.blade.php ENDPATH**/ ?>