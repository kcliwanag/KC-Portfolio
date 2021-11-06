<?php 

    require_once("../functions.php");
    $project_id = 'jango';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>
<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix']?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#challenge" title=""><h3>Challenge</h3></a></div>
        <div class="col"><a href="#research" title=""><h3>Reasearch</h3></a></div>
        <div class="col"><a href="#design" title=""><h3>Design</h3></a></div>
        <div class="col"><a href="#validation" title=""><h3>Validation</h3></a></div>
        <div class="col"><a href="#final" title=""><h3>Final</h3></a></div>
    </div>
</div> 
<section class="work-section" id="introduction">
    <div class="container-fluid">
        <div class="row center-box">
            <div class="col-sm-12 col-lg-6 text-col padding-left-right">
                <h2>Introduction</h2>
                <div class="text-box">
                    <p>Music and songwriting had always been important in my life. I often get my inspiration through listening to and exploring new music. Thus, learning about the features of Jango and its unlimited, ad-free music intrigued me.</p>
                    <br>
                    <p>As a UX student and a music enthusiast, I saw the potential to improve Jango’s site and its functionality for a better and more unique experience. In this case study, I analyze the current site, identify problems, understand its ideal users and find solutions.</p>
                </div>
                <a href="#" title="" class="pdf-link color-jango">View Full PDF<img class="arrow" src="../images/grey-arrow.svg" alt="White Arrow"></a>
            </div>
            <div class="col-sm-12 col-lg-6 img-col jango-intro">
            </div>  
        </div>
    </div>
</section>
<section class="work-section white with-divider">
    <div class="divider-revert"></div>
    <h1>HELLO HELLO</h1>
    <div class="divider"></div>
</section>
<section class="work-section">
    <div class="container-fluid center-box">
        <div class="row text-col blurb">
            <div class="col-sm-12 col-lg-6 blurb-heading">
                <h2>01 RESEARCH</h2>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>The success of a product’s design is determined by its users.</p>
            </div>
        </div>
    </div>
    <div class="flex center">
        <img class="img-fluid" src="../images/jango-trial-img.png" alt="">
    </div>
</section>
<section class="work-section white">
    <div class="container-fluid center-box">
        <div class="row text-col blurb">
            <div class="col-sm-12 col-lg-6 blurb-heading">
                <h2>02 DESIGN</h2>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>The success of a product’s design is determined by its users.</p>
            </div>
        </div>
    </div>
    <div class="slider-container">
        <main>
            <div class="jango-user-slider">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-user-1.png" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-user-2.png" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-user-3.png" alt="">
                </div>
            </div>
        </main>
    </div>
</section>
<section class="work-section">
    <div class="container-fluid center-box">
        <div class="row text-col blurb">
            <div class="col-sm-12 col-lg-6 blurb-heading">
                <h2>03 VALIDATION</h2>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>The success of a product’s design is determined by its users.</p>
            </div>
        </div>
    </div>
    <div class="flex center">
        <img class="img-fluid" src="../images/jango-trial-img.png" alt="">
    </div>
</section>
<section class="work-section white">
    <div class="container-fluid center-box">
        <div class="row text-col blurb">
            <div class="col-sm-12 col-lg-6 blurb-heading">
                <h2>FINAL</h2>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>The success of a product’s design is determined by its users.</p>
            </div>
        </div>
    </div>
    <div class="slider-container">
        <main>
            <div class="gallery-slider">
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-final-1.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-final-2.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-final-3.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid slider-image" src="../images/jango-final-4.jpg" alt="">
                </div>
            </div>
        </main>
    </div>
</section>

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>