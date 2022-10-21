{{-- chưa đăng nhập
{{-- @include('include.account') --}}

 @if (isset(Auth::user()->use_name))
 <x-app-layout>
    {{-- <h1>da dang nhap</h1> --}}
    @include('include.header')
    @include('include.slider')
    @include('include.main')
    @include('include.footer')
    
</x-app-layout>
 @else
    {{-- <h1>chua dang nhap</h1> --}}
    @include('include.header')
    @include('include.slider')
    @include('include.main')
    @include('include.footer')
@endif