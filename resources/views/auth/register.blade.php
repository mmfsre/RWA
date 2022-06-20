@extends('layouts.app_absolute_footer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registruj se!') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="fw-bold col-md-4 col-form-label text-md-end">{{ __('Korisničko Ime') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="fst-italic form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Korisnik">

                                    @error('name')
                                        <span class="invalid-feedback fst-italic fw-bold" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="fw-bold col-md-4 col-form-label text-md-end">{{ __('Email Adresa') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="fst-italic form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="mail@example.com">

                                    @error('email')
                                        <span class="invalid-feedback fst-italic fw-bold" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="fw-bold col-md-4 col-form-label text-md-end">{{ __('Lozinka') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="fst-italic form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="********">

                                    @error('password')
                                        <span class="invalid-feedback fst-italic fw-bold" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="fw-bold col-md-4 col-form-label text-md-end">{{ __('Potvrdite Lozinku') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="********">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="fw-bolder border-1 btn btn-primary">
                                        {{ __('Registracija') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
