
@extends('Corporativa.templates.master')
@section('content')

    <!--================Discover Video Area =================-->
     <section class="discover_video_area">
         <div class="container">
             <div class="discover_video_inner">
                 <img src="img/discover-video.jpg" alt="">
                 <a class="popup-youtube" href="https://www.youtube.com/watch?v=WVPRkcczXCY"><i class="fa fa-play"></i></a>
             </div>
         </div>
     </section>

    <!--================End Discover Video Area =================-->
    <!--================Provide Feature Area =================-->
    <section class="provide_feature_area" id="feature">
        <div class="p_feature_img ">
            <div class="col-md-6">
                <img src="img/feature/ten-f-mobile.png" alt="" style= width:90%;>
            </div>
        </div>
            <div class="col-md-6">
                <h3 class="single_title text-center">¿Quiénes Somos?</h3>
                <br>
                <p>La propuesta de desarrollar el sistema surge de la idea de automatizar el proceso de registro de seguimiento de los alumnos en numerosas disciplinas, ya que en su mayoría, es realizado a lápiz y papel. </p>
                <br>
                <p>Es por esto que creamos Tracade.Me, una plataforma de seguimiento de habilidades en línea para educadores y estudiantes dentro de la industria.</p>
                <br>
                <p>Para rastrear con éxito el progreso de los estudiantes, debemos proporcionar lo siguiente: Una forma efectiva de rastrear habilidades, un método eficiente para comunicar comentarios y una forma simple de ver ese progreso respecto al tiempo. Este es nuestro enfoque principal a medida que continuamos construyendo nuestra plataforma.</p>
        </div>

        </section>
    <!--================End Provide Feature Area =================-->
    <!--================Provide Feature Area =================-->
    <section class="provide_feature_area" id="feature">
        <div class="p_feature_left">
            <div class="p_f_left_content">
                <div class="col-md-12">
                <h3 class="single_title">Nuestra Misión</h3>
                <p>Nuestra misión es finalmente brindar a los entrenadores, maestros e instructores una solución real al problema continuo del seguimiento del progreso de los estudiantes. Al proporcionar un foro para estudiantes e instructores para rastrear, comunicarse y ver el progreso, confiamos en que la retención y los resultados de los estudiantes aumentarán significativamente en todos los que participan en el proyecto.</p>
                <br>
                <p>Ya hemos comenzado, y esperamos que te unas a nosotros en el esfuerzo humano más importante, permitir a tus alumnos alcanzar su mayor potencial convirtiéndose en individuos exitosos a través de su propio mérito e individualidad.</p>
                <br>
                <ol class="fa-ul">
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Tablas en línea completamente personalizables!</li>
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Acceso completo para las estudiantes las 24 horas, los 7 días de la semana!</li>
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Actualización en tiempo real!</li>
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Sube tus fotos y videos personalizados!</li>
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Almacena información de tus estudiantes!</li>
                    <li><img src="../public/img/icon/star.png" alt=""></i></span>¡Mantén a tus estudiantes comprometidos con objetivos que pueden revisar diariamente!</li>
                </ol>
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

    <!--================StartTable Area =================-->
    <section class="powerfull_area" id="about">
    <section class="paper-section">
        <div class="container">
            <div class="inner-paper row">
                <div class="col-md-5">
                    <table class="pap-table">
                        <tbody ><tr class="pap-tit">
                            <th>Registro en Papel <i class="fa fa-file-text-o pap-ic" aria-hidden="true"></i></th>
                        </tr>

                        <tr>
                            <td>El papel se pierde fácilmente, especialmente si se entrega al estudiante.</td>  <br>
                        </tr>
                        <tr>
                            <td>El papel se arruga y se rasga fácilmente, además se raya con marcas de borrado y errores.</td>
                        </tr>
                        <tr>
                            <td>Almacenar y archivar registros lleva mucho tiempo, requiere mucho trabajo y puede comprometer la privacidad de los estudiantes.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-2">
                    <h4 class="vs-cp">Vs.</h4>
                </div>

                   <div class="col-md-5">
                    <table class="pap-table">
                        <tbody>
                        <tr class="pap-tit">
                            <br>
                            <th>Registro Electrónico <i class="fa fa-desktop pap-ic" aria-hidden="true"></i></th>
                        </tr>
                        <tr>
                            <td>La modificación de un registro en línea está a un clic de distancia, no es necesario comenzar de nuevo ni borrar.</td>
                        </tr>
                        <tr>
                            <td>Los gráficos se almacenan de forma segura en la nube y nunca se perderán.</td>
                        </tr>
                        <tr>
                            <td>Las tablas de habilidades en línea no se arrugan, rasgan, dañan por agua ni se rayan</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>


            </div>
        </div>

    </section>
    </section>
    <!--================ End Comparative Table Area =================-->
@endsection
