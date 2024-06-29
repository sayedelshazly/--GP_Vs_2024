<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body style="background-color: hsl(0, 0%, 96%) !important">
    {{-- @include('layouts.Front.header') --}}
    <br>
    <section class="mt-5" style="background-color: hsl(0, 0%, 96%) !important">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container">

                <div class="row gx-lg-5 align-items-center">
                    
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            login Now! <br />
                            <span class="text-primary">and study with us.</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <a href="{{route('register')}}" class="text-primary underline text-sm text-center mt-4"><i class="fs-4 bi bi-person-add"></i> New Account!</a>
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email Address -->
                                    <div class="form-outline mb-4">
                                        <x-input-label for="email" class="form-label" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" class="form-label" :value="__('Password')" />

                                        <x-text-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <br>
                                    <!-- Remember Me -->
                                    <div class="form-check d-flex justify-content-start mb-4">
                                        <label for="remember_me" class="form-check-label">
                                            <input id="remember_me" type="checkbox"
                                                class="form-check-input me-2"
                                                name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        @endif
                            
                                    </div>
                                    <x-primary-button class="btn btn-primary btn-block mb-4 mt-4">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                    </form>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>

</html>