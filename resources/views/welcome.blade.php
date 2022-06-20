@extends('layouts.app_absolute_footer')

@section('content')
    {{-- Početna stranica - slika --}}
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Učite lakše uz Student share.</h1>
                    {{-- <a href="/login" class="btn-get-started scrollto">Kreni</a> --}}
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        {{-- Opis rada aplikacije --}}
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Svi materijali na jednom mjestu</h3>
                            <a href="https://drive.google.com/file/d/1wTPE4yHXzlRNRn48xNcxvCoTLvxfVhJa/view" target="_blank"
                                class="about-btn"><span>Vizija</span> <i class="bx bx-chevron-right"></i></a><br><br>
                            <a href="{{ url('storage1/usecase.jpeg') }}" target="_blank" class="about-btn">
                                <span>Use case diagram</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Tko smo mi?</h4>
                                    <p>Skupina mladih ljudi koji žele pomoći jedni drugima u akademskom uspjehu.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Naš cilj?</h4>
                                    <p>Olakšano polaganje i spremanje ispita.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>Tko ima pristup materijalima?</h4>
                                    <p>Svi studenti Fakulteta strojarstva, računarstva i elektrotehnike.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>Otkud nam materijali?</h4>
                                    <p>Materijali se prikupljaju kroz godine zajedno s drugim studentima i profesorima.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Upiti od Korisnika --}}
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

        {{-- Zadovoljnih Korsnika --}}
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="298" data-purecounter-duration="1"
                                class="purecounter">298</span>
                            <p>Zadovoljnih studenata</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="581" data-purecounter-duration="1"
                                class="purecounter">581</span>
                            <p>Stranica materijala</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1823" data-purecounter-duration="1"
                                class="purecounter">1823</span>
                            <p>Sati učenja</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter">2</span>
                            <p>Ljudi zaduženih za ovaj projekt</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Koko nas kontaktirati... --}}
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
@endsection
