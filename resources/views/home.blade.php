@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success" id="myForm" style="display: none;">
                <strong>Success!</strong> added to cart.
    </div>
    @php
        $data = \App\Models\Product::all(); // Replace 'Post' with your model and query as needed
    @endphp
    

    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Choose yours') }}</div>
                <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>

                    <div class="row">
                        @foreach($data as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ URL::to('img/product/'.$item->imagepath) }}">
                                   
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $item->name }}</h6>
                                    <a href="/add-to-cart/{{$item->id}}" class="add-cart" id="showCardButton" onclick="openForm()">+ Add To Cart</a>
                                    
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>Rs.{{ $item->price }}</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
                
                </div>
            </div>
        </div>
    </div>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
    </script>
</div>
@endsection
