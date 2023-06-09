@extends('Layouts.main', ['isPulau' => true])
@section('title', 'Jelajah Nusantara')

@section('content')
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
        type="button"></button> 
            <button aria-label="Slide 2" data-bs-slide-to="1"
                    data-bs-target="#carouselExampleIndicators" type="button"></button> 
            <button aria-label="Slide 3" data-bs-slide-to="2" 
                    data-bs-target="#carouselExampleIndicators" type="button"></button>
            <button aria-label="Slide 4" data-bs-slide-to="3" 
                    data-bs-target="#carouselExampleIndicators" type="button"></button>
            <button aria-label="Slide 5" data-bs-slide-to="4" 
                    data-bs-target="#carouselExampleIndicators" type="button"></button>
            <button aria-label="Slide 6" data-bs-slide-to="5" 
                    data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-1.jpg') }}">
                <div class="carousel-caption">
                    <h5>Your Dream House</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-2.jpg') }}">
                <div class="carousel-caption">
                    <h5>Always Dedicated</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-3.jpg') }}">
                <div class="carousel-caption">
                    <h5>True Construction</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-1.jpg') }}">
                <div class="carousel-caption">
                    <h5>True Construction</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-2.jpg') }}">
                <div class="carousel-caption">
                    <h5>True Construction</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-3.jpg') }}">
                <div class="carousel-caption">
                    <h5>True Construction</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                        quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span
                class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- services section Starts -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Keunggulan Kami</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Mudah Dipahami dan Diakses</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-journal"></i>
                            <h3 class="card-title mb-4">Tim Profesional</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-intersect"></i>
                            <h3 class="card-title mb-4">Ramah untuk Anak Kecil</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- services section Ends -->
    <!-- portfolio strats -->
    <section class="portfolio section-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Top Pulau</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project-1.jpg">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Learn
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project-2.jpg">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">learn
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project-3.jpg">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Learn
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-1">
                </div>
                <div class="col-12 col-md-12 mt-5 ms-5 col-lg-3">
                    <button class="btn bg-warning text-dark">See All Contents</button>
                </div>
            </div>
        </div>
    </section><!-- portfolio ends -->
@endsection

@section('scripts')

@endsection
