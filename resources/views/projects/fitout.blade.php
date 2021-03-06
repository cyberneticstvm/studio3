@extends("base")

@section("content")
<section class="portfolio head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>-->
                    <h4 class="playfont wow flipInX text-left" data-wow-delay=".5s">Fitout Services</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mb-50">
    <div class="gallery123"> 
        <a href="{{ '/img/slid/fitout/fitout01.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/fitout/thumb001.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/fitout/fitout02.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/fitout/thumb002.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/fitout/fitout03.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/fitout/thumb003.webp' }}" alt="" title="Project1">
        </a>
    </div>
</div>
@endsection