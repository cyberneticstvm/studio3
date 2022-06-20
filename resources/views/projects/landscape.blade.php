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
<div class="container mb-25">
    <div class="gallery123"> 
        <a href="{{ '/img/slid/interiors/interior1.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb1.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/interiors/interior2.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb2.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/interiors/interior5.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb5.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/interiors/interior4.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb4.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/interiors/interior6.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb6.webp' }}" alt="" title="Project1">
        </a>
        <a href="{{ '/img/slid/interiors/interior7.webp' }}" class="big m-2" rel="rel1">
            <img src="{{ '/img/slid/interiors/thumb7.webp' }}" alt="" title="Project1">
        </a>   
    </div>
</div>
@endsection