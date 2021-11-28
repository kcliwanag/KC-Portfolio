<?php 

    require_once("../functions.php");
    $project_id = 'cibo';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title="Introduction"><h3>Introduction</h3></a>
        <a href="#the-market" class="col" title="The Market"><h3>The Market</h3></a>
        <a href="#ideation" class="col" title="Ideation"><h3>Ideation</h3></a>
        <a href="#prototypes" class="col" title="Prototypes"><h3>Prototypes</h3></a>
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
                        <p class="white-text">As a food enthusiast and a novice home cook myself, I've tried many recipe apps – most are quite similar and already have the main features I am looking for. Although some apps aim to tackle the costly issue of food waste, many more could advocate for this environmental concern.</p>
                        <br>
                        <p class="white-text">I've proposed a kitchen app solution with features that both value and benefit the end-users as well as the environment. I collaborated with a team of UX / UI designers, Nick Turda, Tiffany Chu and Christine Le to design the app's processes and interfaces. </p>
                        <a href="../images/cibo-img/cibo-app-pitch.pdf" title="View PDF" target="_blank"><div class="pdf-btn pdf-btn-<?php echo $data['bg_prefix'] ?>">VIEW FULL PDF</div></a>
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
                            <h3 class="white-text">Through CIBO, we serve our environment by helping you save money and prevent food waste.</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">CIBO is more than a digital cookbook app. It is a kitchen organization tool that will help home cooks be more efficient and save money while integrating eco-friendly practices into their daily life. CIBO would have beneficial features that encourage users to be mindful of their food waste by helping them with keeping track of ingredients portioning, and using up leftovers.
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Viability</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The global recipe apps market expects to see a compound annual growth rate of 16% over the next eight years. The impact of COVID-19 has especially affected growth trajectory of user downloads. The key players successfully fulfills the primary needs of this market’s general users. However, there is room to compete in this existing space by targeting a niche audience.</p>
                            <br><br>
                            <p>Food waste heavily impacts the environment and is a cause for concern. Developing a competitive app with a focus on reducing food waste would be a unique selling proposition.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12 ">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/cibo-img/viability.jpeg" alt="Recipe Apps Market chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="the-market" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Audience</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>CIBO would appeal to cooks who are more environmentally or budget conscious. I've created two personas to empathize and understand the frustrations, goals and motivations of the app's ideal users. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/cibo-img/audience-1.png" alt="Busy Single Parent persona">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/cibo-img/audience-2.png" alt="Cost-conscious Student persona">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Competitors</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I explored major recipe apps to analyze their strengths and weaknesses.This helps to recognize how we can refine and enhance CIBO's business strategy to compete within the market.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-4 pb-3">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/cibo-img/competitor-1.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 pb-3">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/cibo-img/competitor-2.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 pb-3">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/cibo-img/competitor-3.png" alt="">
                    </div>
                </div>
            </div>
        </div> -->
        <div class="slider-container">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/competitor-1.png" alt="Yummy App Review">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/competitor-2.png" alt="Mealime App Review">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/competitor-3.png" alt="Tasty App Review">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Revenue Streams</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>CIBO will be based on a freemium model template which will be subscription based,  supplemented by data monetization. The memberships will be categorize as Basic (Free) and Subscribed (Full Access) for advanced features. Below is the market positioning of CIBO against major competitors in the market </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-600" src="../images/cibo-img/position.png" alt="CIBO's marketing position">
        </div>
    </div>
</section>
<section id="ideation" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>Ideation</h2>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <br><br><br>
                            <p class="main-heading-blurb">After the research and brainstorming process, I created low-fidelity wireframes to illustrate the ideas and additional features that would solve user needs and facilitate in reducing food waste.</p>
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
            <img class="img-fluid max-height-700" src="../images/cibo-img/wireframe-1.png" alt="Customize servings wireframe">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Track Ingredients</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Users can list down expiration dates of fridge and pantry items that they have. In this way, they can monitor and use up the food nearing expiration first. Having this list can also prevent buying any duplicates of ingredients.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-700 " src="../images/cibo-img/wireframe-2.png" alt="My Fridge wireframe">
        </div>
</section>
<section class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Filter Recipes</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Users can input ingredients or food items in the search bar. They can discover recipes that include the ingredients want to cook with or exclude depending on user preferences. The search algorithm will also recommend ideal recipes based on what is currently in the users’ ‘My Fridge’ feature.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-700 " src="../images/cibo-img/wireframe-4.png" alt="Filter recipes wireframe">
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
                            <p>The app will also include storing tips and information on how long different food items last. Users can also be notified when a food item is nearing expiration as well as give tips or find recipes that include that item.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid max-height-700" src="../images/cibo-img/wireframe-3.png" alt="CIBO notification wireframes">
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
                            <p>Onboarding starts with prompting new users to create an account for saving user preferences. After, they are introduced to the great benefits of CIBO. This welcome carousel helps new users to acclimate to the app's features. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="single-item">
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/onboard-2.png" alt="Welcome carousel 1/3">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/onboard-3.png" alt="Welcome carousel 2/3">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/onboard-4.png" alt="Welcome carousel 3/3">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/onboard-1.png" alt="Create an account screen">
                </div>
            </div>
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
                            <p>At the top-level navigation of the app, users have quick access to explore recipes, the 'My Fridge' feature to track their ingredients, saved recipes and details to their personal account.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="single-item">
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-2.png" alt="Explore Tab">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-3.png" alt="My Fridge Tab">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-1.png" alt="Saved Recipes Tab">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-4.png" alt="My Account Tab">
                </div>
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Adding To Fridge</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>To add a new ingredient into the fridge, you have to first tap the (+) button. This will bring up an interface to add details about the ingredient such as item name, description, item type and expiry date. Once completed, tap add item. This will be added to the users' 'My Fridge' where all stored ingredients are tracked. </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="single-item">
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-2.png" alt="Explore Tab">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/onboard-5.png" alt="Add An Ingredient feature ">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image max-height-700" src="../images/cibo-img/major-3.png" alt="My Fridge Tab">
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
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">What I've Learned</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>There are many business factors to consider in developing a mobile app. With the numerous app products in the market, a unique selling proposition is important to have. The concept and design should provide value and appeal for its users. </p>
                            <br>
                            <p>As a UX / UI designer, I brainstormed features and how to simplify its processes for users to have a better experience with CIBO. I was able to craft ideas and solutions by understanding a homecook's common issues in the  kitchen.  </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid" src="../images/cibo-img/cibo-reflect.png" alt="CIBO App background">
        </div>
    </div>
</section>


<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>