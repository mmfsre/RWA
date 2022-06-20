@extends('layouts.app_absolute_footer')

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

            @can('create', App\Models\Material::class)
                <!-- GUMB ZA KREIRANJE -->
                <div class="row">
                    <div class="col-lg-3 d-inline align-items-start justify-content-evenly mt-2">
                        <a href="materials/create">
                            <button class="btn btn-danger fw-bold">NOVI KOLEGIJ</button>
                        </a>
                    </div>
                    <div class="col-lg-8 d-inline align-items-start justify-content-evenly mt-2 ms-3">
                        @if (session()->has('message'))
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                            </svg>
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="50" height="18" role="img"
                                    aria-label="Success:">
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                <div class="fst-italic fw-bold">
                                    {{ session()->get('message') }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endcan



            <div class="row mt-5 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <!-- Info-obavijest ukoliko nema kreiranih kolegija -->
                @if ($counter == 0)
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div class="fst-italic fw-bold">
                            Trenutno nema pronađenih kolegija! Kreirajte ih...(ukoliko imate te mogućnosti)
                        </div>
                    </div>
                @endif

                @foreach ($materials as $material)
                    <!-- 1. GODINA - Filter -->
                    @if ($material->year == 1)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('images/' . $material->image_path) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <div class="btn-toolbar" aria-label="buttons">
                                        <!-- GUMB ZA UREĐIVANJE -->
                                        @can('update', $material)
                                            <a class="text-center" href="materials/{{ $material->id }}/edit">
                                                <button class="btn btn-sm btn-outline-light">UREDI</button>
                                            </a>
                                        @endcan
                                        <!-- GUMB ZA BRISANJE -->
                                        @can('delete', $material)
                                            <form class="ms-2 text-center" action="/materials/{{ $material->id }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button typle="submit" class="btn btn-sm btn-outline-light">OBRIŠI</button>
                                            </form>
                                        @endcan
                                        <!-- GUMB ZA VIŠE -->
                                        @can('view', $material)
                                            <a href="materials/{{ $material->id }}">
                                                <button class="btn btn-sm btn-outline-light ms-2 text-center">VIŠE</button>
                                            </a>
                                        @endcan
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
                    @endif
                    <!-- 2. GODINA - Filter -->
                    @if ($material->year == 2)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('images/' . $material->image_path) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <!-- GUMB ZA UREĐIVANJE -->
                                    <div class="btn-toolbar" aria-label="buttons">
                                        @can('update', $material)
                                            <a class="text-center" href="materials/{{ $material->id }}/edit">
                                                <button class="btn btn-sm btn-outline-light">UREDI</button>
                                            </a>
                                        @endcan
                                        <!-- GUMB ZA BRISANJE -->
                                        @can('delete', $material)
                                            <form class="ms-2 text-center" action="/materials/{{ $material->id }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button typle="submit" class="btn btn-sm btn-outline-light">OBRIŠI</button>
                                            </form>
                                        @endcan
                                        <!-- GUMB ZA VIŠE -->
                                        @can('view', $material)
                                            <a href="materials/{{ $material->id }}">
                                                <button class="btn btn-sm btn-outline-light ms-2 text-center">VIŠE</button>
                                            </a>
                                        @endcan
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
                    @endif
                    <!-- 3. GODINA - Filter -->
                    @if ($material->year == 3)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('images/' . $material->image_path) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <!-- GUMB ZA UREĐIVANJE -->
                                    <div class="btn-toolbar" aria-label="buttons">
                                        @can('update', $material)
                                            <a class="text-center" href="materials/{{ $material->id }}/edit">
                                                <button class="btn btn-sm btn-outline-light">UREDI</button>
                                            </a>
                                        @endcan
                                        <!-- GUMB ZA BRISANJE -->
                                        @can('delete', $material)
                                            <form class="ms-2 text-center" action="/materials/{{ $material->id }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button typle="submit" class="btn btn-sm btn-outline-light">OBRIŠI</button>
                                            </form>
                                        @endcan
                                        <!-- GUMB ZA VIŠE -->
                                        @can('view', $material)
                                            <a href="materials/{{ $material->id }}">
                                                <button class="btn btn-sm btn-outline-light ms-2 text-center">VIŠE</button>
                                            </a>
                                        @endcan
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
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
