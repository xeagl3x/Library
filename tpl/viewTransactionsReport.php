<?php
	include('api.php');
	include_once('header.php');
	include('inc_search.php');
?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
<div id="content">
	<h1>Transactions</h1>
	<?php
		transactionReport();
	?>
</div>
<?php include_once('header.php'); ?>