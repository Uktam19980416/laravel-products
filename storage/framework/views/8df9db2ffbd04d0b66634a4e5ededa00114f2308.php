<?php $__env->startSection('css'); ?>
   <style type="text/css">

   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- breadcrumb part start-->
                            <?php
                            // print_r($carts);
                            ?>
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>cart list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
              <tbody id="cart-items-list">
                <?php echo $__env->make('shop.cart-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </tbody>
              
              <tr class="bottom_button">
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <button type="button" class="btn_1">Clear All</button>
                    <form method="post" style="display: none;" name="form_clearall" action="<?php echo e(route('clearall')); ?>">
                                    <?php echo e(csrf_field()); ?>

                    </form>
                  </div>
                </td>
              </tr>
            
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->
      <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- <script src="<?php echo e(asset('public/js/main.js')); ?>"></script> -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.btn_1').click(function(){
      // form_clearall.submit();
      BaseRecord.clearall();
      return false;
    });
    $('.listbuttonremove').click(function(){
      BaseRecord.removeone($(this).attr('id'));
      return false;
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/shop/cart.blade.php ENDPATH**/ ?>