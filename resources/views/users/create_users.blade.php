@extends('layouts.app_absolute_footer')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dodaj Novog Korisnika</h2>
            </div>

            <div class="card-body">
                <div class="col-lg-1 align-items-start justify-content-evenly mt-2 mb-2">
                    <a href="/users">
                        <button class="btn btn-back fw-bold">&#8617; Nazad</button>
                    </a>
                </div>

                <form action="/users" class="form-control border-1" method="POST">
                    @csrf
                    <div class="row mb-2 py-2 px-2 mt-5">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password">Korisničko Ime:</label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name"
                                class="form-control border-2 fs-6 fst-italic @error('name') is-invalid @enderror"
                                placeholder="Korisnik">
                            @error('name')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="email">E-mail:</label>
                        <div class="col-md-7">
                            <input type="email" name="email" id="email"
                                class="form-control border-2 fs-6 fst-italic @error('email') is-invalid @enderror"
                                placeholder="mail@example.com" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="role_id_select">Tip
                            Korisnika:</label>
                        <div class="col-md-7">
                            <select name="role_id" aria-label="role_id_select"
                                class="form-control border-2 fst-italic form-select @error('role_id') is-invalid @enderror">
                                <option class="fst-italic" selected>Odaberite</option>
                                @foreach ($roles as $role)
                                    <option class="fst-normal" value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message = 'The role id field is required.' }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password">Lozinka:</label>
                        <div class="col-md-7">
                            <input type="password" name="password" id="password"
                                class="form-control border-2 fs-6 fst-italic @error('password') is-invalid @enderror"
                                placeholder="********" />
                            @error('password')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-5 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password_confirmation">Potvrdite
                            lozinku:</label>
                        <div class="col-md-7">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control border-2 fs-6fst-italic @error('password_confirmation') is-invalid @enderror"
                                placeholder="********" />
                            @error('password_confirmation')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-7 offset-md-3 mt-5">
                        <button type="submit"
                            class="form-control border-1 fw-bold fs-6 btn-primary mt-4 mb-5">POTVRDI</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
