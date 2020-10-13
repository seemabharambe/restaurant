<form action="submit1" method="POST">

	@csrf

	<input type="text" name="name" placeholder="restoant name">
	<br><br>

	<input type="text" name="address" placeholder="restoant address">
	<br><br>

	<button type="submit">Submit</button>
</form>