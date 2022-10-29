<style>
    .suc{
        position: absolute;
        top:180px;
        color: green;
        left: 290px;
    }
</style>
<div hidden >
    {{ $authors = DB::table('authors')
    ->where('id', [$id])
    ->get()
    ;}}
</div>
@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="box round first grid">
        <h2 style="height: 50px">Cập nhật thông tin tác giả</h2>
       <div style="margin-top: -70px; margin-left: 0px;" class="block copyblock"> 
         <form action={{ route('update-author',['id'=>$id])  }} method="POST" enctype="multipart/form-data" >
            @csrf
            <table class="form">	
                @foreach ($authors as $author) 				
                <tr>
                    <td>
                        <input value="{{ $author->author_name }}" required name="author_name" type="text" placeholder="Nhập vào Tên tác giả..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input value="{{ $author->year_of_birth }}" required name="year_of_birth" type="text" placeholder="Nhập vào Năm sinh tác giả..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input value="{{ $author->nationality }}" required name="nationality" type="text" placeholder="Nhập vào Quốc tịch tác giả..." class="medium" />
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Cập nhật" />
                    </td>
                </tr>
            </table>
            @endforeach
            </form>
        </div>
    </div>
</div>

@include('admin.include.footer')
