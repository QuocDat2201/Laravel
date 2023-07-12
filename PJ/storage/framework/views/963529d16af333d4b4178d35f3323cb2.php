
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad" >
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"><div id="notification"></div></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="shopping__cart__table">
                              

                        <table class="update_cart-url" border-radius="3px" data-url=<?php echo e(url('updatecart')); ?>>
                            <thead style="background-color: rgb(254, 245, 5)">
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity  </th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $total = 0;
                                    $id=0;
                                ?>
                                <?php if(isset($cart)): ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:100px;height:100px"
                                                        src=" <?php echo e(asset('user')); ?>/img/product/<?php echo e($item['product']->photo); ?>"
                                                        alt="">
                                                    
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6> <?php echo e($item['product']->name); ?></h6>
                                                    <h5>$ <?php echo e($item['product']->price); ?></h5><small>(quantity <?php echo e($item['quantity_kho']); ?>)</small>
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
                                            <td><b>$ <?php echo e($item['product']->price * $item['quantity']); ?></b></td>
                                            <td class="">
                                                <a href="<?php echo e(url('removeorder/' . $item['product']->id)); ?>">
                                                    <i class="btn btn-danger fa fa-trash"></i>
                                                </a>
                                                <a href="" class="cart_update" data-id="<?php echo e($id); ?>" >
                                                    <i class="btn btn-success fa fa-upload" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <?php
                                                $total += $item['product']->price * $item['quantity'];
                                                $id++;
                                            ?>
                                        </tr>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td>Chu co san pham duoc them vao gio</td>
                                    </tr>
                                <?php endif; ?>
                                    <tr>
                                        <td></td>
                                    <td style="color:red"><b><?php echo e(session('error')); ?></b></td>
                                    <td></td>
                                    </tr>
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
                            <div class="continue__btn update__btn">
                                <a href="<?php echo e(url('shop/savecart')); ?>"><i class="fa fa-spinner"></i> Save cart</a>
                            </div>
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
                                        echo "$ ".$total;
                                    ?>
                                </span>
                            </li>
                        </ul>
                       <div> <button id="noButton" style="border:1px;display:block;width:300px;height:50px;background-color:red"  > <a href="<?php echo e(url('shop/payment')); ?>"  id="payment" style="color:aliceblue;font-size:30px " >Payment</a></button></div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/user/pages/shoppingcart.blade.php ENDPATH**/ ?>