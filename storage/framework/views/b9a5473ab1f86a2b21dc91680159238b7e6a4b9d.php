<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>

    <!-- breadcrumb part start-->
        <?php
         // print_r($product);

        ?>
                <?php if($errors->any()): ?>
                    <?php $__env->startComponent('shop.components.alert'); ?>
                        <?php $__env->slot('type'); ?>
                            danger
                        <?php $__env->endSlot(); ?>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($error); ?><br>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="product_img">
            <div class="single_product_img">
              <img src="<?php echo e(asset('public/img/' . $product->image)); ?>" alt="#">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">
            <h3><?php echo e($product->name); ?><br>
                rebound pillows</h3>
            <p>
                Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.
            </p>
            <div class="card_area">
                <div class="product_count_area">
                    <p>$<?php echo e($product->price); ?></p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">add to cart</a>
              </div>
              <form name="form_tocart" method="post" action="<?php echo e(url('/tocart')); ?>" style="display: none;">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                <input type="hidden" name="price" value="<?php echo e($product->price); ?>" />
                <input type="hidden" name="image" value="<?php echo e($product->image); ?>" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->

  <!-- subscribe part end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.add_to_cart').click(function(){
      form_tocart.submit();
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/shop/product.blade.php ENDPATH**/ ?>