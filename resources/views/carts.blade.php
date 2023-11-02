@extends('layouts.app')

@section('content')
<div class="container">
<div class="card-header">{{ __('Your cart') }}</div>
    @php
        $data = \App\Models\Cart::where('user_id',Auth::user()->id)->get();
        $total = DB::table('carts')->sum('product_price');
    @endphp
    <div class="card-body">
    <div class="alert alert-success" id="myForm" style="display: none;">
                <strong>Success!</strong> Your order has been placed.
    </div>
        @foreach($data as $item)
        
            <div class="cart-item">
                <h5>{{ $item->product_name }}</h5>
                <p>Price: Rs.{{ $item->product_price }}</p>
                
            </div>
            
        @endforeach
            <div>
                <p>Total: Rs.{{ $total }}</p>
            </div>

            <a href="/checkout" onclick="openForm()">Proceed to Checkout</a>
            <br>
            <a href="/home">Continue Shopping</a>

            
    </div>
</div>
</div>
    <script>
        function openForm() {
    document.getElementById("myForm").style.display = "block";
    }
    </script>
@endsection
