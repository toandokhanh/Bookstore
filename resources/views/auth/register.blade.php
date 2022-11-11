<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('/') }}">
                <x-application-logo-new class="w-20 h-20 fill-current  text-gray-500" />
            </a>
        </x-slot>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Tên')" />

                <x-text-input required id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input required id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Giới tính')" /> <br>
                <div class="flex gap-[6px] -mt-3">
                    <input class="ml-2" type="radio" id="female" name="gender" value="0">
                    <label class="text-[14px]" for="female">Nữ </label><br>
                    <input class="ml-2 " type="radio" id="male" name="gender" value="1">
                    <label class="text-[14px]" for="male">Nam</label><br>
                    <input class="ml-2" type="radio" id="other" name="gender" value="2">
                    <label required class="text-[14px]" for="other">Khác</label><br>
                </div>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Xác nhận lại mật khẩu')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="mt-4">
                <input size="1" type="text" name="role" id="role" value="1" class="" hidden >
            </div>
            <div class="mt-4">
                <x-input-label for="address" :value="__('Địa chỉ')" />
                <input type="text" name="address" id="address" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" required>
            </div>
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Số điện thoại')" />
                <input type="text" name="phone" id="phone" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" required>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Bạn đã có tài khoản?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Đăng ký') }}
                </x-primary-button>
            </div>
            
        </form>
    </x-auth-card>
</x-guest-layout>
