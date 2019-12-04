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

            <!-- //section-title -->
            <div class="col-md-4 text-center">
                <h1 class="title deep-black pb40"><strong>Indicanos tus requerimientos</strong></h1>
                <div class="comment-form">

                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                    @endif
                    <form id="contact_form" action="{{route('planPersonalizado')}}" method="POST" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <input type="hidden" name="id" value="{{Auth::user()->aca_id}}">
                        <div class="contact-info-1">
                            <input class="name mr30" name="name" type="text" placeholder="Nombre*">
                            @if($errors->has('name'))
                                <small class="form-text invalid feedback">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="contact-info-1">
                            <input class="email" name="alumnos" type="text" placeholder="Numero de alumnos*">
                            @if($errors->has('alumnos'))
                                <small class="form-text invalid feedback">{{$errors->first('alumnos')}}</small>
                            @endif
                        </div>
                        <div class="contact-info">
                            <textarea id="message" name="message" placeholder="Mensaje" rows="7" cols="30"></textarea>
                            @if($errors->has('message'))
                                <small class="form-text invalid feedback">{{$errors->first('message')}}</small>
                            @endif
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
