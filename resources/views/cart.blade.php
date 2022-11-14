<div hidden>{{ $total = 0}}</div>
<div hidden>{{ $amount = 0}}</div>
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
</div>

    {{-- {{ dd($cart_details) }} --}}
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
                                    @foreach ($cart_details as $cart_detail)
                                    <tr>
                                        
                                        <td>{{ $cart_detail->product_name }}</td>
                                        <td><img src="{{ $cart_detail->image }}" alt=""/></td>
                                        <td>{{number_format($cart_detail->product_price)."VND"}}</td>
                                        <td>
                                            <form action="{{ route('cart-update',['id' => $cart_detail->id]) }}" method="post">
                                                @csrf
                                                <input type="hidden" class="" name="product_id" value="{{ $cart_detail->product_id}}"/>
                                                <input type="hidden" class="" name="cart_id" value="{{ $cart_id}}"/>
                                                <input min="1" max="10" type="number" name="quantity" value="{{ $cart_detail->quantity }}"/>
                                                <input type="submit" name="submit" value="Update"/>
                                            </form>
                                        </td>
                                        <td>{{ number_format($cart_detail->total_price)." VND" }}</td>
                                        
                                        <td>
                                            <a href="{{ route('cart-delete',['id'=>$cart_detail->id]) }}">
                                                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/kfzfxczd.json"
                                                    trigger="hover"
                                                    colors="primary:#c71f16"
                                                    style="width:22px;height:22px">
                                                </lord-icon>
                                            </a>
                                        </td>
                                        <div hidden>
                                            
                                            @if ($cart_detail->total_price)
                                                {{$total += $cart_detail->total_price}}
                                                
                                            @endif
                                            @if ($cart_detail->quantity)
                                                {{$amount += $cart_detail->quantity}}
                                                
                                            @endif
                                        </div>
                                    </tr>
                                    <div hidden >{{ $cart_id = $cart_detail->cart_id }}</div>

                                    @endforeach
                                </table>
                                <table style="float:right;text-align:left;font-size: 15px;margin:10px 50px" width="25%">  <br>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- TỔNG PHỤ	 : </th>
                                        <td>{{number_format($total).' VND' }}</td>
                                    </tr>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- PHÍ SHIP :       </th>
                                        <td>{{ number_format($ship = 30000) .' VNĐ' }}</td>
                                    </tr>
                                    <tr style="display: flex; justify-content: space-between;">
                                        <th>- TỔNG CỘNG:</th>
                                        <td style="color: red">{{ number_format($db_total = $ship + $total) .' VNĐ' }}</td>
                                    </tr>
                               </table>
                            </div>
                            <br>
                            <div style="display:flex; justify-content: space-between; padding: 0 140px" class="shopping">
                                <div class="shopleft">
                                    <a href="{{ route('products') }}"> <img src="images/shop.png" alt="" /></a>
                                </div>
                                <div class="shopright">
                                        <a href="{{ route('checkout',['cart_id'=>$cart_id,'db_total' => $db_total,'amount' => $amount]) }}"> <img src="images/check.png" alt="" /></a>
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