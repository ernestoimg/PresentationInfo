@extends('Layout.layout')

@section('content')

<!-- ***** Header Area Start ***** -->

<!-- ***** Header Area End ***** -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h2>Detalles del proyecto</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 section-headline text-center mt-4">
        <h2 id="ProjectAlias" style="font-size:6vw;"></h2>
    </div>

</div>

<main id="main" class="mt-5">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="ProjectImageContainer">

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <h4 id="ProjectDescription"></h4>
                            </strong>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><strong>Tipo de Proyecto</strong>: <span id="ProjectType"></span></li>
                                <li><strong>Compañia</strong>: <span id="ProjectCompany"></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert alert-primary mt-3" role="alert">
                        <h2>Descripción</h2>
                        <hr>
                        <p id="ProjectDetail"></p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8 mt-2">
                            <ol id="ListTecnology">
                            </ol>
                        </div>
                        <div class="col-lg-4" id="ProjectReviewContainer">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->

<template id="TemplateToolItem">
    <li>
        <p>
        <div class="row">
            <div class="col-md-2 mr-2">
                <a data-bs-toggle="collapse" href="#collapseExample_!token" role="button" aria-expanded="false" aria-controls="collapseExample_!token">
                    <img src="" id="ProjectIconTool_!token" style="height: 100%;width: 100px; display:inline;">
                </a>
            </div>
            <div class="col-md-10 d-flex align-items-end">
                <a data-bs-toggle="collapse" href="#collapseExample_!token" role="button" aria-expanded="false" aria-controls="collapseExample_!token">
                    <h2 id="ProjectToolName_!token" style="color:darkgrey;"></h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <span><i class="fa fa-calendar-o fa-2x m-3" aria-hidden="true"></i><b id="UseTimeInMonths_!token"></b></span>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-end">
                <b class="m-3">Nivel de uso:</b>
                <div id="RatingUse_!token"></div>
            </div>
        </div>
        </p>
        <div class="collapse" id="collapseExample_!token">
            <div class="card card-body" id="DetailOfUse_!token">
            </div>
        </div>
    </li>
</template>

<template id="TemplateProjectPreview">
    <div class="alert alert-light mt-3" role="alert">
        <h2>Proyecto:</h2>
        <hr>
        <p>
            <span><i class="fa fa-github fa-3x" aria-hidden="true"></i></span>&nbsp;&nbsp;
            <span style="font-size:1.5vw;word-wrap: break-word;"><a id="ProjectUrlGit_!token" class="ProjectUrlGit" href="javascript:void(0)" target="_blank">Consultar en GIT.</a></span>
        </p>
        <br>
        <p>
            <span><i class="fa fa-chrome fa-3x" aria-hidden="true"></i></span>&nbsp;
            <span style="font-size:1.5vw;word-wrap: break-word;"><a id="ProjectUrl_!token" class="ProjectUrl" href="javascript:void(0)" target="_blank">Consultar en Web.</a></span>
        </p>
    </div>
</template>

<template id="TemplateCarouselImages">
    <div class="carousel-item" id="carouselItem_!token">
        <img id="image_!token" src="" alt="">
    </div>
</template>
@stop

@section('scripts')
<script src="{{asset('js/Site/listing-0.0.js')}}"></script>
@stop