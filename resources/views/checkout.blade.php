{{-- <div hidden>{{ $total = 0; }}</div>
@if (isset(Auth::user()->cart_id))
    <div hidden >{{ $cart_id = Auth::user()->cart_id }}</div>
@endif
<div hidden >
    {{ $cart_details = DB::table('cart_details')
    ->join('products', 'cart_details.product_id', '=', 'products.id')
    ->join('carts', 'cart_details.cart_id', '=', 'carts.id')
    ->select('cart_details.*','products.product_name','products.image','products.product_price')
    ->whereIn('cart_details.cart_id',[$cart_id])
    ->get();
    }}
</div> --}}
    {{-- {{ dd($cart_details) }} --}}

@if (isset(Auth::user()->use_name))
    <x-app-layout>
        @include('include.header')
        
        <div class="main">
            <div class="content">
                <div class="cartoption">		
                    <div class="cartpage">
                        <div class="heading"> <br>
                            <h3>Đơn hàng của bạn đã được đặt!</h3> <br>
                            <div>
                                <p class="mb-2">Đơn hàng của bạn đã được xử lý thanh công</p>
                                <p>Bạn có thể xem lại lịch sử đặt hàng bằng cách truy cập vào 
                                    <a class="text-[18px] text-[#359761] font-semibold border-[1px] border-black " href="{{ route('orderhistory') }}">Lịch sử đặt hàng của tôi
                                        <lord-icon
                                            src="https://cdn.lordicon.com/hyhnpiza.json"
                                            trigger="loop"
                                            delay="1000"
                                            colors="primary:#359761"
                                            style="width:25px;height:25px">
                                        </lord-icon>    
                                    </a></p>
                            </div>  
                            <div class="mt-6">
                                <button class="buysubmit"> <a href="{{ route('products') }}">Tiếp tục mua hàng</a> </button>
                            </div>  
                    </div>  	
               <div class="clear"></div>
            </div>
         </div>
        
        
        @include('include.footer')
    </x-app-layout>
	 
@else
    
@endif