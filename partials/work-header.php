<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KC Liwanag's Portfolio</title>
        <script src="https://kit.fontawesome.com/c88d4985bb.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="../styles/reset.css">
        <link rel="stylesheet" href="../styles/works.css">
        <link rel="stylesheet" href="../styles/work-header.css">
        <link rel="stylesheet" href="../styles/work-pages.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="../styles/draggable-slider.css">
        <link rel="stylesheet" href="../styles/more-projects.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <div class="parallax container-fluid work-header work-bg-<?php echo $data['bg_prefix'] ?>">
            <div class="work-preview-overlay overlay-<?php echo $data['bg_prefix'] ?>"></div>  
            <div class="work-preview-text-wrapper" data-aos="fade-right">
                    <div class="work-preview-text">  
                        <div class="back-btn flex">
                            <a href="../index.php"><img src="../images/white-arrow.svg" alt="White Arrow">Back to Projects</a>
                        </div>
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

        
