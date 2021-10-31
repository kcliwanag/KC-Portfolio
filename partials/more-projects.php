<?php
    require_once("../functions.php");
    $projects_copy = $projects;
    if (isset($project_id)){
        unset($projects_copy[$project_id]);
    }
    $random_keys = array_rand($projects_copy,3);
?>
<section class="more-projects-container">
    <div class="container">
        <div class="more-projects row">
            <div class="col-sm-12 col-lg-6">
                <h3>More Projects</h3>
            </div>
            <div class="col-sm-12 col-lg-6 view-all-btn">
                <a href="../index.php" .                                                                                                                        >View all
                    <img src="../images/grey-arrow.svg" alt="Grey Arrow">
                </a>    
            </div>
        </div>
    </div>
    <div class="container">
        <div class="more-projects-preview row">
            <?php foreach($random_keys as $key){ ?>
                    <div class="col-sm-12 col-lg-4 more-projects-bg work-bg-<?php echo $projects[$key]['bg_prefix']?>">
                        <a href="../<?php echo $projects[$key]['link']?>">
                        <div class="more-projects-overlay nav-color-<?php echo $projects[$key]['bg_prefix']?>">
                            <div class="more-projects-title">
                                <h5><?php echo $projects[$key]['role']?></h5>
                                <h4><?php echo $projects[$key]['title']?></h4>
                            </div>
                        </div>
                        </a>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>