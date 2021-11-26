@extends('Layout.layout')

@section('content')
<style>

</style>
<div class="page-heading-cv">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h2>Curriculum Vitae</h2>
                    <div style="text-align: center;">
                        <a class="DownloadButton verde" download="ErnestoIvanMartinezGarcia" href="#"><br><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class='flotante' href='{{route("home")}}'><img src='images/search-icon-00.png' style="border:0;" /></a>
<div>

</div>

<aside class="d-flex justify-content-center">
    <img src="{{asset('/images/CVPage1.jpg')}}" style="width: 80%; margin-top:5rem;" />
</aside>

<aside class="d-flex justify-content-center">
    <img src="{{asset('/images/CVPage2.jpg')}}" style="width: 80%; margin-top:5rem;" />
</aside>


@stop

@section('scripts')
    <script src="{{asset('/js/Site/cv-0.0.js')}}"></script>

@stop