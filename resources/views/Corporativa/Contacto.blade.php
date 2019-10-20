@extends('Corporativa.templates.master')
@section('content')
<!--================Get Form Area =================-->
<section class="get_form_area" id="contact">
    <div class="container">
        <h2 class="single_title_center">Get in touch</h2>
        <div class="row m0">
            <form class="contact_us_form row m0" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Type name..">
                </div>
                <div class="form-group col-md-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="examplename.20@domain.com">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type here your massage"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" value="submit" class="btn send_btn form-control">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Get Form Area =================-->
@endsection
