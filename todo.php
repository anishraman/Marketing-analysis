<?php
include("include/general/top.php");
include("include/general/dbquery.php");
?>
	<div id="page-content-wrapper">
		<div id="page-title">
			<h3>To-Do List
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
		$page="todo.php";
		menu($page);
		?>
		<div id="page-content">
			<div class="example-box">
				<div class="example-code">
					<?php 
						include("include/class/class_todo.php");							
					?>
				</div>
			</div>
		</div>
	</div><!-- #page-content-wrapper -->
	
<?php
	include("include/general/bottom.php");
?>