@extends('layout.partial')
@section('title','Gallery')

@section('slider')

<div class="pozo-section pt-130">
    <div class="container">
        <div class="row mb-4">
            <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                <h4>Gallery</h4>
            </div>
            <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/35.jpg" data-caption="The May Project"> <img class="img-fluid" src="images/gallery/35.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/36.jpg" data-caption="Sarah Vanderbek"> <img class="img-fluid" src="images/gallery/36.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/45.jpg" data-caption="Agape - Graduations"> <img class="img-fluid" src="images/gallery/45.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/38.jpg" data-caption="Sarah Vanderbek"> <img class="img-fluid" src="images/gallery/38.jpg" alt="" /> </a>
                </figure>
            </div>
            <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/44.jpg" data-caption="Juliana - The May Project"> <img class="img-fluid" src="images/gallery/44.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/40.jpg" data-caption="Sarah Vanderbek"> <img class="img-fluid" src="images/gallery/40.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/41.jpg" data-caption="Adjoa Dede Kosi - Apex360"> <img class="img-fluid" src="images/gallery/41.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/47.jpg" data-caption="Priscilla - Graduations"> <img class="img-fluid" src="images/gallery/47.jpg" alt="" /> </a>
                </figure>
            </div>
            <div class="col-6 col-lg-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/42.jpg" data-caption="Stephanie Donkor"> <img class="img-fluid" src="images/gallery/42.jpg" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="images/gallery/43.jpg" data-caption="Nuseadeli Agordo"> <img class="img-fluid" src="images/gallery/43.jpg" alt="" /> </a>
                </figure>
                <figure>
                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/39.jpg" data-caption="Sarah Vanderbek"> <img class="img-fluid" src="images/gallery/39.jpg" alt="" /> </a>
                </figure>
                <figure>
                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/37.jpg" data-caption="Sarah Vanderbek"> <img class="img-fluid" src="images/gallery/37.jpg" alt="" /> </a>
                </figure>
            </div>
        </div>
        <div class="row mb-4 align-items-stretch mt-60">
            <div class="col-12">
                <!-- show more -->
                <div class="pozo-show-more-container">
                    <div class="row align-items-stretch pozo-photos" id="pozo-section-photos">
                        <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/12.jpg" data-caption="Vestibulum leo velit"> <img class="img-fluid" src="images/gallery/12.jpg" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/05.jpg" data-caption="Etiam imperdiet hendrerit"> <img class="img-fluid" src="images/gallery/05.jpg" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/13.jpg" data-caption="Nulla turpis elementum"> <img class="img-fluid" src="images/gallery/13.jpg" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/06.jpg" data-caption="Pellentesque habitant"> <img class="img-fluid" src="images/gallery/06.jpg" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-6 col-lg-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="images/gallery/14.jpg" data-caption="Quisque in felis"> <img class="img-fluid" src="images/gallery/14.jpg" alt="" /> </a>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- add more -->
                <!-- <div class="pozo-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                    <a href="index.html#" class="pozo-more-trigger flex"> <span class="plus flex-center">&nbsp;</span> </a>
                </div> -->
            </div>
        </div>
    </div>
</div>

@stop