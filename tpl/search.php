<?php 
	if($_POST['tp' ] == "Title")
		$type = 1;
	else if($_POST['tp'] == "Author")
		$type = 2;
	else if($_POST['tp'] == "ISBN")
		$type = 3;
	else {
		echo "Invalid input.";
	}
	
	$content = htmlspecialchars($_POST['c']);
	// search function
	include_once('header.php');
	include('api.php');	
	
		

?>
<div id="content">
	<?php 
	 if(isset($type) && isset($content)) {
	 	echo "$type";
		echo  "$content";
		search($type,$content);
	 }
	else 
		echo "Invalid search.";
		
	 ?>

</div>
<?php include_once('footer.php'); ?>