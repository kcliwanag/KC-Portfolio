<?php 

    require_once("../functions.php");
    $project_id = 'cibo';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#the-market" title=""><h3>The Market</h3></a></div>
        <div class="col"><a href="#onboarding" title=""><h3>Onboarding</h3></a></div>
        <div class="col"><a href="#features" title=""><h3>Features</h3></a></div>
        <div class="col"><a href="#reflection" title=""><h3>Reflection</h3></a></div>
    </div>
</div> 

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>