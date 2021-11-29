<?php 

    require_once("../functions.php");
    $project_id = 'time-off';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title="Introduction"><h3>Introduction</h3></a>
        <a href="#ideation" class="col" title="Ideation"><h3>Ideation</h3></a>
        <a href="#branding" class="col" title="Branding"><h3>Branding</h3></a>
        <a href="#site-design" class="col" title="Site Design"><h3>Site Design</h3></a>
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
                        <p class="white-text">Exploring e-commerce, we were tasked to develop an online store concept and produce high-fidelity wireframes, focusing on demonstrating the consumers online purchasing process. On this project, I collaborated with a team of graphic and UX/UI designers, Nick Turda, Tiffany Chu and Hossein Rad. As a team we decided on a fictional direct-to-consumer business that sells matcha green tea in Canada.</p>
                        <a href="https://www.figma.com/proto/1aAhAroxvDX9HByXF07DV7/time%2Foff-matcha?node-id=2%3A2&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A2" title="View Prototypes" target="_blank"><div class="pdf-btn pdf-btn-<?php echo $data['bg_prefix'] ?>">VIEW PROTOTYPES</div></a>
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
                            <h3 class="white-text">Experience organic, high-quality matcha green tea grown from Canadian soil – a first of its kind.</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">Time/off is able to provide consumers with organic high-quality grade matcha without the high cost of traditional tea. Time/off’s goal is to encourage consumers to find time in their day to take some time off and relax. We believe that the process of making a cup of matcha not only helps us slow down but also helps put our minds in peace, even if it’s just a little bit.
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
                            <p>As a team, we first brainstormed the company, its products and the features that we could include on the online store. Because it only specializes in selling matcha, we decided to simplify site by only having a few main pages to guide the customer from the decision to purchasing phase. It is important to consider the customer journey touch points from before, during and after their interaction and purchase with the product.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-700" src="../images/timeoff-img/brainstorm.png" alt="Brainstorming of company and online store">
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
                                <h3 class="color-<?php echo $data['bg_prefix'] ?>">Empathy Map</h3>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <p>I created a flowchart to show the step-by-step checkout process. When checking out, customers can sign-in to an existing account or use the guest checkout. For convenience, those who have an existing account would have their information saved and filled in. They can simply review their order details and press confirm.</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid max-height-700 my-shadow" src="../images/timeoff-img/empathy-map.jpeg" alt="Site map of online store">
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
                                <h3 class="color-<?php echo $data['bg_prefix'] ?>">Flowchart</h3>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <p>I created a flowchart to show the step-by-step checkout process. When checking out, customers can sign-in to an existing account or use the guest checkout. For convenience, those who have an existing account would have their information saved and filled in. They can simply review their order details and press confirm.</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/timeoff-img/timeoff-checkout.svg" alt="Site map of online store">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="branding" class="work-section white-section">
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
                            <p>We viewed other competitors and searched for inspiration for the look and feel of the company's online store. It has a minimalist theme, accompanied by visually appealing images to add texture. We also decided to have a muted, soft green color scheme to match the product. Tiffany designed T/O's teacup logo.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid shadow max-height-700" src="../images/timeoff-img/mood-board.jpg" alt="Mood board for company branding">
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
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid slider-image max-height-500 my-shadow" src="../images/timeoff-img/product-1.jpeg" alt="Time/off Full Matcha Pack">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-500 my-shadow" src="../images/timeoff-img/product-2.jpeg" alt="Time/off Box of Daily Sachets">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-500 my-shadow" src="../images/timeoff-img/product-4.png" alt="Time/off Box of Daily Sachets + Chawan Set">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-500 my-shadow" src="../images/timeoff-img/product-5.jpeg" alt="Time/off Chawan + Chasen Set">
                </div>
            </div>
        </div>
</section>
<section id="site-design" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>Site Design</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Prototypes</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Using Figma, we first designed hi-fidelity wireframes and transformed to protoypes to present the home, shop, product and checkout pages. We also created components such as the cart modal and other overlay features. I worked on the product page and "added to cart" response feature.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-600" src="../images/timeoff-img/prototype.png" alt="Homepage on laptop">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Mobile Responsiveness</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Many consumers nowadays browse online with their mobile devices. It is especially important for an e-commerce site to have a responsive design. I designed the store page and the modal features on a mobile and tablet view as well. I made the navigation into a full screen overlay menu.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-700" src="../images/timeoff-img/mobile.png" alt="Store page hi-fidelity wireframe">
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
                            <p>We added steppers to implement easing onto the checkout page. This divides the process into 3 steps: customer information, shipping and payment details. By having steps, it makes it easier for the customer to complete their order. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image max-height-700" src="../images/timeoff-img/checkout-1.png"  alt="Checkout process UI 1/5">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image max-height-700" src="../images/timeoff-img/checkout-2.png"  alt="Checkout process UI 2/5">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image max-height-700" src="../images/timeoff-img/checkout-3.png"  alt="Checkout process UI 3/5">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image max-height-700" src="../images/timeoff-img/checkout-4.png"  alt="Checkout process UI 4/5">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image max-height-700" src="../images/timeoff-img/checkout-5.png"  alt="Checkout process UI 5/5">
                </div>
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
                            <p>Through this project, I explored and discovered features that are beneficial to implement in an e-commerce site. The users' experience from the landing page, browsing, checkout, to reviewing the product should be designed for the convenience of the customers. Elements such as the FAQ, testimonials and customer support are important to have for increasing credibility and better customer experience.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid" src="../images/timeoff-img/timeoff-reflect.jpeg" alt="matcha tea on rocks background">
        </div>
    </div>
</section>
<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>