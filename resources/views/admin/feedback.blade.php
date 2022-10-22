@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    
    <div class="grid_10">
        <div class="box round first grid">
            <h2 style="height: 50px">Phản hồi khách hàng </h2>
            <div style="margin-top:-150px">
                hi
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
@include('admin.include.footer')
