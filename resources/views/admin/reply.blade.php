<div hidden >
    {{ $messages = DB::table('messages')
    ->whereIn('messages.seen',['0'])
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
        <h2 class="">Phản hồi từ khách hàng</h2>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày tạo</th>
                        <th style="width:45%">Lời nhắn</th>
                        <th>Đã thông qua</th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($messages as $ismessages)
                    <tr>
                        <td>{{ $ismessages->use_name }}</td>
                        <td>{{ $ismessages->email }}</td>
                        <td>{{ $ismessages->phone }}</td>
                        <td>{{ $ismessages->created_at }}</td>
                        <td>{{ $ismessages->feedback }}</td>
                        <td>
                                <a href="{{ route('replyuse',['id' =>$ismessages->id]) }}">
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
