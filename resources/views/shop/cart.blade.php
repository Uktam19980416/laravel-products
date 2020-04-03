@extends('shop.layout')
@section('css')
   <style type="text/css">

   </style>
@endsection
@section('main')
    <!-- breadcrumb part start-->
                            @php
                            // print_r($carts);
                            @endphp
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
                @include('shop.cart-standard')
              </tbody>
              
              <tr class="bottom_button">
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <button type="button" class="btn_1">Clear All</button>
                    <form method="post" style="display: none;" name="form_clearall" action="{{route('clearall')}}">
                                    {{ csrf_field() }}
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
      @endsection

@section('js')
<!-- <script src="{{ asset('public/js/main.js') }}"></script> -->
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
@endsection