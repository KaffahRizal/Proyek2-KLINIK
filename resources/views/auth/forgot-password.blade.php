<x-guest-layout>
    <body>

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
                                        <h3 class="mb-4">Lupa Password</h3>
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
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form action="{{ route('password.email') }}" class="signin-form" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-group">
                                        {{-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button> --}}
                                        <x-primary-button>
                                            {{ __('Reset Password') }}
                                        </x-primary-button> 
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