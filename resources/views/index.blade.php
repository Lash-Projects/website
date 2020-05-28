@extends('layout.partial')
@section('title', 'Home')

@section('slider')

<div class="container">
    <section class="pozo-section-slider pt-130">
        <div class="next-container-center">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-block">
                            <div class="swiper-slide-block-img" data-swiper-parallax-y="70%">
                                <a href="project-page-2.html"><img src="images/slider/1.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide-block-text">
                                <h2 data-swiper-parallax-x="-60%" class="next-main-title">The May Project</h2>
                                <h3 data-swiper-parallax-x="-50%" class="next-main-subtitle">Takoradi, Ghana</h3>
                                <p data-swiper-parallax-x="-40%" class="next-paragraph">
                                    Collaborated on our project for May with The Blvck Creator, Stevs Photography and Dallas Kobby. <br />
                                    Makeup - GlamsUp Gh <br />
                                    Models - Juliana, Sheilla, Esi Oyeman
                                </p> 
                                <!-- <a data-swiper-parallax-x="-30%" class="next-link" href="project-page-2.html">Discover</a>  -->
                                <!-- <span data-swiper-parallax-y="60%" class="next-number animate-box" data-animate-effect="fadeInUp">1</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-block">
                            <div class="swiper-slide-block-img animate-box" data-animate-effect="fadeInLeft" data-swiper-parallax-y="70%">
                                <a href="project-page.html"> <img src="{{ URL::asset('images/slider/3.jpg') }}" alt=""> </a>
                            </div>
                            <div class="swiper-slide-block-text animate-box" data-animate-effect="fadeInRight">
                                <h2 data-swiper-parallax-x="-60%" class="next-main-title">Sarah Vanderbek</h2>
                                <h3 data-swiper-parallax-x="-50%" class="next-main-subtitle">Model, Ghana</h3>
                                <p data-swiper-parallax-x="-40%" class="next-paragraph">
                                    Worked on this amazing project with The Bluelens Studio from Ghana. Set design by The Blvck Creator
                                </p> 
                                <!-- <a data-swiper-parallax-x="-30%" style="z-index: 5;" class="next-link" href="project-page.html">Discover</a>  -->
                                <!-- <span data-swiper-parallax-y="60%" class="next-number">2</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next animate-box" data-animate-effect="fadeInRight"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </div>
                <div class="swiper-button-prev animate-box" data-animate-effect="fadeInLeft"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </div>
            </div>
        </div>
    </section>
</div>

@stop

@section('gallery')

<div class="pozo-section">
            <div class="container">
                <div class="row mb-4">
                    <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h4>Recent <span>Shots</span></h4>
                    </div>
                    <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/01.jpg" data-caption="Quisque in felis"> <img class="img-fluid" src="images/gallery/01.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/02.jpg" data-caption="Pellentesque habitant"> <img class="img-fluid" src="images/gallery/02.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/11.jpg" data-caption="Curabitur convallis"> <img class="img-fluid" src="images/gallery/11.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/03.jpg" data-caption="Quisque in dolor"> <img class="img-fluid" src="images/gallery/03.jpg" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/18.jpg" data-caption="Aliquam non luctus"> <img class="img-fluid" src="images/gallery/18.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/17.jpg" data-caption="Quality in felis"> <img class="img-fluid" src="images/gallery/17.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/16.jpg" data-caption="Vivamus a nisi"> <img class="img-fluid" src="images/gallery/16.jpg" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/08.jpg" data-caption="Mauris pretium"> <img class="img-fluid" src="images/gallery/08.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/09.jpg" data-caption="Nunc blandit purus"> <img class="img-fluid" src="images/gallery/09.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/07.jpg" data-caption="Nunc ultrices tellus"> <img class="img-fluid" src="images/gallery/07.jpg" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="images/gallery/19.jpg" data-caption="Orci varius natoque"> <img class="img-fluid" src="images/gallery/19.jpg" alt="" /> </a>
                        </figure>
                    </div>
                </div>
                <!-- show more -->
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
                        <div class="pozo-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                            <a href="index.html#" class="pozo-more-trigger flex"> <span class="plus flex-center">&nbsp;</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop