<?php
	include "headerA.php";
    include "menu.php";
?>
<main class="content">
		<div id="content">
			<h1>Log In</h1>
            <hr>
        <form id="login" class=""  method="post" action="index.php">
        <label for="Email">Email: </label>
        <input type="text" name="email" style="margin: 10px" placeholder="Email">
        <br>
        <label for="password">Password: </label>
        <input type="text" name="password" style="margin: 10px" placeholder="Password">
        <br>
        <input type="Submit" name="submit" value="Login">
    </form>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>
	</main>
<?php
    include "footerA.php";
?>