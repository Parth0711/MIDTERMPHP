<?php 

include('_utilities/_connect.php');
$conn = connect();


 
  ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">New Book</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/books/insert.php' method='post'>


	<div class='form-group'>
	<form action="./insert.php" method="post">
		<label>Title</label>
		<input class="form-control" type="text" name="title">
		
	</div>

	<div class='form-group'>
		<label>Genre</label>
		<input class="form-control" type="text" name="genre">
	</div>

	<div class='form-group'>
		<label>Author</label>
		<input class="form-control" type="text" name="author">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>