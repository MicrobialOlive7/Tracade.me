@extends('Corporativa.templates.master')
@section('content')
<!--================Get Form Area =================-->
<div class="splash_img">
    <img src="../img/discover-bg.jpg)"  alt="">
</div>
<section class="get_form_area" id="contact">
    <div class="container">
        <h2 class="single_title_center">Contáctanos</h2>
        <div class="row m0">
            <form class="contact_us_form row m0" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre.">
                </div>
                <div class="form-group col-md-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo.20@domain.com">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Escribe aquí tu mensaje..."></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" value="submit" class="btn send_btn form-control">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Get Form Area =================-->
@endsection
