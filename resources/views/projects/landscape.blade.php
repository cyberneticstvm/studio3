@extends("base")

@section("content")
<section class="portfolio head-p">
    <div class="container">
        <div class="section-head1 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Interior Design Projects</h6>-->
                    <h4 class="playfont wow flipInX text-left" data-wow-delay=".5s">Landscape Designing</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mb-50">
    <div class="gallery123"> 
        <a href="{{ '/img/slid/landscape/landscape01.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb01.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/landscape/arch02.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb02.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/landscape/arch06.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb06.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/landscape/arch03.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb03.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/landscape/arch04.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb04.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/landscape/arch08.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/landscape/thumb08.webp' }}" alt="" title="Project1">
        </a>
    </div>
</div>
@endsection