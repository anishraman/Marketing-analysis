<?php
include("include/general/top.php");
include("include/general/dbquery.php");

?>


<div id="page-content-wrapper">
    <div id="page-title">
		<h3>
			Dashboard
			<small>
				Quick Review
			</small>
		</h3>
		<div id="breadcrumb-right">
            
        </div>
	</div><!-- #page-title -->
	<div id="page-content">
	<?php include('include/class/class_dashboard.php');
	?>
	
	</div><!-- #page-content -->
</div><!-- #page-content-wrapper -->


<?php
include("include/general/bottom.php");
?>


