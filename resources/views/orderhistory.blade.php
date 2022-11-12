@if (isset(Auth::user()->use_name))
<div hidden >
    {{ $ac_id = Auth::user()->id}}
</div>
    <x-app-layout>
        @include('include.header')
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>
        <div class="main">
            <div class="content">
                <div class="cartoption">		
                    <div class="cartpage">
                        <div class="heading"> <br>
                            <h3>Lịch sử mua hàng của bạn</h3> <br> 
                        </div>  	
                    <div class="clear"></div>
                    <p class="mt-4 mb-4 font-semibold text-[16px] uppercase">Đơn hàng chưa được xác nhận</p>
                    <div>
                        <table>
                            <tr>
                              <th>Ngày đặt</th>
                              <th>Số lượng</th>
                              <th>Trạng thái</th>
                              <th>Mã vận đơn</th>
                              <th>Hành động</th>
                              <th>Tổng tiền</th>
                              <th>Hủy đơn hàng</th>
                            </tr>
                            <div hidden >
                                {{ $bills = DB::table('bills')
                                ->whereIn('ac_id',[$ac_id])
                                ->whereIn('confirmed',[0])
                                ->get();
                                }}
                            </div>
                            @foreach ($bills as $bill)
                            <tr>
                              
                              <td>{{ $bill->created_at }}</td>
                              <td>{{ $bill->bill_amount }}</td>
                              <td>Chưa xác nhận</td>
                              <td>{{ $bill->id }}</td>
                              <td style="color:rgb(44, 44, 253)"><a href="#chua-duoc-update">Chi tiết đơn hàng</a></td>
                              <td class="text-red-600">{{ $bill->total }}</td>
                              <td>
                                <a href="{{ route('delete_bill', ['id'=>$bill->id ]) }}">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/nhfyhmlt.json"
                                        trigger="hover"
                                        colors="primary:#e83a30"
                                        style="width:22px;height:22px;margin-left:10px;">
                                    </lord-icon>
                                </a>
                              </td>
                              
                            </tr>
                            @endforeach
                          </table>
                    </div>
                    <p class="mt-4 mb-4 font-semibold text-[16px] uppercase">Đơn hàng đã được xác nhận</p>
                    <div>
                        <table>
                            <tr>
                              <th>Ngày đặt</th>
                              <th>Số lượng</th>
                              <th>Trạng thái</th>
                              <th>Mã vận đơn</th>
                              <th>Hành động</th>
                              <th>Tổng tiền</th>
                              <th>Đã Nhận hàng</th>
                            </tr>
                            <div hidden >
                                {{ $bills = DB::table('bills')
                                ->whereIn('ac_id',[$ac_id])
                                ->whereIn('confirmed',[1])
                                ->get();
                                }}
                            </div>
                            @foreach ($bills as $bill)
                            <tr>
                              
                              <td>{{ $bill->created_at }}</td>
                              <td>{{ $bill->bill_amount }}</td>
                              <td>Chờ giao hàng</td>
                              <td>{{ $bill->id }}</td>
                              <td style="color:rgb(44, 44, 253)"><a href="#chua-duoc-update">Chi tiết đơn hàng</a></td>
                              <td class="text-red-600">{{ $bill->total }}</td>
                              <td>
                                <a href="#chua-duoc-update">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/egiwmiit.json"
                                        trigger="hover"
                                        colors="primary:#30e849"
                                        style="width:22px;height:22px;margin-left:10px;">
                                    </lord-icon>
                                </a>
                                
                            </td>
                              
                            </tr>
                            @endforeach
                          </table>
                    </div>
                    </div>
                    <div class="mt-6 flex justify-center mb-3">
                        <button class="buysubmit"> <a href="{{ route('products') }}">Tiếp tục mua hàng</a> </button>
                    </div>  
                </div>
            </div>
        </div>

        @include('include.footer')
    </x-app-layout>
	 
@else
    
@endif