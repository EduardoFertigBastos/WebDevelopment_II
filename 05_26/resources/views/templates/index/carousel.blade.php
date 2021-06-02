<div id="carouselSite" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src=" {{ asset('assets/images/Carousel/carousel1.jpg') }} " class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block">
                <h2> Qualidade de Excelência! </h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('assets/images/Carousel/carousel2.jpg') }} " class="img-fluid d-block">
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('assets/images/Carousel/carousel3.jpg') }} " class="img-fluid d-block">
        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only"> Anterior </span>
        </a>

        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only"> Próximo </span>
        </a>
    </div>
</div>
