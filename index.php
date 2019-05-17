<?php

define("TITLE", "Home | Honor Roll Skate Crew");

include('includes/header.php')

?>

    <div class="jumbotron jumbotron-fluid" id="slide">
        <div class="container">
            <hr>
            <h1 class="display-4 contactTitle">Honor Roll Skate Crew</h1>
            <hr>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/HNRL_silly.png" class="d-block w-100" height="700px" width="600px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>blah blah blah</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/HNRL_outside.png" class="d-block w-100" height="700px" width="600px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>blah blah blah</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/NASCAR.png" class="d-block w-100" height="700px" width="600px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>blah blah blah</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <p>just want to see if this works</p>
        </div>
    </div>




<?php include('includes/footer.php') ?>