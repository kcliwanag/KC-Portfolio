<?php 

    require_once("../functions.php");
    $project_id = 'yummy-milk';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#style-guide" title=""><h3>Style Guide</h3></a></div>
        <div class="col"><a href="#typography" title=""><h3>Typography</h3></a></div>
        <div class="col"><a href="#logo" title=""><h3>Logo</h3></a></div>
        <div class="col"><a href="#business-card" title=""><h3>Business Card</h3></a></div>
        <div class="col"><a href="#3D-mockup" title=""><h3>3D Mockup</h3></a></div>
    </div>
</div> 

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>