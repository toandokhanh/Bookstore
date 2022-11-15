<div hidden>{{ $total = 0 }}</div>
<div hidden >
    {{ $bills = DB::table('bills')
    ->join('accounts', 'bills.ac_id', '=', 'accounts.id')
    ->select('bills.*','accounts.use_name','accounts.email','accounts.phone')
    ->whereIn('bills.confirmed',[1])
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
        <h2 class="">Quản lý doanh thu</h2>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày tạo</th>
                        <th>Tổng tiền</th>
                        {{-- <th>Duyệt đơn</th> --}}
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($bills as $bill)
                    <tr>
                        <td>{{ $bill->use_name }}</td>
                        <td>{{ $bill->email }}</td>
                        <td>{{ $bill->phone }}</td>
                        <td>{{ $bill->created_at }}</td>
                        <td>{{ $bill->total }}</td>
                        {{-- <td>
                            <a href="{{ route('confirmed_bill', ['id'=>$bill->id ]) }}">
                                <lord-icon
                                    src="https://cdn.lordicon.com/egiwmiit.json"
                                    trigger="hover"
                                    colors="primary:#30e849"
                                    style="width:22px;height:22px;margin-left:10px;">
                                </lord-icon>
                            </a>
                        </td> --}}
                    </tr>
                    <div hidden>{{ $total +=  $bill->total}}</div>
                    @endforeach	
                </tbody>
            </table>
            <div>
                Tổng doanh thu: <span style="color: red">{{number_format($total)." VNĐ" }}</span>
            </div>
        </div> 
    </div>
</div>

@include('admin.include.footer')
