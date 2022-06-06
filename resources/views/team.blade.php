@extends('layouts.app')

@section('content')
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
@endsection
