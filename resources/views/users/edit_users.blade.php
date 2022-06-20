@extends('layouts.app_absolute_footer')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Uredi Podatke Korisnika</h2>
            </div>

            <div class="card-body">
                <div class="col-lg-1 align-items-start justify-content-evenly mt-2 mb-2">
                    <a href="/users">
                        <button class="btn btn-back fw-bold">&#8617; Nazad</button>
                    </a>
                </div>

                <form action="/users/{{ $user->id }}" class="form-control border-1" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-2 py-2 px-2 mt-5">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="password">Korisničko Ime:</label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name"
                                class="form-control border-2 fs-6 fst-italic @error('name') is-invalid @enderror"
                                placeholder="Korisnik" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="email">E-mail:</label>
                        <div class="col-md-7">
                            <input type="email" name="email" id="email"
                                class="form-control border-2 fs-6 fst-italic @error('email') is-invalid @enderror"
                                placeholder="mail@example.com" value="{{ $user->email }}" />
                            @error('email')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-5 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="role_id">Tip Korisnika:</label>
                        <div class="col-md-7">
                            <select name="role_id" id="role_id" aria-label="role_id"
                                class="form-control border-2 fst-italic form-select @error('role_id') is-invalid @enderror">
                                @if ($user->role_id == null)
                                    <option class="fst-italic" selected>Odaberite</option>
                                @endif
                                @foreach ($roles as $role)
                                    <option class="fst-normal" value="{{ $role->id }}"
                                        {{ $role->id == $user->role_id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                                @error('role_id')
                                    <div class="invalid-feedback fst-italic fw-bold">
                                        {{ $message = 'The role id field is required.' }}
                                    </div>
                                @enderror
                            </select>
                        </div>
                    </div>

                    <div class="col-md-7 offset-md-3">
                        <button type="submit"
                            class="form-control border-1 fw-bold fs-6 btn-primary mt-4 mb-5">POTVRDI</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
