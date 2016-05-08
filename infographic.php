<?php 

include "header.php";

$image = $_GET["image"];
?>

<script src='js/jquery.zoom.js'></script>
<script>
	$(document).ready(function(){
		$('#ex2').zoom({ on:'grab' });
	});
</script>

<div class="container">

	<span class='zoom' id='ex2'>
		<img class="infographic" src="images/<?php echo $image; ?>.png"/>
	</span>

</div>


<?php include "footer.php"; ?>