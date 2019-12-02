@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('hab-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row mb-5">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Detalle de<strong> HABILIDAD</strong></h3>
                        <th scope="row">
                            <div class="text-center">
                                <div class=" icon-shape">
                                    <i style="font-size: 2.5rem" class=" text-yellow fas fa-star"></i>
                                    <i style="font-size: 2.5rem" class="text-yellow fas fa-star "></i>
                                    <i style="font-size: 2.5rem" class="text-yellow fas fa-star"></i>
                                </div>
                            </div>
                        </th>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-center">
                                    <span class="h2 font-weight-bold mb-0">  Descripción </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">DESCRIPCION.</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0">  Detalles de Habilidad </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Habilidad Anterior</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">DESCRIPCION.</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Dificultad</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">DESCRIPCION.</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="h4">Disciplina</span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-md text-left">
                                    <span class="text-gray-dark">DESCRIPCION.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Video </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                    <video width="100%" height="auto" preload="auto" controls loop muted autoplay>
                                        <source src="{{asset('../public/img/DSC.mp4')}}" type="video/mp4">
                                    </video>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0"> Mis notas</h3>
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0 text-muted text-md text-center">
                                    <span class="text-gray-dark">DESCRIPCION.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col">
                                <p class="mt-3 mb-0  text-sm text-left">
                                    <span class="h2 font-weight-bold mb-0"> Fotos </span>
                                </p>
                                <p class="mt-3 mb-0 text-muted text-sm text-center">
                                <div class="carousel">
                                    <button class="carousel__button carousel__button--left">
                                        <img src="{{asset('../public/img/back.svg')}}" alt="">
                                    </button>
                                    <div class="carousel__track-container">
                                        <ul class="carousel__track">
                                            <li class="carousel__slide">
                                                <img class="carousel__image" src="{{asset('../public/img/testimonial/LaRosalia.jpg')}}" alt="costos">
                                            </li>
                                            <li class="carousel__slide">
                                                <img class="carousel__image" src="{{asset('../public/img/testimonial/KasiaBielecka.jpg')}}" alt="costos">
                                            </li>
                                            <li class="carousel__slide">
                                                <img class="carousel__image" src="{{asset('../public/img/testimonial/JenniferLopez.png')}}" alt="costos">
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="carousel__button  carousel__button--right">
                                        <img src="{{asset('../public/img/next.svg')}}" alt="">
                                    </button>
                                    <div class="carousel__nav">
                                        <button class="carousel__indicator current-slide"></button>
                                        <button class="carousel__indicator"></button>
                                        <button class="carousel__indicator"></button>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
