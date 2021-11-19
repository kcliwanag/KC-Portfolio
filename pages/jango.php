<?php 

    require_once("../functions.php");
    $project_id = 'jango';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>
<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix']?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#research" title=""><h3>Research</h3></a></div>
        <div class="col"><a href="#design" title=""><h3>Design</h3></a></div>
        <div class="col"><a href="#validation" title=""><h3>Validation</h3></a></div>
        <div class="col"><a href="#final" title=""><h3>Final</h3></a></div>
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
            <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/jango-user-1.png" alt="">
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
            <embed class="my-shadow" src="../images/jango-img/jango-journey-map.pdf" style="height:1000px; width:1200px">
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
                            <p>I organized the “Find Artists” and “Find Songs” under one main page that is specifically for browsing music. The global and local navigation are seen as two separate groups,which makes it easier to understand.</p>
                            <br><br>
                            <p>Instead of a dropdown menu, the main navigation is on the top so that the primary pages and features the site offers are visible right away. The active page is also highlighted with a different colour to clearly show which page the user is currently viewing</p>
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
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/before-1.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/after-1.png" alt="">
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
                            <p>With the three columns of different categories of information about the artist, it is quite overwhelming to see them all on one page. Instead, I separated each category so that users can focus on one category of information at a time. I also removed the unnecessary local navigation on the first column as it had the same content or the pages it led to had barely anything in it.</p>
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
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/before-2.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/after-2.png" alt="">
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
                            <p>Instead of simply names, I put an image of the artist to their names so that users can easily identify who they are as well as to create visual appeal</p>
                            <br><br>
                            <p>Customizing a station means adding or removing artists being played from that station. Users may find this difficult to do within a small space. Now, adding artists can be done on the expanded station player page itself. In this way, there is more room, creating a much cleaner look and it is very clear which station is being edited.</p>
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
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/before-3.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/after-3.png" alt="">
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
                            <p>Instead of the small on/off shuffle buttons at the bottom right of each station, I added a hover state over the whole station where it will show an option to "Add to mix" or "Remove from mix" if it has already been added</p>
                            <br><br>
                            <p>The mixing station page was hidden within the "customize station" fly out menu. This is a unique feature that should be visible and easily accessible. So, I added this on the main navigation. I also created a fly out "mixer" that lists out the current stations that are alternating.</p>
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
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/before-4.png" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 before-after-img">
                    <h4>After</h4>
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/jango-img/after-4.png" alt="">
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
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">What I've Learned</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p><b>The success of a product’s design is determined by its users.</b></p>
                            <p>I learned the importance of user-centred design. From the start of a project to the result, every decision should be made with the end-users in mind. Creating user personas, scenarios and journey maps allowed me to empathize with the target audience and have a better understanding of the ideal user’s goals and frustrations. It has greatly helped me build solutions for the pain points of Jango’s current site. User testing with my prototypes was another valuable experience for me as this showed me whether or not my solutions improved the issues.</p>
                            <br><br>
                            <p>I gained a lot of insights throughout this project. However, this journey doesn’t end here. This design will need more iterations, going through the process of reevaluating design, finding new difficulties and building new solutions, all of which keeping the users as the focus throughout the journey of improving user experience.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid max-height-1000" src="../images/jango-img/jango-reflect.png" alt="">
        </div>
    </div>
</section>




<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>