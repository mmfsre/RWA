@extends('layouts.app')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Materijali</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Sve</li>
                        <li data-filter=".filter-app">1. godina</li>
                        <li data-filter=".filter-card">2. godina</li>
                        <li data-filter=".filter-web">3. godina</li>
                    </ul>
                </div>
            </div>

            <!-- GUMB ZA KREIRANJE -->
            <div class="row">
                <div class=" col-lg-3 d-block align-items-start justify-content-evenly mt-2 mb-5">
                    <a href="materials/create">
                        <button class="btn btn-danger fw-bold">NOVI KOLEGIJ</button>
                    </a>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($materials as $material)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/' . $material->image_path) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- GUMB ZA UREĐIVANJE -->
                                <div class="btn-toolbar" aria-label="buttons">
                                    <a class="text-center" href="materials/{{ $material->id }}/edit">
                                        <button class="btn btn-sm btn-outline-light">UREDI</button>
                                    </a>
                                    <!-- GUMB ZA BRISANJE -->
                                    <form class="ms-2 text-center" action="/materials/{{ $material->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button typle="submit" class="btn btn-sm btn-outline-light">OBRIŠI</button>
                                    </form>
                                    <a href="materials/{{ $material->id }}">
                                        <button class="btn btn-sm btn-outline-light ms-2 text-center">VIŠE</button>
                                    </a>
                                </div>

                                <h4>{{ $material->name }}</h4>
                                <p>{{ $material->lecturer }}</p>
                                <p>{{ $material->year . '. godina' }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ $material->drive_link }}" target="_blank" title="Materijali"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
