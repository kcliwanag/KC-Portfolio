<?php 

    require_once("../functions.php");
    $project_id = 'ocean-fins';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#" title=""><h3>Research</h3></a></div>
        <div class="col"><a href="#" title=""><h3>Ideation</h3></a></div>
        <div class="col"><a href="#" title=""><h3>Reflection</h3></a></div>
    </div>
</div> 

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>