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
                    Đổi mật khẩu
                </div>
                <form method="POST" action="{{ route('postPasswd') }}">
                    @csrf
                    <div class="max-w-4xl mx-auto mt-10">
                        <!-- Name -->
                        <input hidden name="id" type="text" value="{{ Auth::user()->id }}">
                        
                        <div class="mt-6">
                            <x-input-label for="password" :value="__('Mật khẩu')" />
                
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-6">
                            <x-input-label for="password_confirmation" :value="__('Xác nhận lại mật khẩu')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>

                        <div class="flex justify-end">
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