<?php 

    require_once("../functions.php");
    $project_id = 'valoir-collective';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#social-links" title=""><h3>Social Links</h3></a></div>
        <div class="col"><a href="#my-roles" title=""><h3>My Roles </h3></a></div>
        <div class="col"><a href="#team-experience" title=""><h3>Team Experience</h3></a></div>
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
                        <p class="white-text">I was a part of a fictional social media marketing agency called ‘Valoir Collective’. We guide novice businesses and creators to grow their digital presence in the modern world. With social media, they can build a better connection with their audiences. It can increase brand awareness and integrity with the right guidance. Our agency can help tell their story, show their values and worth through social media.</p>
                        <br>
                        <p class="white-text">In promoting our company, we created a WordPress site alongside a Facebook page, an Instagram page and TikTok. Our team of five included Christine Le (lead copywriter), Tiffany Chu (lead web developer), Nick Turda (video creator and editor), Aice Sumido and I as lead graphic designers. We all shared the roles of content creators and social media managers as well.</p>
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
                            <h2 class="white-text">Valoir</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="solid-color-heading <?php echo $data['bg_prefix'] ?>-solid-color-heading">
                            <h3 class="white-text">[valwar] verb | French</h3>
                        </div>
                        <div class="solid-color-blurb <?php echo $data['bg_prefix'] ?>-solid-color-blurb">
                            <p class="white-text less-opacity">to be worth, to deserve and to be more valuable. 
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section id="audience" class="work-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>01</h4>
                            <br>
                            <h2>Social Links</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Experience</h3>
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
<section id="brand-identity" class="work-section white-section">
    <div data-aos="fade-up">
        <div class="center-wrapper">
            <div class="section-text-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 color-<?php echo $data['bg_prefix'] ?>">
                            <h4>02</h4>
                            <br>
                            <h2>My Roles</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Graphic Designer</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I was a part of developing the identity system of our brand. I vectorized and finalized our company logo, creating logo variations for different applications throughout our platforms. For our Instagram posts, I also designed our inspirational quotes and team introduction templates.</p>
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Content Creator</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>I primarily created posts for our Instagram page. Valoir Collective aims to showcase the importance and value of social media as an effective business marketing strategy. Some of my posts included tips on content creation (‘Quality Over Quantity’ post), inspirational quotes and ‘Quick Guide To Instagram Reels’ post. I also wrote the ‘Get Started With Valoir Collective’ blog post on our site to introduce and promote our services.</p>
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
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Social Media Manager</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>Co-managing the accounts, I also responded to comments and positively engaged with our audience on our social media platforms. We also monitored our progress and engagement rates to understand their results so that we can make decisions in improving our social media marketing strategy.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center side-padding">
            <img class="img-fluid " src="../images/cibo-img/wireframe-1.png" alt="">
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
                            <h2>Team Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4  color-<?php echo $data['bg_prefix'] ?>">
                            <h3 class="color-<?php echo $data['bg_prefix'] ?>">Working In A Team</h3>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <p>It was a valuable experience being a part of the Valoir Collective team. I am glad to have worked with talented team members, all with various specializations. We were able to promote our social media agency that serves to show the worth and values of companies to their targeted audiences.
                            Communication is key in being a part of a team. We all respected and valued each other’s work. However, we all had to overcome challenges individually and as a team. For me, as a graphic designer, not all of my designs were perfect and approved. I often had to revise and improve through feedback from my team. As I am not the only content creator on our team, it was difficult to have unity in our posts in the beginning. But through constant communication and back and forth feedback, we were able to create and manage our posts altogether throughout our social media platforms.Working in a team allowed me to gain different perspectives and insights as well as new techniques learning from the rest of my teammates.</p>
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
                            <p>As a graphic designer and content creator, I helped establish our brand through visual communication. I loved using my passion in creating visually appealing designs and informative content through different media platforms.
                            Looking at the analytics report of our Instagram page, it is apparent that the posts with higher engagement rates are the ones with relevant, valuable, and helpful information for our audience as a social media agency.Because we all had a chance to try out different roles, I had an opportunity to re-evaluate my strengths and my weaknesses. I’ve been continuously improving my design skills, however, I will also strive to improve on my copywriting skills.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="center">
            <img class="img-fluid " src="../images/cibo-img/cibo-reflect.png" alt="">
        </div>
    </div>
</section>

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>