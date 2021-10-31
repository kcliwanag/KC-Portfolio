<?php 

    require_once("../functions.php");
    $project_id = 'mariscos-el-guerro';
    $data = $projects[$project_id];
    require_once("../partials/work-header.php");

?>

<div class="container-fluid work-nav sticky-top nav-color-<?php echo $data['bg_prefix'] ?>">
    <div class="row">
        <div class="col"><a href="#introduction" title=""><h3>Introduction</h3></a></div>
        <div class="col"><a href="#colour-scheme" title=""><h3>Colour Scheme</h3></a></div>
        <div class="col"><a href="#typography" title=""><h3>Typography</h3></a></div>
        <div class="col"><a href="#logo" title=""><h3>Logo</h3></a></div>
        <div class="col"><a href="#graphic-elements" title=""><h3>Graphic Elements</h3></a></div>
        <div class="col"><a href="#reflection" title=""><h3>Reflection</h3></a></div>
    </div>
</div> 

<?php 
    require_once("../partials/more-projects.php");
    require_once("../partials/footer.php"); 
?>