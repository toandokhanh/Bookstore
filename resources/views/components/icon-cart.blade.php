{{-- icon vỏ hàng --}}
@if (isset(Auth::user()->cart_id))
    <div hidden >{{ $cart_id = Auth::user()->cart_id }}</div>
    <div hidden >
        {{ $cart_details = DB::table('cart_details')
        ->whereIn('cart_details.cart_id',[$cart_id])
        ->get();
        }}
    </div>
    <span hidden>{{ $count = 0 }}</span>
    @foreach ($cart_details as $cart_detail)
    <span hidden>{{ ++$count }}</span>
    @endforeach
@endif


<script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
<div class="bg-[#1a8849] w-12 h-12 text-center rounded-[50%] fixed items-center sm:top-28 sm:right-20 top-32 right-8 "
        title="Giỏ hàng">
    <lord-icon
        src="https://cdn.lordicon.com/medpcfcy.json"
        trigger="loop"
        delay="1000"
        colors="primary:#ffffff"
        style="width:40px;height:40px;padding-top: 5px;">
    </lord-icon>
    <span class="text-[#fff] bg-red-600  font-semibold h-6 w-6 text-[11px] justify-center flex rounded-[50%] text-center items-center absolute top-4 right-9">
       @if (isset($count))
           {{ $count }}
        @else
        0
       @endif
    </span>
</div>
{{-- <lord-icon
    src="https://cdn.lordicon.com/medpcfcy.json"
    trigger="loop"
    delay="2000"
    colors="primary:#ffffff"
    style="width:32px;height:32px">
</lord-icon> --}}