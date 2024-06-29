<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')

</head>

<body style="background-color: hsl(0, 0%, 96%) !important">
    {{-- @include('layouts.Front.header') --}}

    <!-- Section: Design Block -->
    <section class="vh-100 mt-5" style="background-color: hsl(0, 0%, 96%) !important">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Register Now! <br />
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
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->

                                    <div class="col-md-12 mb-4">
                                        <x-input-label for="name" class="form-label" :value="__('Name')" />
                                        <x-text-input id="name" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-outline mb-4">
                                        <x-input-label for="email" class="form-label" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type=" email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-outline mb-4">
                                        <x-input-label for="password" class="form-label" :value="__('Password')" />
                                        <x-text-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-outline mb-4">
                                        <x-input-label for="password_confirmation" class="form-label"
                                            :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" class="form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-flex align-items-center justify-center mt-4">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary mb-4">
                                            Sign up
                                        </button>
                                    </div>
                                    <a class="underline text-sm text-center"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </form>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-facebook"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-google"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-twitter"></i>
                                    </button>

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-github"></i>
                                    </button>
                                </div>
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