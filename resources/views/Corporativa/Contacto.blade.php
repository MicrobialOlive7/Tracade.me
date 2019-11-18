@extends('Corporativa.templates.master')
@section('content')


    <!-- Start of download
        ============================================= -->
    <section id="download-area" class="download-section">
        <div class="container">
            <div class="row section-content">
                <div class="download-area-content  text-center">
                    <div class="download-now pb40">
                        <h3><strong>CONTACTO</strong></h3>
                    </div>
                    <div class="download-area-text  pb20">
                        <span>Permitenos conocer más de tu academia.</span>
                    </div>
                </div>
            </div><!--  /row -->
        </div><!--  /container -->
    </section>
    <!-- End of  download
        ============================================= -->
<!-- Start of contact section
    ============================================= -->
<section id="contact" class="contact-section text-center">
        <div class="row section-content">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="section-title text-left pb50">
                    <h1 class="title deep-black pb40"><Strong>Permanece en Contacto</Strong></h1>
                    <span class="title-dec"> Contactanos en nuestras redes sociales </span>
                    <br>
                    <ul class="icon">
                        <li><a href="#"><span class="ti-facebook"></span><span class="title-dec"> Facebook </span></a></li>
                        <li><a href="#"><span class="ti-twitter-alt"></span><span class="title-dec"> Twitter </span></a></li>
                        <li><a href="#"><span class="ti-instagram"></span><span class="title-dec"> Instagram </span></a></li>
                        <li><span class="ti-email"></span><span class="title-dec"> hola@tracade.me </span></li>
                    </ul>
                </div>
            </div>
            <!-- //section-title -->
            <div class="col-md-4 text-center">
                <h1 class="title deep-black pb40"><strong>¡Envíanos un mensaje!</strong></h1>
                <div class="comment-form">
                    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                        <div class="contact-info-1">
                            <input class="name  mr30" name="name" type="text" placeholder="Nombre*">
                        </div>
                        <div class="contact-info-1">
                            <input class="email" name="email" type="text" placeholder="Correo Electrónico*">
                        </div>
                        <div class="contact-info-1">
                            <input class="name" name="name" type="text" placeholder="Asunto">
                        </div>
                        <div class="contact-info">
                            <textarea id="message" name="message" placeholder="Mensaje" rows="7" cols="30"></textarea>
                        </div>
                        <div class="submit-btn text-center mt20">
                            <button type="submit" value="Submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--  //row-->
   <!--  //container -->
</section>
<!-- End of contact section
    ============================================= -->
@endsection
