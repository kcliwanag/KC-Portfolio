<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $data['meta-title'] ?> – KC Liwanag's Portfolio</title>
        <meta name="description" content="The MDN Web Docs site provides information about Open Web technologies including HTML, CSS, and APIs for both Web sites and progressive web apps.">
        <link rel="icon" type="image/svg+xml" href="/images/kc-liwanag-logo.svg">
        <script src="https://kit.fontawesome.com/c88d4985bb.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="/styles/reset.css">
        <link rel="stylesheet" href="/styles/navbar.css">
        <link rel="stylesheet" href="/styles/contact.css">
        <link rel="stylesheet" href="/styles/works.css">
        <link rel="stylesheet" href="/styles/work-header.css">
        <link rel="stylesheet" href="/styles/work-pages.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="/styles/draggable-slider.css">
        <link rel="stylesheet" href="/styles/more-projects.css">
        <link rel="stylesheet" href="/styles/footer.css">
        <link rel="stylesheet" href="/styles/main.css">
    </head>
    <body>
        <button type="button" class="btn btn-floating btn-lg btn-<?php echo $data['bg_prefix'] ?> color-<?php echo $data['bg_prefix'] ?>" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
        <div class="navbar-sm my-shadow">
            <?php require("navbar.php"); ?>
        </div>
        <?php require("navbar-modal.php"); ?>
        <div class="parallax container-fluid work-header work-bg-<?php echo $data['bg_prefix'] ?>">
            <div class="work-header-navbar navbar-lg" data-aos="fade-up">
                <div class="back-to-home-btn">
                    <a href="/">
                        <img src="../images/white-arrow.svg" class="back-to-home-arrow" alt="White Arrow">
                        <span class="back-to-home-text">Back to Home</span>
                    </a>    
                </div>
            </div>
            <div class="work-preview-overlay overlay-<?php echo $data['bg_prefix'] ?>"></div>  
            <div class="work-preview-text-wrapper">
                    <div class="work-preview-text" data-aos="fade-up">  
                        <h3 class="less-opacity"><?php echo $data['role'] ?></h3>
                        <h2><?php echo $data["title"]?></h2>
                        <h3 class="less-opacity"><?php echo $data['date'] ?></h3>
                        <div class="goal">
                            <h5 class="text-uppercase">Goal</h5>
                            <p><?php echo $data['goal'] ?></p>
                        </div>
                    </div>
            </div>   
        </div> 

        
