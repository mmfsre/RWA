@extends('layouts.app_absolute_footer')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $material->name }}</h2>
            </div>

            <div class="col-lg-1 align-items-start justify-content-evenly mt-2 mb-2">
                <a href="/materials">
                    <button class="btn btn-back fw-bold">&#8617; Nazad</button>
                </a>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('images/' . $material->image_path) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <!-- GUMB ZA UREĐIVANJE -->
                            <div class="btn-toolbar" aria-label="buttons">
                                <a class="text-center" href="{{ $material->id }}/edit">
                                    <button class="btn btn-sm btn-outline-light">UREDI</button>
                                </a>
                                <!-- GUMB ZA BRISANJE -->
                                <form class="ms-2 text-center" action="/materials/{{ $material->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button typle="submit" class="btn btn-sm btn-outline-light">OBRIŠI</button>
                                </form>
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
            </div>
            <div class="container">
                <div class="row text-start">
                    <h5>OBAVIJESTI</h5>
                </div>
                @if ($material->description != '')
                    <div class="row text-start mt-4 p-3 jumbo text-white rounded fw-bold fst-italic">
                        <p id="notices">{{ $material->description }}</p>
                    </div>
                    @if ($material->created_at != '')
                        <div class="row text-end mt-5 fst-italic">
                            <h6>Postavljeno: {{ $material->created_at->format('d.m.Y. - H:m:s') }}</h6>
                        </div>
                    @endif
                    @if ($material->updated_at != '')
                        <div class="row text-end mt-1 fst-italic">
                            <h6>Uređeno: {{ $material->updated_at->format('d.m.Y. - H:m:s') }}</h6>
                        </div>
                    @endif
                @else
                    <div class="row text-start mt-4 p-3 jumbo text-white rounded">
                        <p class="fst-italic" id="notices">(Nema Obavijesti)</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
