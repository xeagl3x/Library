<?php
	include('api.php');
	include_once('header.php');
	include('inc_search.php');
	//$checker = false;
	$everythingSet = true;
	if(!empty($_POST['submit'])){
		if(empty($_POST['isbn'])){
			$everythingSet = false;
			echo "ISBN Number not entered!";
		}
		else{
			$theISBN = $_POST['isbn'];
			$theTitle = $_POST['title'];
			header("Location: lookAtBook.php?isbn=$theISBN");
			exit;
		}
	}
?>
<div id="content">
	<h1>Welcome to our Library!</h1>
    <p> Our Digital Library is well known throughout the database class in Spring 2016 since this is one of the only two groups. This website is solely for database project. If you attempt to check out a book for real, sorry, we are unable to satisfied you. However, you can listening to some pop music while staring at our background that is created by our web developer lead, Albien. We do not know how he did it, but it looks cool, so we will keep it cool like that. Moreover, you can enjoy our main database features that allow you to view books, search books, log in, check out, and etc. Our database lead is Tim who is a very down to earth man. Tim does not complain, Tim does not care, Tim is easygoing, be like Tim. Well, those two are the core members, while the rest of the members are more of like noobies. They do what they are told, they asked what they do not know, sometimes they broke the server, sometimes nothing happened, they just have no clues. 
</p><p>
Fusce at iaculis urna. Cras sagittis, quam nec porttitor finibus, purus felis efficitur leo, non rhoncus urna turpis a ligula. Curabitur condimentum libero vel augue iaculis, ut imperdiet erat fringilla. Aenean id finibus neque. Nullam imperdiet maximus mollis. Cras aliquam molestie est id congue. Fusce congue nunc eget sodales vestibulum. Integer eget dictum velit. Donec consequat vel ipsum sed interdum. Proin ut diam at lacus lobortis tristique. Donec commodo tellus sed nunc malesuada, quis ullamcorper augue consequat. In maximus facilisis iaculis. </p>

	<h1>New Additions</h1>
	<div>
	<?php getNewBooksInventory(); ?>
    </div>
</div>
<?php include_once('footer.php'); ?>