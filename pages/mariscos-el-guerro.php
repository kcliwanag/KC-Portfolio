<?php 

    require_once("../functions.php");
    $project_id = 'mariscos-el-guerro';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title="Introduction"><h3>Introduction</h3></a>
        <a href="#experience" class="col" title="My Experience"><h3>My Experience</h3></a>
        <a href="#brand-identity" class="col" title="Brand Identity"><h3>Brand Identity</h3></a>
        <a href="#final" class="col" title="Final"><h3>Final</h3></a>
        <a href="#reflection" class="col" title="Reflection"><h3>Reflection</h3></a>
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
                        <p class="white-text">While travelling to Puerto Vallarta, Mexico – known for its amazing beaches, we discovered a small, local, family restaurant called Mariscos El Güero. Mariscos translated in English is seafood. With their simple, delicious comfort food surrounded by a friendly, welcoming atmosphere and fun, warm tones played by a live mariachi band in the restaurant – I was enjoying the most unforgettable cuisine experience I’ve ever had.</p>
                        <br>
                        <p class="white-text">I chose this amazing restaurant to base the menu redesign for my Graphic Design midterm project. For the menu, I decided to make it fun and trendy to capture the casual and comfortable spirit of the restaurant.</p>
                        <a href="../images/mariscos-img/mariscos-el-guerro-menu.pdf" title="View PDF" target="_blank"><div class="pdf-btn pdf-btn-<?php echo $data['bg_prefix'] ?>">VIEW FULL PDF</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="work-section solid-color-container <?php echo $data['bg_prefix'] ?>-solid-color-bg">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h2 class="white-text">Mariscos El Guerro</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">Mariscos El Güero is a Mexican seafood restaurant located in Puerto Vallarta, a resort city on Mexico’s Pacific coast known for its nice beaches. </h3>
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
</section> -->
<section id="experience" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>My Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Atmosphere</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The local restaurant is quite traditional in style with a small mariachi band playing in the restaurant. It had a friendly, familiar and cozy atmosphere which a lot of families with children come to eat here. For the redesign, I decided to make the style fun, trendy and modern but still capture the casual and comfortable spirit of the restaurant. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-500" src="../images/mariscos-img/audience.jpg" alt="KC's sister happy with a pinepple dish">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-500" src="../images/mariscos-img/audience-2.jpg" alt="KC and family members in Mariscos El Guerro">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="brand-identity" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>Brand Identity</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Colour Scheme</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I used a split-complementary colour scheme with orange, red and turquoise. They create a trendy look and a balance between warm and cool colour temperatures.</p>
                            <br></br>
                            <p>Orange and red also stimulates appetite. Their vibrance and boldness against the turquoise attract attention. Turquoise is referred to as aqua or aquamarine and is often associated with water. So, I used this to represent the ocean for the background colour.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/mariscos-img/mariscos-color-scheme.png" alt="Blue, orange,red and beige colors">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Typography</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Helvetica Neue is used for individual menu items. I chose a sans serif font which is clean and more comfortable to read on the web. I added enough leading for the descriptions, allowing the text to breathe and makes it easier to read.</p>
                            <br><br>
                            <p>For the titles, I used Cucciolo -– a strong bold, hybrid font that creates a modern, fresh look. I changed the kerning to optical to clean up the visual spaces of the big titles.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-300" src="../images/mariscos-img/typography.png" alt="Cucciolo and Helvetica Neue fonts">
        </div>
</section>
<section class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Logo</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>What I believe makes this seafood restaurant special was the culture and atmosphere customers experience while eating there. I wanted to showcase a sombrero as it is worn on festive occasions and is a cultural symbol in Mexico.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/mariscos-img/logo-colored.png" alt="Fish in a sombrero logo">
        </div>
</section>
<section id="final" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>Final</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Menu Re-design</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I designed the layout with an asymmetrical balance for a modern look. I used natural shapes with the negative space of the waves to create movement and a soft, playful feel of the design.</p>

                            <br><br>

                            <p>I decided the focal point to be the titles. To enhance this, I added a drop shadow below the sand-coloured shape, adding depth and creating the illusion that it is lifted off the background. Then, I wanted the image to be the next focal point so it is cropped within a circle to attract attention.</p>

                            <br><br>

                            <p>As a part of the brand, I repeated the fish graphic to incorporate a part of the logo onto the pages. It adds a lively element to each page with its different positioning. Finally, I added a subtle paper-like texture to create visual interest.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid slider-image slider-img" src="../images/mariscos-img/menu-1.png" alt="Front cover menu design">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image slider-img" src="../images/mariscos-img/menu-2.png" alt="Entrees page menu design ">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image slider-img" src="../images/mariscos-img/menu-3.png" alt="Tacos page menu design">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image slider-img" src="../images/mariscos-img/menu-4.png" alt="Drinks page menu design">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reflection" class="work-section white-section reflection">
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
                            <p>Every element and principle of design used in a composition should have purpose and reason as they all contribute to express a certain mood and feeling. Ultimately, a company’s brand should communicate the right perception as well as create a memorable impression and an emotional connection to its consumers.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid" src="../images/mariscos-img/reflect.png" alt="Fish logo on waves graphic">
        </div>
    </div>
</section>

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>