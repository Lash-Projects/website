@extends('layout.partial')
@section('title','Contact')

@section('slider')

<div class="next-section-contact pt-130">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <!-- Map -->
                        <div id="contactMap"></div>
                    </div>
                    <!-- Info -->
                    <div class="col-md-6 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Phone</h4>
                        <p>+233 503-123-939</p>
                        <h4>Email</h4>
                        <p>lashpixel@gmail.com</p>
                        <h4>Address</h4>
                        <p>PT 192, Race Course Ridge, Takoradi.</p>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-6 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <div>
                            <h4>Drop me a line!</h4>
                        </div>
                        <form method="post" class="row">
                            <div class="col-sm-6">
                                <div class="pozo-form-component">
                                    <input type="text" name="name" id="name" placeholder="Full Name" required=""> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pozo-form-component">
                                    <input type="email" name="email" id="email" placeholder="Email" required=""> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="pozo-form-component">
                                    <textarea name="message" id="message" cols="40" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit">Say Hello.</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop

@section('pre-script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnmT-KVOjZZ4FOmIhtvNq2dCkr182i_Ls"></script>
@stop
@section('post-script')
<script src="js/plugins/googlemap.js"></script>
@stop