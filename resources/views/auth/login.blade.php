<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('/') }}">
                <x-application-logo-new class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                             autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <input size="1" type="text" name="role" id="role" value="1" hidden>
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ tôi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Đăng nhập') }}
                </x-primary-button>
                
            </div>
        </form>
        <div class="mt-4 text-[13px] text-center">
            <p>Nếu bạn chưa có tài khoản hãy sữ dụng tài khoản bên dưới để xem nội dung của nhiều thể loại sách tại Book Store</p>
            <p>Email: demo@localhost.com - Mật khẩu: demo@localhost.com</p>
        </div>
    </x-auth-card>
</x-guest-layout>
