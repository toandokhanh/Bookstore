<style>
    .suc{
        position: absolute;
        top:160px;
        color: green;
        left: 640px;
    }
</style>
@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="grid_10">
        <div class="box round first grid">
            <h2 style="height: 50px">Thêm thanh trượt</h2>
        <div style="margin-top: -170px" class="block">           
             <form action={{ route('listing-store-addslider') }} method="post" enctype="multipart/form-data" >
                @csrf
                <table class="form">     
                    <tr>
                        <td>
                            <label>Tên thanh trượt</label>
                        </td>
                        <td>
                            <input name="slider_name" type="text" name="title" placeholder="Nhập tên thanh trượt..." class="medium" />
                        </td>
                    </tr>           
        
                    <tr>
                        <td>
                            <label>Thêm ảnh</label>
                        </td>
                        <td>
                            <input name="slider_image" type="file" name="image"/>
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Thêm" />
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <!-- Load TinyMCE -->
@include('admin.include.footer')
