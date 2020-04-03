@extends('shop.layout')
@section('css')
<style type="text/css">
    .single_product_item{
        opacity: 0.7;
    }
    .single_product_item:hover{
        opacity: 1;
    }
</style>
@endsection
@section('main')
    <!-- product list end-->
                @php
                // print_r($products);
                @endphp
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
                           
                        @include('shop.brick-standard')
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
    @endsection
    @section('js')
    <!-- <script src="{{ asset('public/js/main.js') }}"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.submit_1').click(function(){
                BaseRecord.search = $('.text_search_input').val();
                BaseRecord.more();
            });
        });
    </script>
    @endsection
