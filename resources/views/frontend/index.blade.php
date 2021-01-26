@include("custom.header")
<section class="home-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><a href="{{ route('search.doctor') }}"><img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner1.jpg" alt="First slide"></a>  </div>
                        <div class="carousel-item"><a href="https://amardoctor.com.bd/public/index.php/contact/service/nursing"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner2.jpg" alt="Second slide"></a> </div>
                        <div class="carousel-item"><a href="{{ route('search.doctor') }}"> <img class="d-block w-100" src="{{asset('/')}}frontend/assets/img/banner3.jpg" alt="Third slide"> </a></div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!-- Start Offers 1 -->
<section class="offers1">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 class="u-font--24 u-margin--0 u-font--bold ">CoSpace From All Area</h2>
                <div class="u-font--16 u-margin--5__top">Hand-picked problem solution for you</div>
            </div>
        </div>

    </div>
</section>
<!--muhin product slider start-->
<style>

</style>

<!--muhin product slider end-->
<!-- End Offers 1 -->
<br>
<br>

<!-- End sell products -->
<!-- End sell products -->
<br>
<br>
<!-- Start Services1 -->
<section class="services1">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-xs-12">
                <a href="#"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/checkup.jpg"> </a>
                <br>
                <br>
                <span> Campus and Department Based Search</span> </div>
            <div class="col-md-4 col-xs-12">
                <a href="{{ route('search.doctor') }}"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/doctor.jpg"> </a>
                <br>
                <br>
                <span>Ideal For Not Time Waste</span> </div>

            <div class="col-md-4 col-xs-12">
                <a href="#"> <img class="img-fluid" src="{{asset('/')}}frontend/assets/img/medicine.jpg"> </a>
                <br>
                <br>
                <span>Good Timing . Relax</span> </div>


        </div>
    </div>
</section>
<!-- End Services1 -->
<br>
<br>
<!-- Start Testimonials -->
<div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light" style="background-color:#2bcbba;">
    <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                    </p>
                    <footer class="blockquote-footer" style="color:#2bcbba;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </p>
                </blockquote>
            </div>
            <div class="carousel-item text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.
                    </p>
                    <footer class="blockquote-footer" style="color:#2bcbba;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                </blockquote>
            </div>
            <div class="carousel-item text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.
                    </p>
                    <footer class="blockquote-footer" style="color:#d2d2d2;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                    <!-- Client review stars -->
                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                    <p class="client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                </blockquote>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>
<!-- End Testimonials -->
<br>
<br> @include('custom.footer')
