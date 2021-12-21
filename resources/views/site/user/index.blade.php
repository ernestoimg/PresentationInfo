@extends('Layout.layout')

@section('content')

<div class="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row d-flex justify-content-center">
          <img id="image-profile" src="images/ProfileImage.png" class="img-fluid" alt="" />
        </div>
        <div class="top-text header-text">
          <h6 id="ProfessionTitle" style="text-shadow: 0 0 10px #191a20;"></h6>
          <h2 id="FullNameTitle" style="text-shadow: 0 0 10px #191a20;"></h2>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <ul class="categories">
          <div class="">
            <div id="ContainerHobbies" class="d-flex justify-content-center row">
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="popular-categories">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Proyectos</h2>
          <h6>«Establecer una meta es el punto de partida de todo logro». – W. Clement Stone.</h6>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="naccs">
          <div class="grid">
            <div class="row">
              <div class="col-lg-3">
                <div class="menu" id="MenuProjectContainer">
                </div>
              </div>
              <div class="col-lg-9 align-self-center">
                <ul class="nacc" id="DetailProjectContainer">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="recent-listing" style="margin-top: 0px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Formación Profesional</h2>
          <h6>Cursos y adiestramientos</h6>
        </div>
      </div>
      <div class="col-lg-12" id="MainCarousel">
      </div>
    </div>
  </div>
</div>

<div class="recent-listing" style="margin-top: 0px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Experiencia Laboral</h2>
          <h6>Cursos y adiestramientos</h6>
        </div>
      </div>
      <div class="col-lg-12 item">
        <div id="carousel-content" class="owl-carousel">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="chatbox chatbox--tray chatbox--empty" style="z-index:6">
  <div class="chatbox__title">
    <h5><a href="javascript:void(0);">Chat</a></h5>
    <button class="chatbox__title__tray">
      <span></span>
    </button>
    <button class="chatbox__title__close">
      <span>
        <svg viewBox="0 0 12 12" width="12px" height="12px">
          <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
          <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
        </svg>
      </span>
    </button>
  </div>
  <div class="chatbox__body">

    <div class="chatbox__body__message chatbox__body__message--right" style="line-height: 15px">
      <p>Recuerda no refrescar o cambiar de página, ya que si no el historico del chat será eliminado. </p>
    </div>
    <div class="chatbox__body__message chatbox__body__message--right" style="line-height: 15px">
      <p>Hola soy Iván, ¿Con quién tengo el gusto?</p>
    </div>
  </div>
  <form class="chatbox__credentials">
    <div class="form-group">
      <label for="inputName">Name:</label>
      <input type="text" class="form-control" id="inputName" required>
    </div>
    <div class="form-group">
      <label for="inputEmail">Email:</label>
      <input type="email" class="form-control" id="inputEmail" required>
    </div>
    <button type="button" class="btn btn-success btn-block">Enter Chat</button>
  </form>
  <textarea class="chatbox__message" id="MessageChatBox" placeholder="Escribe tu mensaje..."></textarea>
  <button class="btn btn-dark btn-block m-3" id="SendCommentChatBox">Enviar</button>
</div>

<template id="TemplateHobby">
  <div class="col-sm-3 mt-2">
    <li id="hobby_!token"><a href="#"><span id="icon_!token" class="icon d-flex align-items-center justify-content-center"></span><b id="name_!token"></b></a></li>
  </div>
</template>

<template id="TemplateHeaderProyect">
  <div>
    <div class="thumb">
      <span class="icon" id="icon_!token"></span>
      <b id="alias_!token"></b>
    </div>
  </div>
</template>

<template id="TemplateDetailProyect">
  <li>
    <div>
      <div class="thumb">
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <div class="left-text">
              <h4 id="title_!token"></h4>
              <p id="description_!token"></p>
              <div class="main-white-button"><a href="{{route('get.project',['projectId'=>'!token'])}}"><i class="fa fa-eye"></i></a></div>
            </div>
          </div>
          <div class="col-lg-7 align-self-center">
            <div class="right-image">
              <img id="image_!token" src="" alt="Image !token">
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>
</template>

<template id="TemplateCourseItem">
  <div class="col-lg-12 item">
    <div class="listing-item">
      <div class="col-md-5">
        <div class="left-image">
          <a href="#"><img id="CourseIMG_!token" src="/images/course-1.jpg" style="height: 100%;"></a>
        </div>
      </div>
      <div class="col-md-7">
        <div class="right-content align-self-center">
          <a href="#">
            <h4 id="CourseSchoolName_!token"></h4>
          </a>
          <h6 id="CoursePeriod_!token"></h6>
          <span class="price">
            <div class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></div><em id="CourseTitle_!token"></em>
          </span>
          <ul class="info">
            <li><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i> Método de titulación: <b id="CourseMethodTitle_!token"></b></li>
            <li><span id="CourseIconProject_!token"></span><span id="CourseTitleProject_!token"></span></li>
          </ul>
          <span class="details mt-3" id="CourseProjectName_!token"></span>
          <p id="CourseDescription_!token"></p>
        </div>
      </div>
    </div>
  </div>
</template>

<template id="TemplateRowItem">

  <div>
    <!--container-->
  </div>

</template>

<template id="TemplateCarousel">
  <!--<div class="owl-carousel owl-listing">-->
  <div class="owl-listing">
    <!--carousel-->
  </div>
</template>


<template id="TemplateWorkExp">
  <div class="col-md-12 mb-4">

    <div class="service d-flex h-100">
      <div class="service-about">
        <p style="display:inline;"><i class="fa fa-briefcase fa-5" aria-hidden="true"></i>&nbsp;
        <h3 id="workExpTitle_!token" style="display:inline;"></h3>
        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar" aria-hidden="true"></i></span>&nbsp;<b><span id="workExpCicle_!token" style="display:inline;"></span></b></p>
        <hr />
        <div>
          <span><i class="fa fa-building" aria-hidden="true"></i></span>
          <h4 id="workExpCorp_!token" style="display:inline;"></h4>
        </div>
        <p id="workExpDesc_!token"></p>
        <div class="d-flex justify-content-center">
          <span id="PauseIconCarousel"><i id="ElemIconPause_!token" class="fa fa-pause fa-4x" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>

  </div>
</template>

<template id="TemplateResponseClient">
  <div class="chatbox__body__message chatbox__body__message--left" style="line-height: 15px">
    <p>
      <!--Message-->
    </p>
  </div>
</template>

<template id="TemplateResponseIMG">
  <div class="chatbox__body__message chatbox__body__message--right" style="line-height: 15px">
    <p><!--Message--></p>
  </div>
</template>
@stop

@section('scripts')
<script src="{{asset('js/Site/index-0.2.js')}}"></script>
@stop