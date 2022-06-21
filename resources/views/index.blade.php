@extends("base")

@section("content")
<!-- ==================== Start Slider ==================== -->

<header class="slider">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/slider6.webp' }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin">Innovative</h5>
                                    <h1 data-splitting><a href="#0">Architecture</a>
                                    </h1>
                                    <p class="mt-10">Architecture should speak of its time and place, but yearn for timelessness.<br>Our team put effort to accomplish it.</p>
                                    <!--<a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/slider5.webp' }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin custom-font">Classic</h5>
                                    <h1 data-splitting><a href="#0">
                                            and Modern
                                        </a></h1>
                                    <p class="mt-10">In this trendy world we remain classic but focus on the detailing and fulfill your modern<br>contemporary design which shows the aestheticism.</p>
                                    <!--<a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/slider9.webp' }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin custom-font">Elegant &</h5>
                                    <h1 data-splitting><a href="#0">
                                            Unique Design
                                        </a>
                                    </h1>
                                    <p class="mt-10">Design is intelligence made visible that creates value faster than costs.</p>
                                    <!--<a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                        <span>Read More</span>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ '/img/slid/slider8.webp' }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption hmone">
                                    <h5 class="thin custom-font">interior</h5>
                                    <h1 data-splitting><a href="#0">
                                            design agency
                                        </a></h1>
                                    <p class="mt-10"> We are professionals to explore a wide set of ideas and also create a shared vision<br>to move forward within a short amount of time. </p>
                                    <!--<a href="#0" class="btn-curve btn-bord btn-lit mt-30">
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

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start about ==================== -->

<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                    <div class="img bg-img wow imago" data-background="{{ '/img/exp03.jpg' }}">
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

<!-- ==================== End about ==================== -->

<section class="services bg-dark">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Our Talents</h6>
                    <h4 class="wow flipInX" data-wow-delay=".5s">Why Choose Us</h4>
                </div>
            </div>
            <div class="row bord-box bg-img wow fadeInUp">
                <div class="col-lg-12 col-md-12 mt-50">
                    <p>Our immense experience in the interior and architectural design market sectors gives us the advantage of overcoming challenges and leading effectively in terms of quality, delivery and price, developing partnerships and building positive camaraderie with other professionals and clients, ensuring the timely delivery of our Projects to the highest global standards and delivering quality work without issues within set scope and budget.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services bg-dark">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
                    <h4 class="wow flipInX" data-wow-delay=".5s">Our Services</h4>
                </div>
            </div>
        </div>
        <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".3s">

            <div class="col-lg-3 col-md-6 item-bx bg-dark">
                <h6 class="mb-20 text-center">INTERIOR<br>DESIGNING</h6>
                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                <a href="#0" class="more custom-font mt-30">Read More</a>
            </div>

            <div class="col-lg-3 col-md-6 item-bx bg-dark">
                <h6 class="mb-20 text-center">ARCHITECTURAL<br>DESIGNING</h6>
                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                <a href="#0" class="more custom-font mt-30">Read More</a>
            </div>

            <div class="col-lg-3 col-md-6 item-bx bg-dark">
                <h6 class="mb-20 text-center">LANDSCAPE<br>DESIGNING</h6>
                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                <a href="#0" class="more custom-font mt-30">Read More</a>
            </div>

            <div class="col-lg-3 col-md-6 item-bx bg-dark">
                <h6 class="mb-20 text-center">FITOUT<br>SERVICES</h6>
                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                <a href="#0" class="more custom-font mt-30">Read More</a>
            </div>
        </div>
    </div>
</section>



<!-- ==================== Start works ==================== -->

