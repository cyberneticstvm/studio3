@extends("base")

@section("content")
<section class="portfolio head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>-->
                    <h4 class="playfont wow flipInX text-left" data-wow-delay=".5s">Our Services</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container-fluid">
        <div class="row">

            <!-- filter links -->
            <div class="filtering text-center col-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="filter bg-img bg-repeat" data-background="img/line-pattern1.png">
                    <span data-filter='*' class="active">All</span>
                    <span data-filter='.interior'>Interior</span>
                    <span data-filter='.theaters'>Architectural</span>
                    <span data-filter='.residential'>Landscape</span>
                    <span data-filter='.residential'>Fitouts</span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery twsty full-width">

                <!-- gallery item -->
                <div class="items theaters mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/01.webp' }}">
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
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/02.webp' }}">
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
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/03.webp' }}">
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
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/04.webp' }}">
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