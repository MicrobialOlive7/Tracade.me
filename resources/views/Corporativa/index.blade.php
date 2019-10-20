@extends('Corporativa.templates.master')
@section('content')
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="dash_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"   data-saveperformance="off"   data-description="">
                    <!-- LAYERS -->
                    <div class="slider_text_box">
                        <div class="slider_text_box">
                            <!-- [DESKTOP, LAPTOP, TABLET, SMARTPHONE]  -->
                            <div class="tp-caption ds_first_text text-align-ce"
                                 data-x="['left','left','center','left']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-hoffset="['-150','-150','0','-10']"
                                 data-voffset="['-100','-100','-100','-50']"
                                 data-fontsize="['60','60','60','26']"
                                 data-lineheight="['85','85','85','40']"
                                 data-width="['none','none','none','none']"
                                 data-height="none"
                                 data-whitespace="['nowrap','nowrap','nowrap','nowrap']"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                                 data-textAlign="['left','left','center','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]">Tracade.Me<br>Seguimiento de Habilidades</div>

                        <div class="tp-caption ds_secand_text"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle']"
                             data-hoffset="['-150','-150','50','-10']"
                             data-voffset="['130','80','80','90']"
                             data-fontsize="['22','22','22','14']"
                             data-lineheight="['28','28','28','28']"
                             data-width="['70%','70%','95%','95%']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','center','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]">¡Deshazte del papel y registra el progreso de tus alumnos fácilmente con un sitio dedicado al seguimiento de habilidades personalizable!</div>

                        <div class="tp-caption right_img"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-hoffset="['-300','0','0','0']"
                             data-voffset="['100','40','40','0']"
                             data-fontsize="['16','16','16','16']"
                             data-lineheight="['28','28','28','28']"
                             data-width="['none','400']"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive="on"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"><img src="../public/img/home-slider/slider-right-img.png" alt=""></div>
                    </div>
                    </div>
                <!-- LAYERS -->
                </li>
            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Powerful Area =================-->
    <section class="powerfull_area" id="about">
        <div class="row pawerfull_area_inner">
                <div class="col-md-5">
                    <div class="power_left_img">
                        <img src="img/power-ds-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="power_right_content">
                            <h3 class="single_title">Utiliza Estrellas para Evaluar</h3>
                            <div class="power_left_content_inner">
                                <p> Puedes evaluar cada actividad con una, dos o tres estrellas. </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <tbody>
                                <tr>
                                    <th scope="row"><h3> Comenzando</h3></th>
                                    <th scope="col"><img src="../public/img/icon/star-icon.png" alt=""></th>
                                <tr>
                                    <th scope="row"><h3> En Progreso</h3></th>
                                    <th scope="col"><img src="../public/img/icon/star-icon.png" alt=""><img src="../public/img/icon/star-icon.png" alt=""></th>
                                </tr>
                                <tr>
                                    <th scope="row"><h3>¡Listo!</h3></th>
                                    <th scope="col"><img src="../public/img/icon/star-icon.png" alt=""><img src="../public/img/icon/star-icon.png" alt=""><img src="../public/img/icon/star-icon.png" alt=""></th>
                                </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        <br>
    </section>
    <!--================End Powerful Area =================-->

    <!--================Powerful Area =================-->
    <section class="powerfull_area" id="about">
        <div class="row pawerfull_area_inner">
            <div class="col-md-7">
                <div class="power_right_content">
                    <h3 class="single_title" >Deja Comentarios</h3>
                    <div class="power_left_content_inner">
                        <p> Escribe el razonamiento detrás de cada calificación.</p>
                        <img src="../public/img/icon/star-icon.png" alt=""><img src="../public/img/icon/star-icon.png" alt=""><img src="../public/img/icon/star-icon.png" alt="">
                        <p> Recuérdale al estudiante lo que necesita mejorar, </p>
                        <p> felicitalo por su progreso o simplemente deja palabras de aliento.  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="power_right_img">
                    <img src="img/macbook-res.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Powerful Area =================-->

    <!--================Provide Feature Area =================-->
    <section class="provide_feature_area" id="feature">
        <div class="p_feature_left">
            <div class="p_f_left_content">
                <h3 class="single_title">Características</h3>
                <div class="p_left_item_inner">
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Panel de Administración</h4>
                                <p>Utiliza el panel para ver el progreso general de tus alumnos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-2.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Tablas Personalizables</h4>
                                <p>Edita cada tabla para que cumplan con tus necesidades.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Calendario con Eventos</h4>
                                <p>Crea eventos en el calendario para que tus alumnos puedan verlos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Generación de Gráficas</h4>
                                <p>Manténte actualizado con el estado de las habilidades de los estudiantes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-5.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Panel para Alumnos</h4>
                                <p>Permite a tus alumnos ver su progreso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/p-icon-6.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Fácil de Usar</h4>
                                <p>Aprende de forma intuitiva a usar la plataforma.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p_feature_right">
            <div class="p_feature_img">
                <img src="img/provide-ds-img.png" alt="">
            </div>
        </div>
    </section>
    <!--================End Provide Feature Area =================-->


    <!--================Dashboard Screenshot Area =================-->
    <section class="dash_screen_area" id="screenshot">
        <div class="container">
            <h3 class="single_title">Conoce Tracade.Me </h3>
        </div>
        <div class="dash_screen_slider owl-carousel">
            <div class="item">
                <img src="img/laptop-slider/slider-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/laptop-slider/slider-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/laptop-slider/slider-3.jpg" alt="">
            </div>
        </div>
    </section>
    <!--================End Dashboard Screenshot Area =================-->

    @endsection
