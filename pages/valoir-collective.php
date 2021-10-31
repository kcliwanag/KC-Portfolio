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

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>