@extends('layouts.app')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Uredi Kolegij</h2>
            </div>

            <!-- Izbacivanje POGREŠKE na vrhu -->
            {{-- @if ($errors->any())
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($errors->all() as $error)
                            <li type="none" class="alert alert-danger fst-italic fw-bold text-center">
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                </div>
            @endif --}}

            <div class="card-body">
                <form action="/materials/{{ $material->id }}" class="form-control border-1" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 py-2 px-2 mt-5">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="name_subject">Naziv kolegija:</label>
                        <div class="col-md-7">
                            <input type="text" name="name" id="name_subject"
                                class="form-control border-2 fs-62 fst-italic @error('name') is-invalid @enderror"
                                placeholder="Kolegij" value="{{ $material->name }}" />
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
                                class="form-control border-2 fs-6 2 fst-italic @error('lecturer') is-invalid @enderror"
                                placeholder="Profesor" value="{{ $material->lecturer }}" />
                            @error('lecturer')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="year_select">Godina studija:</label>
                        <div class="col-md-7">
                            <select name="year"
                                class="form-control border-2 form-select @error('year') is-invalid @enderror"
                                aria-label="year_select">
                                <option selected>{{ $material->year }}</option>
                                @if ($material->year != 1)
                                    <option>1</option>
                                @endif
                                @if ($material->year != 2)
                                    <option>2</option>
                                @endif
                                @if ($material->year != 3)
                                    <option>3</option>
                                @endif
                            </select>
                            @error('year')
                                <div class="invalid-feedback fst-italic fw-bold">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Dio za mijenjanje slike - NEPOTREBNO -->
                    {{-- <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="image">Promijenite sliku:</label>
                        <div class="col-md-7">
                            <input type="file" name="image_path" id="image"
                                class="img-preview form-control border-2 fs-6 fst-italic" />
                            <img src="{{ asset('images/' . $material->image_path) }}"
                                class="img-fluid rounded mx-auto my-2" alt="" style="width: 25%">
                        </div>
                    </div> --}}

                    <div class="row mb-3 py-2 px-2">
                        <label class="col-md-3 col-form-label text-md-end fw-bold" for="drive">Link na disk:</label>
                        <div class="col-md-7">
                            <input type="url" name="drive_link" id="drive"
                                class="form-control border-2 fs-6 2 fst-italic @error('drive_link') is-invalid @enderror"
                                value="{{ $material->drive_link }}" placeholder="https://example.com" />
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
                            <textarea name="description" class="form-control border-2 fs-6 2 fst-italic @error('description') is-invalid @enderror"
                                placeholder="Komentari..." id="description" rows="6">{{ $material->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-7 offset-md-3">
                        <button type="submit"
                            class="form-control border-1 fw-bold fs-6 btn-success mt-4 mb-5">POTVRDI</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
