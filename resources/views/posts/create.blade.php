@extends('layouts.app')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dodaj Novi Kolegij</h2>
            </div>

            <!-- Izbacivanje POGREŠKE na vrhu -->
            {{-- @if ($errors->any())
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger fst-italic fw-bold text-center" type="none">
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                </div>
            @endif --}}

            <div class="card-body">
                <form action="/materials" class="form-control border-1" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3 py-2 px-2 mt-5">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="name_subject">Naziv
                            kolegija:</label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name_subject"
                                class="form-control fs-6 border-2 fst-italic @error('name') is-invalid @enderror"
                                placeholder="Kolegij" />
                            @error('name')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="name_lecturer">Nositelj
                            kolegija:</label>
                        <div class="col-md-7">
                            <input type="text" name="lecturer" id="name_lecturer"
                                class="form-control fs-6 border-2 fst-italic @error('lecturer') is-invalid @enderror"
                                placeholder="Profesor" />
                            @error('lecturer')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="year_select">Godina
                            studija:</label>
                        <div class="col-md-7">
                            <select name="year"
                                class="form-control border-2 fst-italic form-select @error('year') is-invalid @enderror"
                                aria-label="year_select">
                                <option class="fst-italic" selected>Odaberite</option>
                                <option class="fst-normal" value="1">1</option>
                                <option class="fst-normal" value="2">2</option>
                                <option class="fst-normal" value="3">3</option>
                            </select>
                            @error('year')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="image">Postavite sliku:</label>
                        <div class="col-md-7">
                            <input type="file" name="image_path" id="image"
                                class="form-control fs-6 border-2 fst-italic @error('image_path') is-invalid @enderror" />
                            @error('image_path')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="drive">Link na disk:</label>
                        <div class="col-md-7">
                            <input type="url" name="drive_link" id="drive"
                                class="form-control fs-6 border-2 fst-italic @error('drive_link') is-invalid @enderror"
                                placeholder="https://example.com" />
                            @error('drive_link')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="description">Obavijesti:</label>
                        <div class="col-md-7">
                            <textarea name="description" class="form-control fs-6 border-2 fst-italic @error('description') is-invalid @enderror"
                                id="description" rows="6" placeholder="Komentari..."></textarea>
                        </div>
                    </div>

                    <div class="col-md-7 offset-md-3">
                        <button type="submit"
                            class="form-control fs-6 border-1 fw-bold btn-success mt-4 mb-5">POTVRDI</button>
                    </div>
                </form>
            </div>
    </section>
@endsection
