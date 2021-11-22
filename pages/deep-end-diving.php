<?php 

    require_once("../functions.php");
    $project_id = 'deep-end-diving';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title=""><h3>Introduction</h3></a>
        <a href="#logo" class="col" title=""><h3>Logo</h3></a>
        <a href="#3d-mockup" class="col" title=""><h3>3D Mockup</h3></a>
        <a href="#stationery-set" class="col" title=""><h3>Stationery Set</h3></a>
        <a href="#reflection" class="col" title=""><h3>Reflection</h3></a>
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
                        <p class="white-text">As a graphic designer, I created branding assets for a company using Adobe Illustrator, Photoshop, InDesign and Dimension.</p>
                        <br><br><br>
                        <p class="white-text"><i>Deep-End Diving is a fictitious company owned by diving professionals. They offer scuba diving courses and sell gear, equipment and apparel for divers, snorkelers, swimming and other water sports.</i></p>
                        <br>
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
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 to digitally re-create on Adobe Illustrator. Each logo has elements that signify diving or the ocean.</p>
                            <a href="../images/deepend-img/thumbnails-meanings.pdf" title="View PDF" target="_blank" class="hover-underline-animation  line-color-<?php echo $data['bg_prefix'] ?> color-<?php echo $data['bg_prefix'] ?>"><i>What do these logos represent?</i></a>
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
                            <p>I narrowed it down to the three best logos. I incorporated colour and effects such as gradients and gradient mesh. They are fine-tuned and cleanly built with no overlapping shapes – creating killer logos!</p>
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
                    <img class="img-fluid slider-image" src="../images/deepend-img/SVG/rough-2.jpg"  alt="">
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
                            <p>Ultimately, the diving turtle logo best represent the company. The turtle’s shell signifies the protection and safety of their products. I used geometric shapes to illustrate an edgy look and feel. This logo can withstand any size, media, texture and colour. </p>
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
                            <p>I created water bottle mockups with material, colour, texture and the final logo. The products are placed in a beach background with a water splash element. To make it as realistic as possible, I matched the product lighting with the beach scene's lighting.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid my-shadow" src="../images/deepend-img/KCLiwanag_PosterMockup.png" alt="">
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
                            <p>To build its visual identity system, I first explored inspirations and finalized the brand look and feel on a mood board. I then sketched thumbnails and digitalized roughs for the set items' layout design.</p>
                            <a href="../images/deepend-img/stationery_ideation.pdf" title="View PDF" target="_blank" class="hover-underline-animation  line-color-<?php echo $data['bg_prefix'] ?> color-<?php echo $data['bg_prefix'] ?>"><i>What does the full process look like?</i></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid my-shadow max-height-1000" src="../images/deepend-img/deep-end-mood-board.png" alt="">
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
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center pb-5 side-padding">
            <div class="front-img">
                <img class="img-fluid my-shadow max-height-300" src="../images/deepend-img/business-card-1.png"  alt="">
                <img class="img-fluid my-shadow img-top max-height-500" src="../images/deepend-img/business-card-2.png" alt="">
            </div>
        </div>
        <div class="center pb-5 side-padding">
            <div class="front-img">
                <img class="img-fluid my-shadow  max-height-500" src="../images/deepend-img/envelope-1.png" alt="">
                <img class="img-fluid my-shadow img-top" src="../images/deepend-img/envelope-2.png" alt="">
            </div>
        </div>
        <div class="center side-padding">
            <img class="img-fluid my-shadow" src="../images/deepend-img/letterhead.png" alt="">
        </div>
    </div>
</section>
<section id="reflection" class="work-section reflection">
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
                            <p>Branding is about creating the right perception for its audience. For Deep End Diving, I wanted to present a clean, sleek and professional tone.</p>
                            <br>
                            <p>Having consistency with the elements used creates unity to the brand's identity system. Thus, establishing brand guidelines is important in a design process.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid my-shadow" src="../images/deepend-img/KC_Liwanag_StationeryMockups.jpg" alt="">
        </div>
    </div>
</section>

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>