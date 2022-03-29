
<?php
    include_once "headerA.php";
?>
<?php
	include "menu.php";
?>

  <main class="content">
  <h1>Create Post</h1>
  <div class="container">
<hr>
  <form action="">
  <div class="row">
    <div class="col-2">
    <label for="name"><b>Title: </b></label></div>
    <div class="col">
    <input type="text" placeholder="Title" name="name" id="name" size="50" required></div>
  </div>
  <div class="row">
  <div class="col-2">
    <label for="name"><b>City: </b></label></div>
    <div class="col">
    <input type="text" placeholder="City" name="name" id="name" required></div>
</div>
<div class="row">
  <div class="col-2">
  <label for="location"><b>State: </b></label></div>
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
  <label for="date"><b>Zip code: </b></label></div>
    <div class="col">
    <input type="text" placeholder="Zip code" name="date" id="date" required></div>
</div>
<div class="row">
  <div class="col-2">
  <label for="location"><b>Date: </b></label></div>
    <div class="col">
    <input type="date" placeholder="Pick date" name="location" id="location" required></div>
</div>
<div class="row">
  <div class="col-2">
  <label for="location"><b>Crime type: </b></label></div>
    <div class="col">
    <select name="crimetype" id="crimetype">
  <option value="victimless">Victimless</option>
  <option value="theft">Theft</option>
  <option value="propertydamage">Property Damage</option>
  <option value="assault">Violent/Physical Assault</option>
  <option value="bande">Breaking & Entering</option>
  <option value="drugsalcohol">Drugs/Alcohol</option>
  <option value="other">Other</option>
</select>
</div>
</div>
<div class="row">
<div class="col-2">
  <label for="description"><b>Description: </b></label></div>
    <div class="col">
    <textarea name="description" cols="50" rows="5"></textarea></div>
</div>
    <input id="saveForm" type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Reset" />
    <hr>
    </form>
  </div> 
  </main>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>

<?php
    include_once "footerA.php";
?>
