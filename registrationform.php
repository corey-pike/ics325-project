<?php
	include "headerA.php";
?>
<?php
    include "menu.php";
?>
<main class="content">
			<h1>Account Registration</h1>
            <div class="container">
<hr>
    	<form>
            <div class="row">
    <div class="col-2">
        <label for="firstName">First Name:</label></div>
        <div class="col">
        <input type="text" name="firstName" placeholder="First Name"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="lastName">Last Name: </label></div>
        <div class="col">
        <input type="text" name="lastName" placeholder="Last Name"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="city">City:</label></div>
        <div class="col">
        <input type="text" name="city" placeholder="Enter a City"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="state">State:</label></div>
        <div class="col">
        <select name="state">
        	<option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
        </select></div>
</div>
<div class="row">
<div class="col-2">
        <label for="zipcode">Zipcode:</label></div>
        <div class="col">
        <input type="text" name="zipcode" placeholder="Zipcode"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="DOB">Date of Birth:</label></div>
        <div class="col">
        <input type="date" name="DOB"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="email">Email:</label></div>
        <div class="col">
        <input type="text" name="email" placeholder="Email"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="password">Password:</label></div>
        <div class="col">
        <input type="text" name="password" placeholder="Enter a password"></div>
</div>
<div class="row">
<div class="col-2">
        <label for="confirmPassword" >Confirm Password:</label></div>
        <div class="col">
        <input type="text" name="confirmPassword" placeholder="Confirm Password"></div>
</div>
        <input type="Submit" name="submit" value="Login">

    </form>
    <hr>
</div>
    </main>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>
<?php
    include "footerA.php";
?>