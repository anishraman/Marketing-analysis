<?php
include("include/general/top.php");
?>
	<div id="page-content-wrapper">
		<div id="page-title">
			<h3>Employee Management
			<small></small></h3>
				<!--<div id="breadcrumb-right">
					<div id="sidebar-search">
						<input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name="">
						<i class="glyph-icon icon-search"></i>
					</div>
				</div>-->
		</div><!-- #page-title -->
		<?php
		include("include/general/menu.php");
		$page="employee.php";
		menu($page);
		?>
		<div id="page-content" style="min-height: 287px;">	
					<?php 
						include("include/class/class_employee.php");							
					?>
		</div>	
    </div><!-- #page-content-wrapper -->
</div><!-- #page-wrapper (which is open on top.php)-->

<?php
include("include/general/bottom.php");
?>
