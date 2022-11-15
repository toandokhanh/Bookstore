{{-- Đăng nhập thành công   --}}
@vite('resources/css/app.css')

<x-app-layout>
    
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-center">
            <a href="../dashboard">
                @include('components.application-logo-new')
            </a>
        </h2>
    </x-slot> 
    <div class="py-12">
        <div class="sm:max-w-7xl sm:mx-auto sm:px-6 lg:px-8 w-xl p-7">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-7">
                <div class="p-6 bg-white border-b border-gray-200 mb-3 text-center text-[20px] font-semibold">
                    Hồ sơ cá nhân
                </div>
                <form method="POST" action="{{ route('postProfile') }}">
                    @csrf
                    <div class="max-w-4xl mx-auto mt-10">
                        <!-- Name -->
                        <input hidden name="id" type="text" value="{{ Auth::user()->id }}">
                        <div>
                            <x-input-label for="name" :value="__('Tên')" />
    
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="use_name" value="{{ Auth::user()->use_name }}" required />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-6">
                            <x-input-label for="email" :value="__('Email')" />
                
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}"  required />
                        </div>
                        {{-- <div class="mt-6">
                            <x-input-label for="gender" :value="__('Giới tính')" /> <br>
                            <div class="flex gap-[6px] -mt-3">
                                <input class="ml-2" type="radio" id="female" name="gender" value="1">
                                <label class="text-[14px]" for="female">Nữ </label><br>
                                <input class="ml-2 " type="radio" id="male" name="gender" value="1">
                                <label class="text-[14px]" for="male">Nam</label><br>
                                <input class="ml-2" type="radio" id="other" name="gender" value="1">
                                <label class="text-[14px]" for="other">Khác</label><br>
                            </div>
                        </div> --}}
                        <!-- Password -->
                        <div class="mt-6">
                            <x-input-label for="address" :value="__('Địa chỉ')" />
                
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ Auth::user()->address }}"  required />
                        </div>
                        <div class="mt-6">
                        <x-input-label for="phone" :value="__('Số điện thoại')" />
                
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ Auth::user()->phone }}"  required />
                    </div>
                        {{-- <div class="mt-6">
                            <x-input-label for="password" :value="__('Mật khẩu')" />
                
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div> --}}
                
                        <!-- Confirm Password -->
                        {{-- <div class="mt-6">
                            <x-input-label for="password_confirmation" :value="__('Xác nhận lại mật khẩu')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div> --}}
                        {{-- <div class="mt-6">
                            <input size="1" type="text" name="role" id="role" value="1" hidden>
                        </div> --}}
                        <div class="flex justify-end gap-3">
                            <div class="flex items-center justify-end mt-10 mb-10 ">
                               <button> <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('changePasswd') }}"> Đổi mật khẩu ?</a></button>
                            </div>
                            <div class="flex items-center justify-end mt-10 mb-10 ">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"></a>
                                <x-primary-button class="ml-4">
                                    {{ __('Cập nhật') }}
                                </x-primary-button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div> 
   
 </x-app-layout>