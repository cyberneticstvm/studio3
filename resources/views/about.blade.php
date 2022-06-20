@extends("base")

@section("content")
<section class="portfolio head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>-->
                    <h4 class="playfont wow flipInX text-left" data-wow-delay=".5s">About Studio1 Creators</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                    <div class="img bg-img wow imago" data-background="{{ '/img/exp.webp' }}">
                        <div class="since custom-font">
                            <span>Since</span>
                            <span>2020</span>
                        </div>
                        <div class="years custom-font">
                            <h2>STUDIO1</h2>
                            <!--<h5>Years Experience</h5>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">About Us</h6>
                    <h4 class="wow mb-20">Best Designers <br> Architectures for You.</h4>
                    <p>Studio1 Creators are recognized as a leading professional providing excellent service for all types of interior architecture and architectural design projects, well established in the United Arab Emirates, our services extend throughout the GCC region. We are in the business of designing spaces by understanding and providing solutions that consider cost, time and quality - ensuring every project is of the highest quality.</p>
                    <div class="numbers mt-50">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="item">
                                    <!--<h3><span class="nbr custom-font">352</span></h3>
                                    <h6>Projects Completed</h6>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <!--<h3><span class="nbr custom-font">567</span></h3>
                                    <h6>Satisfied Clients</h6>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <!--<h3><span class="nbr custom-font">17</span></h3>
                                    <h6>Awards Won</h6>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection