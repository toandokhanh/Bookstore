@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="box round first grid">
        <h2 style="height: 50px">Thêm danh mục</h2>
       <div style="margin-top: -130px; margin-left: 0px;" class="block copyblock"> 
         <form>
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" placeholder="Nhập vào danh mục cần thêm..." class="medium" />
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
