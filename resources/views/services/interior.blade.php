@extends("base")

@section("content")
<section class="testimonials grid head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">OUR SERVICES</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">INTERIOR DESIGNING</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="slider">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/interiors/interior1.webp' }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin">Interiors</h5>
                                    <h1 data-splitting><a href="#0">Interior Design</a>
                                    </h1>
                                    <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                        business. <br> a style that makes a statement.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/interiors/interior2.webp' }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin">Interiors</h5>
                                    <h1 data-splitting><a href="#0">Interior Design</a>
                                    </h1>
                                    <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                        business. <br> a style that makes a statement.</p>
                                    <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/interiors/interior3.webp' }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin">Interiors</h5>
                                    <h1 data-splitting><a href="#0">Interior Design</a>
                                    </h1>
                                    <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                        business. <br> a style that makes a statement.</p>
                                    <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/interiors/interior4.webp' }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin">Interiors</h5>
                                    <h1 data-splitting><a href="#0">Interior Design</a>
                                    </h1>
                                    <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                        business. <br> a style that makes a statement.</p>
                                    <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider setting -->
        <div class="setone">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination top custom-font"></div>
    </div>
</header>
@endsection