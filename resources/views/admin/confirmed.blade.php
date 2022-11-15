<div hidden >
    {{ $bills = DB::table('bills')
    ->join('accounts', 'bills.ac_id', '=', 'accounts.id')
    ->select('bills.*','accounts.use_name','accounts.email','accounts.phone','accounts.address')
    ->whereIn('bills.confirmed',[0])
    ->get();
    }}
</div>   
@include('admin.include.header')
@include('admin.include.slidebar')
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
<div class="grid_10">
    <div class="box round first ">
        <h2 class="">Duyệt đơn hàng</h2>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                        <th>Tổng tiền</th>
                        <th>Duyệt đơn</th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($bills as $bill)
                    <tr>
                        <td>{{ $bill->use_name }}</td>
                        <td>{{ $bill->email }}</td>
                        <td>{{ $bill->phone }}</td>
                        <td>{{ $bill->address }}</td>
                        <td>{{ $bill->created_at }}</td>
                        <td><a style="color: rgb(59, 59, 246)" href="#chua-update">Chi tiết đơn hàng</a></td>
                        <td>{{ $bill->total }}</td>
                        <td>
                            <a href="{{ route('confirmed_bill', ['id'=>$bill->id ]) }}">
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
                </tbody>
            </table>
        </div> 
    </div>
</div>

@include('admin.include.footer')
