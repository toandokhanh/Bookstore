@if (Auth::guard('admin')->user()->role === 1)
  @include('errors.404a')
  <h6>{{ Auth::guard('admin')->user()->role }}</h6>
@else
  @include('admin.include.header')
  @include('admin.include.slidebar')
  <div class="grid_10">
      <div class="box round first ">
          <h2 class=""> Bộ điều khiển</h2>
          <div class="block">               
            Chào mừng đến với trang quản trị của Bookstore       
          </div>
      </div>
  </div>
  @include('admin.include.footer')

@endif

 



{{-- <h1>hello</h1>  --}}