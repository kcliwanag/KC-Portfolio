<?php 

    require_once("../functions.php");
    $project_id = 'deep-end-diving';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#logo" title=""><h3>Logo</h3></a></div>
        <div class="col"><a href="#product-mockup" title=""><h3>3D Mockup</h3></a></div>
        <div class="col"><a href="#stationery-set" title=""><h3>Stationery Set</h3></a></div>
        <div class="col"><a href="#reflection" title=""><h3>Reflection</h3></a></div>
    </div>
</div> 

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>