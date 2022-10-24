<style>
    .suc{
        position: absolute;
        top:180px;
        color: green;
        left: 290px;
    }
</style>
@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="box round first grid">
        <h2 style="height: 50px">Thêm Tác giả</h2>
       <div style="margin-top: -70px; margin-left: 0px;" class="block copyblock"> 
         <form action="{{ route('listing-store-addauthor')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <table class="form">					
                <tr>
                    <td>
                        <input required name="author_name" type="text" placeholder="Nhập vào Tên tác giả..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input required name="year_of_birth" type="text" placeholder="Nhập vào Năm sinh tác giả..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input required name="nationality" type="text" placeholder="Nhập vào Quốc tịch tác giả..." class="medium" />
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Thêm" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

@include('admin.include.footer')
