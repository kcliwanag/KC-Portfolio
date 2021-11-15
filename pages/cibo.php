<?php 

    require_once("../functions.php");
    $project_id = 'cibo';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#the-market" title=""><h3>The Market</h3></a></div>
        <div class="col"><a href="#ideation" title=""><h3>Ideation</h3></a></div>
        <div class="col"><a href="#prototypes" title=""><h3>Prototypes</h3></a></div>
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
                        <p class="white-text">Music and songwriting had always been important in my life. I often get my inspiration through listening to and exploring new music. Thus, learning about the features of Jango and its unlimited, ad-free music intrigued me.</p>
                        <br>
                        <p class="white-text">As a UX student and a music enthusiast, I saw the potential to improve Jango’s site and its functionality for a better and more unique experience. In this case study, I analyze the current site, identify problems, understand its ideal users and find solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-section solid-color-container <?php echo $data['bg_prefix'] ?>-solid-color-bg">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h2 class="white-text">VALUE PROPOSITION</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">Through Cibo, we serve our environment by helping you save money and prevent food waste.</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">Cibo is more than a digital cookbook app. It is a kitchen organization tool that will help home cooks be more efficient and save money by keeping track of the ingredients they already have. 
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section id="the-market" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>THE MARKET</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Target Audience</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/audience-1.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/audience-2.png" alt="">
                    </div>
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Competitors</h3>
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Revenue Streams</h3>
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
<section id="ideation" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>Ideation</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Customize serving size</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The ingredients’ measurements will change according to how many servings the user decides to cook. In this way, they can buy and cook just the right amount of food, preventing food waste and saving money.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
        </div>
    </div>
</section>
<section class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Track Ingredients</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
        </div>
</section>
<section class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Be Notified</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
        </div>
</section>
<section id="prototypes" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>Prototypes</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Onboarding</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The ingredients’ measurements will change according to how many servings the user decides to cook. In this way, they can buy and cook just the right amount of food, preventing food waste and saving money.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Major Views</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
        </div>
</section>
<section class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Adding To Fridge</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
        </div>
</section>
<section id="reflection" class="work-section white-section">
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
            <img class="img-fluid" src="../images/cibo-img/cibo-reflect.png" alt="">
        </div>
    </div>
</section>


<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>