<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="overlay js-overlay-campaign">
    <div class="popup js-popup-campaign">
        <h2>Please fill in the form for download the file.</h2>
        <?php
        $form = ActiveForm::begin([]); ?>

        <?= $form->field($model, 'name'); ?>

        <?= $form->field($model, 'email'); ?>

        <div class="form-group">
            <?= Html::submitButton('Download', ['class' => 'btn btn-primary js-close-campaign']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <div class="close-popup js-close-campaign"></div>
    </div>
</div>

<div class="homepage-hero-module">
    <div class="video-container">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-text text-center">
                        <h1>Your Favorite One Page Multi Purpose Template</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.</p>
                        <a href="#" class="btn btn-large">Find out more</a>
                    </div>
                </div>
            </div>
            <video autoplay loop class="fillWidth">
                <source src="/media/Love-Coding.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                <source src="/media/Love-Coding.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                <source src="/media/Love-Coding.ogv" type="video/ogv" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
            <div class="poster hidden">
                <img src="/media/Love-Coding.jpg" alt="">
            </div>
    </div>
</div>

<section id="features" class="features section" >
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-tools"></span>
                    <div class="feature-content">
                        <h5>Easily Customised</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-desktop"></span>
                    <div class="feature-content">
                        <h5>Responsive Ready</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-lightbulb"></span>
                    <div class="feature-content">
                        <h5>Modern Design</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-genius"></span>
                    <div class="feature-content">
                        <h5>Clean Code</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-briefcase"></span>
                    <div class="feature-content">
                        <h5>Ready to Ship</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 feature text-center fadeIn">
                <div class="features">
                    <span class="icon icon-download"></span>
                    <div class="feature-content">
                        <h5>Download for Free</h5>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works" class="works section no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-1.jpg" class="work-box" target="_blank">
                    <img src="/images/work-1.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-2.jpg" class="work-box" target="_blank">
                    <img src="/images/work-2.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-3.jpg" class="work-box" target="_blank">
                    <img src="/images/work-3.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-4.jpg" class="work-box" target="_blank">
                    <img src="/images/work-4.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-5.jpg" class="work-box" target="_blank">
                    <img src="/images/work-5.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-6.jpg" class="work-box" target="_blank">
                    <img src="/images/work-6.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-7.jpg" class="work-box" target="_blank">
                    <img src="/images/work-7.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work fadeIn">
                <a href="/images/work-8.jpg" class="work-box" target="_blank">
                    <img src="/images/work-8.jpg" alt="" id="flip">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <h5>Project Name</h5>
                            <p>Website Design</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <ul class="slides">
                <li>
                    <div class="col-md-6 animated movLeft">
                        <div class="avatar">
                            <img src="/images/testimonial-2.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 animated movRight">
                        <blockquote>
                            <p>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur...."
                            </p>
                            <cite class="author">Susan Sims, Interaction Designer at XYZ</cite>
                        </blockquote>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="download" class="section download">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Are You Ready to Start? Download Now For Free!</h3>
            <p>Fusce dapibus, tellus ac cursus commodo</p>
            <a href="https://github.com/kamalcha/ActiveBox/archive/master.zip" class="btn btn-large">Download for Free</a>
        </div>
    </div>
</section>



