<?php 
	include_once('header.php');
	include('api.php');	
	$theSearchResult = " ";
	$checker = false;
	if(!empty($_POST['searchEnter'])){
		if(!empty($_POST['searchType'])){
			$theSearchResult = search($_POST['searchType'], $_POST['searchText']);
			//$checker = $_POST['searchText'];
			echo "<h1>$theSearchResult</h1>";
		}
		else{
			echo "Wrong search";
		}
	}
	else{
		echo "NOTHING ENTERED!";
	}
	
	//$content = htmlspecialchars($_POST['c']);
	// search function
	
	
		

?>
<div id="content">

</div>
<?php include_once('footer.php'); ?>