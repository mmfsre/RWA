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



    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Često postavljana pitanja</h2>
            </div>

            <ul class="faq-list accordion" data-aos="fade-up">

                <li>
                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Tko postavlja
                        materijale?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Materijale postavljaju predstavnici godine.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Mogu li ja postaviti
                        materijale?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Naravno, potrebno je samo kontaktirati predstavnika da pregleda materijale i poslati ih
                            na naš kontakt e-mail.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>


    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tim</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ url('storage/team/mihaela.jpeg') }}" class="img-fluid" alt="Mihaela">
                            <div class="social">
                                <a href="https://github.com/mmfsre/RWA" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                        <p class="member-info">
                        <h4>Mihaela Martić</h4>
                        <span>Frontend</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ url('storage/team/dario.jpeg') }}" class="img-fluid" alt="Dario">
                            <div class="social">
                                <a href="https://github.com/mmfsre/RWA" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Dario Klarić</h4>
                            <span>Backend</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontakt</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Naša adresa</h3>
                                <p>Matice hrvatske b.b, Mostar 88000</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p>rwaprojekt@gmail.com<br>Kontakt@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Poziv</h3>
                                <p>+387 63 000 000<br>+387 63 000 000</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>
    </main>

    {{-- Dugme za vraćanje na vrh --}}
    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> --}}
    {{-- </div>
            </div>
        </div>
    </div> --}}
@endsection
