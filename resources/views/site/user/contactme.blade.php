@extends('Layout.layout')

@section('content')
<div class="page-heading-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top-text header-text">
                    <h2>Información de contacto</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-10 m-5">
                <div>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <h3><b>¡Comunicate conmigo!</b></h3>
                        </blockquote>
                    </figure>
                </div>
                <div class="card p-lg-5 p-md-2 p-sm-2 p-xs-2">
                    <form id="ContactMeForm" novalidate autocomplete="nope">
                        <div class="form-group mb-2">
                            <div class="form-check">
                                <label for="EmailCommentControl">Correo electrónico de contacto:</label>
                                <input type="email" id="EmailCommentControl" class="form-control" id="" aria-describedby="emailHelp" placeholder="Ingresa correo electrónico." autocomplete="nope" required>
                                <div class="invalid-feedback">
                                    <script>
                                        document.write(ConfigurationModule.Messages.required);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="form-check">
                                <label for="IssueCommentControl">Asunto:</label>
                                <input type="text" id="IssueCommentControl" class="form-control" id="" placeholder="Ingresa asunto." required>
                                <div class="invalid-feedback">
                                    <script>
                                        document.write(ConfigurationModule.Messages.required);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="form-check">
                                <label for="MessageCommentControl">Mensaje:</label>
                                <textarea class="form-control" id="MessageCommentControl" style="resize:none" placeholder="Escriba sus comentarios." rows="10" required></textarea>
                                <div class="invalid-feedback">
                                    <script>
                                        document.write(ConfigurationModule.Messages.required);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-dark" id="SaveComment">Enviar información</button>
                        </div>
                    </form>
                    <div class="mt-3" id="AlertContainer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<template id="TemplateAlert">
    <div class="alert !class_type alert-dismissible fade show" role="alert">

        <i class="fa !class_icon" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>
            <!--Message-->
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</template>
@stop

@section('scripts')
<script src="{{asset('/js/Site/contactme-0.0.js')}}"></script>
@stop