                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-sm-4">
                                <div class="single_product_item">
                                    <a href="<?php echo e(route('product', [$product->id])); ?>">
                                    <img src="<?php echo e(asset('public/img/' . $product->image)); ?>" alt="#" class="img-fluid">
                                    <h3> <a href="#"><?php echo e($product->name); ?></a> </h3>
                                    <p>$<?php echo e($product->price); ?></p>
                                </div>
                            </a>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/shop/brick-standard.blade.php ENDPATH**/ ?>