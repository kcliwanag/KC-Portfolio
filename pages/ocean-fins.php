<?php 

    require_once("../functions.php");
    $project_id = 'ocean-fins';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <a href="#introduction" class="col" title="Introduction"><h3>Introduction</h3></a>
        <a href="#research" class="col" title="Research"><h3>Research</h3></a>
        <a href="#ideation" class="col" title="Ideation"><h3>Ideation</h3></a>
        <a href="#design" class="col" title="Design"><h3>Design</h3></a>
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
                        <p class="white-text">An information architect’s role is to understand the needs of the end-user by incorporating a methodical process and designing strategies for the site’s structure – ultimately creating a positive user experience.</p>
                        <br><br>
                        <p class="white-text">I developed a design brief for a fictional non-profit agency called ‘Ocean Fins, proposing an improved site structure to help achieve their goals and express their important cause. This project is a collaboration with my team members, Sarah Richardson and Michelle Cheng.</p>
                        <a href="../images/oceanfins-img/IA-design-brief.pdf" title="View PDF" target="_blank"><div class="pdf-btn pdf-btn-<?php echo $data['bg_prefix'] ?>">VIEW FULL PDF</div></a>
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
                            <h2 class="white-text">Ocean Fins</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">“Education and action is the key to promoting change.”</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">Ocean Fins is a global non-profit conservation agency, advocating for the protection of ocean habitat with the focus on whale species via education and business partnerships.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>

<section id="research" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>Research</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Audience</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>After defining the company’s goals, focusing on the donation aspect, we explored the primary and secondary audience as well as their main tasks on the site.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <div class="row side-padding container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/audience-1.png" alt="Primary Audience: Working Professionals">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-3">
                    <div class="center">
                        <img class="img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/audience-2.png" alt="Secondary Audience: Post-Secondary Students">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">USER PERSONAS</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>These are created to present the ideal users’ behaviours, interests, needs and motivators. They help align the strategy and goals of the site to their specific user groups.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="single-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/persona-2.png"  alt="Wildlife Enthusiast Persona">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/persona-1.png"  alt="Innovative Leader Persona">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/persona-3.png"  alt="Marine Biologist Professor Persona">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">SITE STATISTICS</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>We collected statistics of the existing ‘Ocean Fins’ site from third-party tools such as Google Analytics, MailChimp and website graders. Analyzing these statistics will help us to understand the end-users and determine the weak components of the site. We can then provide solutions to optimize and improve it.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/stats1.png"  alt="Existing Site Statistics">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/stats2.png"  alt="Email Campaign Statistics">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/stats3.png"  alt="Third Party Analysis">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">COMPETITIVE ANALYSIS</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>We performed a competitive analysis other ocean conservation agency sites to compare and understand their competitors’ strengths and weaknesses. By doing this, we can avoid errors as well as gather inspiration to identify opportunities for new features and improvements.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/competitive-1.png"  alt="Oceanic Preservation Society Site Analysis">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/competitive-2.png"  alt="Sea Sheperd Site Analysis">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/competitive-3.png"  alt="Save The Whales Site Analysis">
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
                            <h4>02</h4>
                            <br>
                            <h2>Ideation</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Site Map</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>A concept map was developed surrounding oceanic protection to generate possible content, labels, metaphors, facets, indexing, categories, and tags. It allowed us to decide which are the most or least important topics and information as we organize the site map of the new site.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/site-map.png" alt="">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Donation Flowchart</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>We created a flowchart to visually present the complex donation process step by step. I also suggested SEO improvements and metadata to increase website traffic.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <embed class="my-shadow" src="../images/oceanfins-img/donation-flowchart.pdf" alt="Donation Flowchart" style="height:1000px; width:1000px">
        </div>
    </div>
</section>
<section id="design" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>03</h4>
                            <br>
                            <h2>Design</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Desktop Wireframes</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I created desktop and mobile low-fidelity wireframes for the new site. We use these diagrams to confirm the labels and structure with the client which is then passed on to the designer to create mock-ups and style tiles.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/desktop-1.png"  alt="Learn page wireframe">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/desktop-2.png"  alt="Donate page 1/3">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/desktop-3.png"  alt="Donate page 2/3">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/desktop-4.png"  alt="Donate page 3/3">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Mobile Wireframes</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I put focus on the donation aspect by keeping the donate button prominent and accessible throughout the site’s pages. The donation process is split into three smaller and more manageable steps, implementing easing to reduce its complexity.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container slider-container slider-<?php echo $data['bg_prefix'] ?>">
            <div class="three-item">
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/mobile-1.png"  alt="Home page wireframe">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/mobile-2.png"  alt="Learn page wireframe">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/mobile-3.png"  alt="Donate page wireframe 1/2">
                </div>
                <div class="item">
                    <img class="img-fluid my-shadow slider-image slider-img" src="../images/oceanfins-img/mobile-4.png"  alt="Donate page wireframe 2/2">
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Styling</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I composed together a style tile and a style guide. It displays how the new site’s design will look visually through its colours, fonts and other elements. I also developed a logo that represent the foundation.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid my-shadow max-height-700" src="../images/oceanfins-img/style-tile.png" alt="Ocean Fins Style Tile">
        </div>
    </div>
</section>
<section id="reflection" class="work-section white-section reflection">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>04</h4>
                            <br>
                            <h2>Reflection</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">What I've Learned</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Information architects clarify the goals, mission and vision of the site and specify how users will find information within it by defining its organization, navigation, labelling and searching-systems. Ultimately, they plan an important role in delivering a product with functionality, balancing the needs of its sponsored organization as well as its audience.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="parallax img-fluid my-shadow max-height-1000" src="../images/oceanfins-img/boat.jpg" alt="Person standing on a boat background">
        </div>
    </div>
</section>


<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>