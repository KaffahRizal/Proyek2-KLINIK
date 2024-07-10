<x-guest-layout>
<body>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('covido') }}/assets/images/carousel.jpg)">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('covido') }}/assets/images/logoSendiri.png" alt="#" width="300"/>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Masuk</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    {{-- <label class="label" for="name">Nama</label>
                                    <input type="text" class="form-control" placeholder="Username" required> --}}
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                                        autofocus autocomplete="username"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group mb-3">
                                    {{-- <label class="label" for="password">Sandi</label>
                                    <input type="password" class="form-control" placeholder="Password" required> --}}
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                        autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    {{-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button> --}}
                                    <x-primary-button>
                                        {{ __('Log in') }}
                                    </x-primary-button> 
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">{{ __('Remember me') }}
                                            {{-- <input type="checkbox" id="remember_me" name="remember">
                                            <span class="checkmark">{{ __('Remember me') }}</span> --}}
                                            <input id="remember_me" type="checkbox" class="rounded" name="remember">
                                            <span class="checkmark "></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                        <a class=""
                                            href="{{ route('password.request') }}">
                                            {{ __('Lupa password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="/register">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</x-guest-layout>
