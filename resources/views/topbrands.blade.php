@if (isset(Auth::user()->use_name))
	 
		<x-app-layout>
			@include('include.header')
			@include('include.slider')
            <div class="main">
                <div class="content">
                    <div class="content_top">
                    <div>
                        <div class="heading">
                        <h3>Sách bán chạy nhất trong năm 2022</h3>
                        </div>
                        <div class="clear"></div>
                    </div>

                
                
                    </div>
                </div>
            </div>
             <br>
             <br>
           
		</x-app-layout> @include('include.footer')
	 
@else

@include('include.header')
@include('include.slider')
<div class="main">
    <div class="content">
        <div class="content_top">
        <div>
            <div class="heading">
            <h3>Sách bán chạy nhất trong năm 2022</h3>
            </div>
            <div class="clear"></div>
        </div>

    
    
        </div>
    </div>
</div>
 <br>
 <br>
 @include('include.footer')
@endif