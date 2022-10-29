<style>
    .suc{
        position: absolute;
        top:170px;
        color: green;
        left: 270px;
    }
</style>
@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="box round first grid">

        <h2 style="height: 50px">Thêm danh mục</h2>
       <div style="margin-top: -130px; margin-left: 0px;" class="block copyblock"> 
         <form action="{{ route('listing-store-addcatetory')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <table class="form">					
                <tr>
                    <td>
                        <input required name="cate_name" type="text" placeholder="Nhập vào danh mục cần thêm..." class="medium" />
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
