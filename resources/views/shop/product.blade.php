@extends('shop.layout')
@section('css')

@endsection
@section('main')

    <!-- breadcrumb part start-->
        @php
         // print_r($product);

        @endphp
                @if ($errors->any())
                    @component('shop.components.alert')
                        @slot('type')
                            danger
                        @endslot
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                    @endcomponent
                @endif
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
              <img src="{{ asset('public/img/' . $product->image) }}" alt="#">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">
            <h3>{{$product->name}}<br>
                rebound pillows</h3>
            <p>
                Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.
            </p>
            <div class="card_area">
                <div class="product_count_area">
                    <p>${{$product->price}}</p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">add to cart</a>
              </div>
              <form name="form_tocart" method="post" action="{{ url('/tocart') }}" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="name" value="{{$product->name}}" />
                <input type="hidden" name="price" value="{{$product->price}}" />
                <input type="hidden" name="image" value="{{$product->image}}" />
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

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('.add_to_cart').click(function(){
      form_tocart.submit();
    });
  });
</script>
@endsection