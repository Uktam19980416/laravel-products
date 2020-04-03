<?php $__env->startSection('css'); ?>
<style type="text/css">
    .single_product_item{
        opacity: 0.7;
    }
    .single_product_item:hover{
        opacity: 1;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- product list end-->
                <?php
                // print_r($products);
                ?>
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2 id="product">Product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_list">
                        <div class="row products_row">
                           
                        <?php echo $__env->make('shop.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
<!--                         <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- product list part end-->
           <!--  <div class="button load_more" style="margin-left: 620px;"><a href="#" style=" color: #fff;" class="link_again">More</a></div> -->
    <!-- subscribe part here -->

    <!-- subscribe part end -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
    <!-- <script src="<?php echo e(asset('public/js/main.js')); ?>"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.submit_1').click(function(){
                BaseRecord.search = $('.text_search_input').val();
                BaseRecord.more();
            });
        });
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/shop/index.blade.php ENDPATH**/ ?>