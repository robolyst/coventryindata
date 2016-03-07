<?php 

include "header.php";


$image = $_GET["image"];

?>

<div class="container">
	<img class="infographic" src="images/<?php echo $image; ?>.png"/>
</div>


<?php include "footer.php"; ?>