<section class="portfolio section-padding">
    <div class="container-fluid">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Works</h6>
                        <h4 class="wow flipInX" data-wow-delay=".5s">Our Projects</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- filter links 
            <div class="filtering text-center col-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="filter bg-img bg-repeat" data-background="img/line-pattern1.png">
                    <span data-filter='*' class="active">All</span>
                    <span data-filter='.interior'>Interior</span>
                    <span data-filter='.theaters'>Architectural</span>
                    <span data-filter='.residential'>Landscape</span>
                    <span data-filter='.residential'>Fitouts</span>
                </div>
            </div>-->

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
                        <h5>Architectural</h5>
                        <span>Architectural Design</span>
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
                        <h5>Interior</h5>
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
                        <h5>Landscape</h5>
                        <span>Landscape Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items interior theaters mt-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img wow imago" data-background="{{ '/img/portfolio/mas/09.webp' }}">
                        <a href="#0">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5>Fitout</h5>
                        <span>Fitout Services</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ==================== End works ==================== -->



<!-- ==================== Start Skills Circle ==================== -->

<section class="skills-circle section-padding bg-img parallaxie" data-background="img/0001.webp" data-overlay-dark="7">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Expertise</h6>
                    <h4 class="wow flipInX" data-wow-delay=".5s">Expertise</h4>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.95">
                        <span class="custom-font" id='skill1'>95%</span>
                        <h6>INTERIOR</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.9">
                        <span class="custom-font" id='skill2'>92%</span>
                        <h6>ARCHITECTURAL</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.9">
                        <span class="custom-font" id='skill3'>90%</span>
                        <h6>LANDSCAPE</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.9">
                        <span class="custom-font" id='skill4'>90%</span>
                        <h6>FITOUTS</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Skills Circle ==================== -->



<!-- ==================== Start Testimonials ==================== -->

<section class="testimonials grid section-padding">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Testimonials</h6>
                    <h4 class="wow flipInX" data-wow-delay=".5s">What People Says?</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testim">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/1.jpg" alt="">
                            </div>
                            <h6>Mitchl Jhon <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/2.jpg" alt="">
                            </div>
                            <h6>Jane Smith <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/3.jpg" alt="">
                            </div>
                            <h6>Alison Clutcher <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/4.jpg" alt="">
                            </div>
                            <h6>Peter Jefferson <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="navs mt-30">
                    <span class="prev">
                        <i class="fas fa-long-arrow-alt-left text-dark"></i>
                    </span>
                    <span class="next">
                        <i class="fas fa-long-arrow-alt-right text-dark"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Testimonials ==================== -->



<!-- ==================== Start Team ==================== -->

<section class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tit">
                    <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Some thoughts from Us</h6>
                    <h3 class="wow flipInX" data-wow-delay=".5s">Our Employees</h3>
                    <p class="wow fadeInUp" data-wow-delay=".3s">We feel proud for our expert team members beatae
                        ipsum dolor sit amet, consectetur
                        adipisicing elit mauris vitae consequat nibh, vitae interdum mi.</p>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev bg-dark">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next bg-dark">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-container">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/man.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Hasib sharif</h5>
                            <span>General Manager</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/woman.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Jonson Leo</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/man.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Leio Man</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/woman.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Robert Front</h5>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/man.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Legender Mao</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/woman.webp" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Matt Huk</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="dots-half bg-img bg-repeat" data-background="img/dots.png"></div>-->
</section>

<!-- ==================== End Team ==================== -->

<!-- ==================== Start contact ==================== -->

<section id="contact" class="contact cont-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 contact-form wow fadeInDown" data-wow-delay=".3s">
                <form id="contact-form" method="post" action="contact.php">
                    <div class="section-head">
                        <h6 class="custom-font">Contact Us</h6>
                        <h4 class="playfont">Get In Touch</h4>
                    </div>

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_contact" type="text" name="contact" placeholder="Contact Number" required="required">
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
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.986111620221!2d55.087222972550585!3d24.98780158178485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f127c765bfb7b%3A0xac18e62af75d21df!2s!5e0!3m2!1sen!2sin!4v1655724052368!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="bg-img" data-background="{{ '/img/002.webp' }}"></div>
</section>

<!-- ==================== End contact ==================== -->
@endsection("content")