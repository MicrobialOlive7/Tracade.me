
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
                    <div class="power_right_content_inner">
                        <h3 class="single_title">¿Quiénes Somos?</h3>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Powerful Area =================-->
    <!--================Provide Feature Area =================-->
    <section class="provide_feature_area" id="feature">
        <div class="p_feature_left">
            <div class="p_f_left_content">
                <h3 class="single_title">Nuestra Misión</h3>
                <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                <br>
                <div class="p_left_item_inner">
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/check-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Perfect Dashboard</h4>
                                <p>There's lot of hate out there for a text that amounts to little more than garbled words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/check-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>SEO Marketing</h4>
                                <p>There's lot of hate out there for a text that amounts to little more than garbled words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/check-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Unique Design</h4>
                                <p>There's lot of hate out there for a text that amounts to little more than garbled words.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/check-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Data Analytics</h4>
                                <p>There's lot of hate out there for a text that amounts to little more than garbled words.</p>
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

    <!--================StartTable Area =================-->
    <section class="powerfull_area" id="about">
    <section class="paper-section">
        <div class="container">
            <div class="inner-paper row">
                <div class="col-lg-5 col-sm-12">
                    <table class="pap-table">
                        <tbody ><tr class="pap-tit">
                            <th>Paper Charting <i class="fa fa-file-text-o pap-ic" aria-hidden="true"></i></th>
                        </tr>

                        <tr>
                            <td>To modify curriculum on a paper chart you have to purge the old charts</td>  <br>
                        </tr>
                        <tr>
                            <td>Paper charts are easily misplaced and lost, especially if given to the student or family</td>
                        </tr>
                        <tr>
                            <td>Paper charts are easily wrinkled, torn, with water damage from the water fountain or scuffed up by erase marks and mistakes</td>
                        </tr>
                        <tr>
                            <td>Storing and filing paper charts becomes time consuming, labor intensive, and can compromise student privacy if files are available to the members</td>
                        </tr>
                        </tbody></table>
                </div>

                <div class="col-lg-2 col-sm-12">
                    <h4 class="vs-cp">Vs.</h4>
                </div>

                <div class="power_right_content_inner">
                    <table class="pap-table">
                        <tbody>
                        <tr class="pap-tit">
                            <th>Online Charting <i class="fa fa-desktop pap-ic" aria-hidden="true"></i></th>
                        </tr>
                        <tr>
                            <td>Modifying curriculum on an online chart is a click away, no starting over or erasing is necessary</td>
                        </tr>
                        <tr>
                            <td>Charts are securely stored in the cloud and will never be lost or breached</td>
                        </tr>
                        <tr>
                            <td>Online skill charts don’t get wrinkled, torn, water damage or scuffed up</td>
                        </tr>
                        <tr>
                            <td>Online skill charts, save you time; no filing is necessary</td>
                        </tr>
                        </tbody></table>
                </div>



            </div>
        </div>

    </section>
    </section>
    <!--================ End Comparative Table Area =================-->
@endsection
