              <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <div><a class="btn btn-danger listbuttonremove" id="<?php echo e($cart->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                      <img src="<?php echo e(asset('public/img/' . $cart->image)); ?>" alt="" />
                    </div>
                    <div class="media-body">
                      <p><?php echo e($cart->name); ?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$<?php echo e($cart->price); ?></h5>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/shop/cart-standard.blade.php ENDPATH**/ ?>