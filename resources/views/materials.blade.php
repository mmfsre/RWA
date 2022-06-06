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

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Matematika 1</h4>
                            <p>S.Braić</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank" title="Materijali"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Razvoj web aplikacija</h4>
                            <p>T.Volarić</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Fizika 1</h4>
                            <p>Z.Primorac</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Signali i sustavi</h4>
                            <p>B.Tomas</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Programiranje u Javi</h4>
                            <p>T.Volarić</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Elektronika</h4>
                            <p>T.Betti</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Baze podataka</h4>
                            <p>G.Kraljević</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Strukture podataka</h4>
                            <p>K.Fertalj</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ url('storage/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Računalne mreže</h4>
                            <p>D.Žagar</p>
                            <div class="portfolio-links">
                                <a href="https://drive.google.com/drive/u/2/folders/1cBPLfxZyzj01hZ8Or_LkHVVoM10yM5vX"
                                    target="_blank"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
