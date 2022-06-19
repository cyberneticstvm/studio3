@extends("base")

@section("content")
<section class="portfolio section-padding">
    <div class="container-fluid">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Our Projects</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- gallery -->
            <div class="gallery twsty full-width">

                <!-- gallery item -->
                <div class="items theaters mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/slid/interiors/interior1.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Fantastic Exterior</h5>
                        <span>Exterior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items interior mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/slid/interiors/interior2.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Hotel Interior</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items residential mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/slid/interiors/interior3.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Luxury Villa</h5>
                        <span>Architecture</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items interior theaters mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/slid/interiors/interior4.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Creative Interior</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection