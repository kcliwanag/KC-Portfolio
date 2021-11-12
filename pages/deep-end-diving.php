<?php 

    require_once("../functions.php");
    $project_id = 'deep-end-diving';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#logo" title=""><h3>Logo</h3></a></div>
        <div class="col"><a href="#3d-mockup" title=""><h3>3D Mockup</h3></a></div>
        <div class="col"><a href="#stationery-set" title=""><h3>Stationery Set</h3></a></div>
        <div class="col"><a href="#reflection" title=""><h3>Reflection</h3></a></div>
    </div>
</div> 

<section id="introduction" class="relative">
    <div class="gradient-bg <?php echo $data['bg_prefix'] ?>-gradient"></div>
    <div class="parallax container-fluid <?php echo $data['bg_prefix'] ?>-intro work-intro">
        <div class="center-wrapper" data-aos="fade-up">
            <div class="section-text-wrapper">
                <div class="row work-section">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <h2 class="white-text">Introduction</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <p class="white-text">Diving is a fictitious company owned by diving professionals. They offer scuba diving courses as well as rent out and sell gear, equipment and apparel for divers, snorkelers, swimming and other water sports. One of their best sellers is their protective wet suits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="logo" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>Logo</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Thumbnails</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="gallery-slider deepend-logo-gallery">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/thumb-1.svg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/thumb-2.svg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/thumb-3.svg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/thumb-4.svg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/thumb-5.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">ROUGHS</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="gallery-slider deepend-logo-gallery">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-3.svg"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-4.svg"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-5.svg"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-6.svg"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-1.svg"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-2.svg"  alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Final</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-500" src="../images/deepend-img/SVG/final.svg" alt="">
        </div>
    </div>
</section>
<section id="3d-mockup" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>3D MOCKUP</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">ADOBE DIMENSION</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/deepend-img/KCLiwanag_PosterMockup.png" alt="">
        </div>
    </div>
</section>
<section id="stationery-set" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>STATIONERY SET</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Ideation</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                            <a href="#" class="hover-underline-animation  line-color-<?php echo $data['bg_prefix'] ?> color-<?php echo $data['bg_prefix'] ?>">VIEW PDF</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow max-height-1000" src="../images/deepend-img/deep-end-mood-board.png" alt="">
        </div>
    </div>
</section>
<section class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Deliverables</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center pb-5 side-padding">
            <div class="front-img">
                <img class="img-fluid shadow max-height-500" src="../images/deepend-img/business-card2.png"  alt="">
                <img class="img-fluid shadow img-top max-height-500" src="../images/deepend-img/business-card-1.png" alt="">
            </div>
        </div>
        <div class="center pb-5 side-padding">
            <div class="front-img">
                <img class="img-fluid shadow" src="../images/deepend-img/envelope-1.png" alt="">
                <img class="img-fluid shadow img-top" src="../images/deepend-img/envelope-2.png" alt="">
            </div>
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/deepend-img/letterhead.png" alt="">
        </div>
    </div>
</section>
<section id="reflection" class="work-section">
    <div data-aos="fade-up" >
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row  ">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>04</h4>
                            <br>
                            <h2>Reflection</h2>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">What I've Learned</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid shadow" src="../images/deepend-img/KC_Liwanag_StationeryMockups.jpg" alt="">
        </div>
    </div>
</section>

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>