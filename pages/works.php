<?php  

    require_once("functions.php");

?>      

<section id="works">
    <div class="work-preview-wrapper">
        <?php foreach($projects as $project) { ?>
            <a href="<?php echo $project['link']?>" title="View <?php echo $project['title']?>">
                <div class="work-preview parallax work-bg-<?php echo $project['bg_prefix']?>">
                    <div class="work-preview-overlay"></div>    
                    <div class="work-preview-text text-uppercase">
                        <h3 class="less-opacity"><?php echo $project['role']?></h3>
                        <h2><?php echo $project['title']?></h2>
                        <div class="view-work-btn">
                            <a href="<?php echo $project['link']?>">View work
                                <img src="../images/white-arrow.svg" alt="White Arrow">
                            </a>    
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</section>