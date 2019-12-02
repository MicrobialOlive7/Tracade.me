@extends('Corporativa.templates.master')
@section('content')

    <!-- Start of download
        ============================================= -->
    <section id="download-area" class="download-section">
        <div class="container">
            <div class="row section-content">
                <div class="download-area-content  text-center">
                    <div class="download-now pb40">
                        <h3><strong>Crear una cuenta</strong></h3>
                    </div>
                    <div class="download-area-text  pb20">
                        <span>Necesitas ser un usuario registrado para poder contratar un plan.</span>
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
                        <!-- //section-title -->
            <div class="col-md-12 text-center">
                <h1 class="title deep-black pb40"><strong>Ingresa tus datos</strong></h1>
                <div class="comment-form">
                    <form id="contact_form" method="POST" enctype="multipart/form-data" >
                                <div class="contact-info-1">
                                    <input class="name mr30" name="name" type="text" placeholder="Nombre*">
                                </div>
                            <div class="contact-info-1">
                                <input class="name mr30" name="ap" type="text" placeholder="Apellido Paterno*">
                            </div>
                            <div class="contact-info-1">
                                <input class="name mr30" name="am" type="text" placeholder="Apellido Materno*">
                            </div>
                            <div class="contact-info-1">
                                <input class="email" name="email" type="text" placeholder="Correo Electrónico*">
                            </div>
                            <div class="contact-info-1">
                                <input class="email" name="telefono" type="text" placeholder="Teléfono*">
                            </div>
                            <div class="contact-info-1">
                                <input class="email" name="academia" type="text" placeholder="Nombre de la Academia*">
                            </div>
                            <div class="submit-btn text-center mt20">
                                <button type="submit" value="Submit">Registrarme</button>
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
