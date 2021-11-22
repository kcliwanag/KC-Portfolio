<?php 

    require_once("../functions.php");
    $project_id = 'time-off';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title=""><h3>Introduction</h3></a>
        <a href="#ideation" class="col" title=""><h3>Ideation</h3></a>
        <a href="#branding" class="col" title=""><h3>Branding</h3></a>
        <a href="#wireframes" class="col" title=""><h3>Wireframes</h3></a>
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
                        <p class="white-text">We were tasked to develop an online store concept and produce high-fidelity wireframes to demonstrate the consumers online purchasing process. On this project, I collaborated with a team of graphic and UX/UI designers, Nick Turda, Tiffany Chu and Hossein Rad. As a team we decided on a fictional direct-to-consumer business that sells matcha green tea in Canada.</p>
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
                            <h2 class="white-text">Time / Off</h2>
                        </div>
                    </div> 
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">We supply organic, high-quality tea made from Canada's first tea farm. </h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">Tea is often the product of tropical and subtropical regions. With Canada's extreme temperatures, it is  difficult to grow tea leaves. A tea farm in Victoria, B.C. has successfully planted, grown and harvested them. Time/off's products comes this local supplier and will be sold to Canadians nationwide.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section id="ideation" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>Ideation</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Brainstorming</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>As a team, we first brainstormed the company, its products and the features that we could include on the online store. It is important to understand the customer's journey from before, during and after their interaction and purchase with the product.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/timeoff-img/brainstorm.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Site Map</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Because the company only specializes in selling one product, we decided to have clear and simplified site map. There are only a few main pages to guide the customer from the decision to purchasing phase.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/timeoff-img/brainstorm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section id="branding" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>Branding</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Mood Board</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>We searched for inspiration for the look and feel of the company's online store. It has a minimalist theme and accompanied by visually appealing images to add texture. We also decided to have a muted and soft green color scheme to match the product. Tiffany designed T/O's teacup logo.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/timeoff-img/mood-board.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">3D Mockups</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>These assets are created by Hossein Rad. He used Adobe Dimension with Adobe Photoshop to create 3D product mockups and set them in a realistic scene. These images are used to showcase the products on the online store.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="gallery-slider">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/timeoff-img/product-1.jpeg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/timeoff-img/product-2.jpeg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/timeoff-img/product-4.png" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/timeoff-img/product-5.jpeg" alt="">
                </div>
            </div>
        </div>
</section>
<section id="wireframes" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>Wireframes</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Landing Page</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The ingredients’ measurements will change according to how many servings the user decides to cook. In this way, they can buy and cook just the right amount of food, preventing food waste and saving money.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/timeoff-img/home.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Shop Page</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/timeoff-img/shop.png" alt="">
        </div>
</section>
<section class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Product Page</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the best layout designs, I created a final business card, envelope and letterhead on Adobe InDesign. I ensured to follow best practices and general guidelines for print.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow" src="../images/timeoff-img/product-page.png" alt="">
        </div>
</section>
<section class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Checkout</h3>
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
            <img class="img-fluid" src="../images/cibo-img/cibo-reflect.png" alt="">
        </div>
    </div>
</section>
<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>