@extends('layouts.app_absolute_footer')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Izmijeni Lozinku</h2>
            </div>

            <div class="card-body">
                <div class="col-lg-1 align-items-start justify-content-evenly mt-2 mb-2">
                    <a href="/users">
                        <button class="btn btn-danger fw-bold">&#8617; Nazad</button>
                    </a>
                </div>

                <form action="/users/{{ $user->id }}/password" class="form-control border-1" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="row mb-2 py-2 px-2 mt-5">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password">Nova Lozinka:</label>
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

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password_confirmation">Potvrdite
                            lozinku:</label>
                        <div class="col-md-7">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control border-2 fs-6 fst-italic @error('password_confirmation') is-invalid @enderror"
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
