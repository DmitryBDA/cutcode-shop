@extends('layouts.auth')

@section('content')
    <main class="md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
        <div class="container">

            <!-- Page heading -->
            <div class="text-center">
                <a href="index.html" class="inline-block" rel="home">
                    <img src="/./images/logo.svg" class="w-[148px] md:w-[201px] h-[36px] md:h-[50px]" alt="CutCode">
                </a>
            </div>

            <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
                <h1 class="mb-5 text-lg font-semibold">Регистрация</h1>
                <form method="post" action="{{ route('user.register') }}" class="space-y-3">
                    @csrf
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="@error('name')_is-error @enderror w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="Имя и фамилия" >
                    @error('name')
                    <div class="mt-3 text-pink text-xxs xs:text-xs">{{ $message }}</div>
                    @enderror
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class=" @error('email')_is-error @enderror w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="E-mail" >
                    @error('email')
                    <div class="mt-3 text-pink text-xxs xs:text-xs">{{ $message }}</div>
                    @enderror
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <input type="password"
                                   name="password"

                                   class="@error('password')_is-error @enderror w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="Пароль" >
                            @error('password')
                            <div class="mt-3 text-pink text-xxs xs:text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="password"
                                   name="password_confirmation"
                                   class="@error('password_confirmation')_is-error @enderror w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="Повторно пароль" >
                            @error('password_confirmation')
                                <div class="mt-3 text-pink text-xxs xs:text-xs">{{ $message }}</div>
                            @enderror
{{--                            <div class="mt-3 text-pink text-xxs xs:text-xs">Введите пароль ещё раз</div>--}}
                        </div>
                    </div>
                    <button type="submit" class="w-full btn btn-pink">Зарегистрироваться</button>
                </form>
                <div class="space-y-3 mt-5">
                    <div class="text-xxs md:text-xs">Есть аккаунт? <a href="login.html" class="text-white hover:text-white/70 font-bold underline underline-offset-4">Войти</a></div>
                </div>
                <ul class="flex flex-col md:flex-row justify-between gap-3 md:gap-4 mt-14 md:mt-20">
                    <li>
                        <a href="#" class="inline-block text-white hover:text-white/70 text-xxs md:text-xs font-medium" target="_blank" rel="noopener">Пользовательское соглашение</a>
                    </li>
                    <li class="hidden md:block">
                        <div class="h-full w-[2px] bg-white/20"></div>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-white hover:text-white/70 text-xxs md:text-xs font-medium" target="_blank" rel="noopener">Политика конфиденциальности</a>
                    </li>
                </ul>
            </div>

        </div>
    </main>

@endsection
