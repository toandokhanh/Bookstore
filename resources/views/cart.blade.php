@if (isset(Auth::user()->cart_id))
    <div hidden >{{ $cart_id = Auth::user()->cart_id }}</div>
@endif
<div hidden >
    {{ $cart_details = DB::table('cart_details')
    ->join('products', 'cart_details.product_id', '=', 'products.id')
    // ->whereIn('cart_details.cart_id', [$cart_id])
    ->get();
    }}
    {{ $carts = DB::table('cart_details')
    // ->whereIn('id', [$cart_id])
    ->get();
    }}
</div>

    

@if (isset(Auth::user()->use_name))
    <x-app-layout>
        @include('include.header')
        
        <div class="main">
            <div class="content">
                <div class="cartoption">		
                    <div class="cartpage">
                        <div class="heading"> <br>
                            <h3>Giỏ hàng của bạn</h3> <br>
                        </div>
                            <!-- <h3 style="width: 100%;color: #215d3b;font-weight: 600;">Giỏ hàng của bạn</h3> -->
                                <table class="tblone">
                                    <tr>
                                        <th width="20%">Tên sản phẩm</th>
                                        <th width="10%">Hình</th>
                                        <th width="15%">Giá bán</th>
                                        <th width="25%">Số lượng</th>
                                        <th width="20%">Thành tiền</th>
                                        <th width="10%">Xóa</th>
                                    </tr>
                                    <tr>
                                        @foreach ($cart_details as $cart_detail)
                                        <td>{{ $cart_detail->product_name }}</td>
                                        <td><img src="{{ $cart_detail->image }}" alt=""/></td>
                                        <td>{{number_format($cart_detail->product_price)." VND"}}</td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="number" name="" value="{{ $cart_detail->quantity }}"/>
                                                <input type="submit" name="submit" value="Update"/>
                                            </form>
                                        </td>
                                        <td>{{ number_format($cart_detail->total_price)." VND" }}</td>
                                        
                                        <td>
                                            
                                            @foreach ($carts as $cart)
                                            <a href="{{ route('cart-delete',['id'=>$cart->id]) }}">X</a>
                                            @endforeach
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </table>
                                <table style="float:right;text-align:left;font-size: 15px;margin:10px 50px" width="25%">  <br>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- TỔNG PHỤ	 : </th>
                                        <td>{{ number_format($cart_detail->total_price += $cart_detail->total_price).' VNĐ' }}</td>
                                    </tr>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- PHÍ SHIP :       </th>
                                        <td>{{ number_format(30000) .' VNĐ' }}</td>
                                    </tr>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- TỔNG CỘNG:</th>
                                        <td style="color: red">241500 VNĐ </td>
                                    </tr>
                               </table>
                            </div>
                            <br>
                            <div style="display:flex; justify-content: space-between; padding: 0 140px" class="shopping">
                                <div class="shopleft">
                                    <a href="{{ route('products') }}"> <img src="images/shop.png" alt="" /></a>
                                </div>
                                <div class="shopright">
                                    <a href=""> <img src="images/check.png" alt="" /></a>
                                </div>
                            </div>
                </div>  	
               <div class="clear"></div>
            </div>
         </div>
        
        
        @include('include.footer')
    </x-app-layout>
	 
@else
    
@endif