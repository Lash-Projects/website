@extends('layout.partial')
@section('title', 'About')

@section('slider')

<section class="about pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 image animate-box" data-animate-effect="fadeInUp">
                        <div class="img"> <img src="images/about.jpg" alt=""> </div>
                    </div>
                    <div class="col-md-8 image animate-box" data-animate-effect="fadeInUp">
                        <h3>About <span>Lashpixel</span></h3>
                        <p>
                            Emmanuel "Lash" Asaber started his photography journey some {{ $interval }} years 
                            when taking pictures with his Lumia phone later led him to becoming 
                            a professional photographer.
                        </p>
                        <p>
                            He has perfected this craft skillfully
                            bringing to bare the hidden stories behind every image caught by
                            his camera lenses.
                            As a photographer driven with great passion to
                            deliver in a distinctive style,
                            Emmanuel specializes in  
                            Portraits,Fashion,Events and Fine Art/Boudoir photography.
                        </p>
                        <p>
                            He believes every artist is a messenger whose work carries a message
                            and this he depicts vividly in all his work-
                            creating and capturing
                            moments that will forever be remembered.
                        </p>
                        <img src="{{ URL::asset('images/sign.png') }}" class="pozo-about-signature" alt="">
                    </div>
                </row>
                <row>
                    <div class="col-md-12 image animate-box" data-animate-effect="fadeInUp">
                        <!-- Team -->
                        <div class="row mt-60">
                            <div class="col-md-12">
                                <h3>Professional <span>Team</span></h3>
                                <br />
                            </div>
                            <div class="col-md-4">
                                <div class="team-holder">
                                    <div class="team-image-holder"> <img src="{{ URL::asset('images/team/03.jpg') }}" class="img-fluid" alt="">
                                        <div class="team-side-info">
                                            <h4 class="team-name">Akosua </h4>
                                            <h6 class="team-position">MUA &amp; Model</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="team-info-social text-center">
                                    <li><a href="{{ URL::to('https://www.instagram.com/akosua_dampo/') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="team-holder">
                                    <div class="team-image-holder"> <img src="{{ URL::asset('images/team/01.jpg') }}" class="img-fluid" alt="">
                                        <div class="team-side-info">
                                            <h4 class="team-name">Seyram </h4>
                                            <h6 class="team-position">Photographer</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="team-info-social text-center">
                                    <li><a href="{{ URL::to('https://www.instagram.com/theseyram/') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li> -->
                                    <li><a href="{{ URL::to('https://twitter.com/__theSeyram') }}"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-behance" target="_blank"></i></a></li> -->
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="team-holder">
                                    <div class="team-image-holder"> <img src="{{ URL::asset('images/team/02.jpg') }}" class="img-fluid" alt="">
                                        <div class="team-side-info">
                                            <h4 class="team-name">Fiifi </h4>
                                            <h6 class="team-position">Photographer</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="team-info-social text-center">
                                    <li><a href="{{ URL::to('https://www.instagram.com/iam.fiifi/') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ URL::to('https://www.facebook.com/michael.quainoo.96') }}"><i class="fa fa-facebook" target="_blank"></i></a></li>
                                    <li><a href="{{ URL::to('https://twitter.com/_iamfiifi') }}"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-behance" target="_blank"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop