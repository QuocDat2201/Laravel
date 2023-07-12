<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="table-cart">
                    <div class="media-line-item line-item">
                        <div class="media-left">
                            <div class="item-img">
                                <img style="width:100px;height:130px" src="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>" alt="">
                            </div>

                            <div class="item-remove">
                                <a href="javascript:void(0)"
                                    onclick="HRT.Cart.removeItemCart(this,'/cart/change?id=1101662258&quantity=0')">Xóa</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="item-info">
                                <h3 class="item--title"><a href="/products/ca-chi-vang-rim-tieu"><?php echo e($product->name); ?></a>
                                </h3>

                            </div>
                            <div class="item-price">

                            </div>
                        </div>
                        <div class="media-total">
                            <div class="item-total-price">
                                <span class="line-item-total"><?php echo e($product->price); ?>,000₫</span>
                            </div>
                            <div class="item-qty">
                                <div class="qty quantity-partent qty-click clearfix">
                                    <button type="button" class="qtyminus qty-btn">-</button> <input type="text"
                                        size="4" name="updates[]" min="1" productId="1045862271"
                                        id="updates_1101662258" data-price="7600000" value="1"
                                        class="tc line-item-qty item-quantity" />
                                    <button type="button" class="qtyplus qty-btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sidebarCart-sticky">
                <div class="mainCart-sidebar wrap-order-summary">
                    <div class="order-summary-block">
                        <h2 class="summary-title">Thông tin đơn hàng</h2>

                        <div class="summary-total">
                            <p>Tổng tiền: <span><?php echo e($product->price); ?>,000đ</span></p>
                        </div>
                        <div class="summary-action">
                            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                            <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                            <div>
                                <a id="btnCart-checkout"  class="btn btn-danger" data-price-min=""
                                    data-price-total="76000" href="<?php echo e(url('/testt/' . $product->id)); ?>">THANH TOÁN </a>
                            </div>
                        </div>

                        <div class="pay-box hidden-xs">
                            <h5>Phương thức thanh toán</h5>
                            <div class="pay-img">
                                <a href="#" target="_blank" title="Phương thức thanh toán">
                                    <img class=" img-fluid"
                                        src="//bizweb.dktcdn.net/100/443/377/themes/860518/assets/footer_trustbadge.jpg?1686745245971"
                                        alt="Phương thức thanh toán">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aptech-k1\PJ\resources\views/user/dashboard/test.blade.php ENDPATH**/ ?>