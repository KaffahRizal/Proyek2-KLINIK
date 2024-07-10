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
                                        <h3 class="mb-4">Daftar</h3>
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
                                <form action="{{ route('register') }}" class="signin-form" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                                            autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                            required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                            autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <div class="form-group">
                                        <x-primary-button>
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>
                                    <div class="form-group d-md-flex justify-content-center">
                                        <a class="text-sm hover:text-gray-900"
                                            href="{{ route('login') }}" data-toggle="tab">
                                            {{ __('Sudah Punya Akun?') }}
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </body>
    </x-guest-layout>
