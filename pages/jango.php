<?php 

    require_once("../functions.php");
    $project_id = 'jango';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>
<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix']?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#research" title=""><h3>Reasearch</h3></a></div>
        <div class="col"><a href="#design" title=""><h3>Design</h3></a></div>
        <div class="col"><a href="#validation" title=""><h3>Validation</h3></a></div>
        <div class="col"><a href="#final" title=""><h3>Final</h3></a></div>
        <div class="col"><a href="#reflection" title=""><h3>Refelction</h3></a></div>
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
                            <h2 class="white-text">The Challenge</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">How can Jango’s complex functionality be simplified and developed within an intuitive interface?</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">Jango’s most unique feature is that it mimics radio stations but with the ability to customize them to the users’ liking. However, this doesn’t covey immediately to first-time users. The challenge is to re-design the site to be more user-intuitive without sacrificing Jango’s main features and unique functionalities.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section id="research" class="work-section no-h2-bottom">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>Research</h2>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <br><br><br>
                            <p class="main-heading-blurb" >A key part of the design process is conducting user research to understand their needs, goals, and frustrations.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">USER PERSONA</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I created a user persona to articulate Jango's ideal user. This helps to define their behvaiours with music streaming services and identify their needs for a better experience.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding container-fluid">
            <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-user-1.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">SCENARIO</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>In continuing to understand the ideal user, I expanded on the persona and wrote a scenario on <b>how</b> she discovered Jango, <b>why</b> she came to the site and the <b>main tasks</b> she wishes to accomplish on the site.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding container-fluid">
            <img class="img-fluid max-height-1000" src="../images/jango-img/jango-user-2.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">JOURNEY MAP</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Identifying pain points allow us to empathize with users, guiding us to deliver solutions and improve their experience. I created a journey map for the ideal user to further understand and empathize with their pain points throughout their entire interaction.</p>
                            <br><br>
                            <p>This also helps to brainstorm for new and unique opportunities to include in the future state of the site.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding container-fluid">
            <!-- <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-user-3.png" alt=""> -->
            <embed class="shadow" src="../images/jango-img/jango-journey-map.pdf" style="height:1000px; width:1200px">
        </div>
    </div>
</section>
<section id="design" class="work-section no-h2-bottom white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>DESIGN</h2>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <br><br><br>
                            <p class="main-heading-blurb" >After identifying the pain points, I developed low-fidelity wireframes on Adobe XD, implementing the laws of UX in my proposed solutions to improve and solve  these three major issues on the site:</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">CONFUSING NAVIGATION</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Jango includes various pages that are unnecessary under its global navigation. Users can easily be lost and confused when browsing fro music. For example, a user has to go to separate main pages to search for artists from genres or songs. The search function are also inconsistent – some only searches for artists, while another is only for songs.</p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/jango-img/solution-1.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Inconsistent Page Layouts</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Although having the player easily accessible is ideal, it is unnecessary to always have to see the expanded version on every page. The user would have to always scroll down to see the page’s content because it takes up half the screen. Each page also has varying layouts. The artist page for example is split into three columns, stacking the content in the video and related artist sections.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="center">
                        <img class="img-fluid  max-height-1000" src="../images/jango-img/solution-2.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Complex Interface 1/2</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p> Customizing stations may require a user to seek a quick tutorial. There's no option to save a station or to name stations you’ve customized. For those more familiar with customizing playlists and being able to have a list of saved stations, this may be disappointing.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/jango-img/solution-3.1.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Complex Interface 2/2</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p> The shuffling stations feature could be more intuitive and organized. It is difficult to figure out how to remove a station from the shuffle mix. I eventually found out if the small shuffle icon is coloured white, it is in the shuffle. However, there is no option to see a list of what stations are currently being shuffled.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="center">
                        <img class="img-fluid max-height-1000" src="../images/jango-img/solution-3.2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="validation" class="work-section no-h2-bottom white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>VALIDATION</h2>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <br><br><br>
                            <p class="main-heading-blurb">User testing is a valuable stage in the design process. This helps to analyze the users’ behaviours regarding how they interact with the new site design. It determines the success of the solutions and opportunities for improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">INVISION</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>From the wireframes, I built mockups on Adobe Photoshop, creating a more realistic impression of how the new site will look. I then imported them onto InVision to add interactivity and simulate the site’s functionality. The high-fidelity prototypes are shared with users to collect feedback on their experience.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider-container">
            <div class="gallery-slider jango-gallery">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-img/user-test-1.png"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-img/user-test-2.png"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-img/user-test-3.png"  alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-img/user-test-4.png"  alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="final" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>04</h4>
                            <br>
                            <h2>FINAL</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">EXPLORE PAGE</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>Before</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-4.jpg" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">ARTIST PAGE</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>Before</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-4.jpg" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">STATION PLAYER</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>Before</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-4.jpg" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">MIX STATIONS</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>The design process begins with initial ideas. After sketching out thumbnails on paper, I chose the best 5 and digitally re-created their shapes on Adobe Illustrator.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>Before</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid shadow max-height-1000" src="../images/jango-img/jango-final-4.jpg" alt="">
                    </div>
                </div>
            </div>
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