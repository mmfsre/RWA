@extends('layouts.app_absolute_footer')

@section('content')
    <section class="team section-bg">
        <div class="section-title">
            <h2>Tim</h2>
        </div>
        <!-- Slike -->
        <div class="container mb-2" data-aos="fade-up">
            <div class="row mt-1">
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                    <div class="member col-sm-6 col-md-5 col-xs-6 col-lg-3 jump d-flex me-3">
                        <div class="member-img card m-2" style="height: 550px">
                            <img class="d-block" src="storage1/team/mihaela.jpeg" alt="dog1" class="card-img-top"
                                style="height: 429px">
                            <div class="social">
                                <a href="https://github.com/mmfsre/RWA" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="member-info p-4">
                                <h5 class="card-title fw-bold" style="color: hsl(0, 0%, 28%)">Mihaela Martić</h5>
                                <p class="card-text">
                                    Frontend
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="member col-sm-6 col-md-5 col-xs-6 col-lg-3 jump d-flex ms-3">
                        <div class="member-img card m-2" style="height: 550px">
                            <img src="storage1/team/dario.jpeg" alt="dog1" class="card-img-top" style="height: 429px">
                            <div class="social">
                                <a href="https://github.com/mmfsre/RWA" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="member-info p-4">
                                <h5 class="card-title fw-bold" style="color: hsl(0, 0%, 28%)">Dario Klarić</h5>
                                <p class="card-text">
                                    Backend
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
