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
<section class="portfolio mb-50">
    <div class="container">
        <div class="row">
            <p class="mb-30">At Studio1 Creators, we provide interior design background services and solutions, from design concept to execution of architecture and interior design ranging from luxury, retail, food and beverage to hospitality. Our ability to identify challenges and provide solutions is second to none and we prioritize our people, customers and end users as the essentials in every decision. We understand the value of meaningful aesthetics and building relationships with a diverse mix of creativity and adherence to design standards.</p>
            <!-- filter links -->
            <div class="filtering text-center col-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="filter bg-img bg-repeat" data-background="img/line-pattern1.png">
                    <span data-filter='*' class="active">All</span>
                    <span data-filter='.inte'>Interior</span>
                    <span data-filter='.archi'>Architectural</span>
                    <span data-filter='.lands'>Landscape</span>
                    <span data-filter='.fitouts'>Fitouts</span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery twsty full-width">

                <!-- gallery item -->
                <div class="items archi mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/01.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Architectural</h5>
                        <span>Architectural Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items archi mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/02.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Architectural</h5>
                        <span>Architectural Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items inte mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/03.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Interior</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items inte mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/04.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Interior</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items lands mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/05.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Landscape</h5>
                        <span>Landscape Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items lands mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/06.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Landscape</h5>
                        <span>Landscape Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items fitouts mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/07.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Fitouts</h5>
                        <span>Fitout Services</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items fitouts mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/08.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Fitouts</h5>
                        <span>Fitout Services</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection