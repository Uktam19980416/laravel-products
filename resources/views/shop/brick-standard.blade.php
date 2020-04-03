                        @foreach($products as $product)
                            <div class="col-lg-4 col-sm-4">
                                <div class="single_product_item">
                                    <a href="{{route('product', [$product->id])}}">
                                    <img src="{{ asset('public/img/' . $product->image) }}" alt="#" class="img-fluid">
                                    <h3> <a href="#">{{$product->name}}</a> </h3>
                                    <p>${{$product->price}}</p>
                                </div>
                            </a>
                            </div>

                            @endforeach