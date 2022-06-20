@extends('layouts.app_absolute_footer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-3">
                    <div class="card-header">{{ __('Prijavi se!') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 fw-bold col-form-label text-md-end">{{ __('Email Adresa') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="fst-italic form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="mail@example.com">

                                    @error('email')
                                        <span class="invalid-feedback fst-italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 fw-bold col-form-label text-md-end">{{ __('Lozinka') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="********"
                                        class="fst-italic form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback fst-italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class=" form-check-label" for="remember">
                                            {{ __('Zapamti Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn fw-bolder border-1 btn-primary">
                                        {{ __('Prijava') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="fst-italic btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Zaboravili ste Lozinku?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
