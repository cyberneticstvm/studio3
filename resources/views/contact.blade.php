@extends("base")

@section("content")
<section class="portfolio head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>-->
                    <h4 class="playfont wow flipInX text-left" data-wow-delay=".5s">Contact Studio1 Creators</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 form">
                <form id="contact-form" method="post" action="contact.php">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_name" type="text" name="contact" placeholder="Contact Number" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" placeholder="Email"
                                required="required">
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                required="required"></textarea>
                        </div>

                        <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection