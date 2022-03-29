
<?php
    include_once "headerA.php";
    include "menu.php";
/*
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if (validate())
        {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $_SESSION['password'] = $hash;
            
            $servername = "localhost";
            $dbname = "";

            // Create connection
            $conn = new mysqli($servername, "root", "admin", $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO user (user_name, email, password)
            VALUES ($username, $email, $hash)";

            if ($conn->query($sql) === TRUE) {
                echo "Account created successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
    
*/
?>
  <main class="content">
  <h1>My Profile</h1>
  <?php
  if ($_SESSION['isLoggedIn']){
      echo '<button onclick="window.location.href = \'profileform.php\';">Edit</button>';
  } else {
      echo '<p>You\'re not logged in!</p>';
      echo '<div style="padding:3px"><button onclick="window.location.href = \'loginform.php\';">Log In</button></div>';
      echo '<div style="padding:3px"><button onclick="window.location.href = \'registrationform.php\';">Register</button></div>';
  }
  ?>
  <hr>
  <p>*Note: Once profiles are able to be created and queried on backend, there will be a button for <b>edit</b> (owner's profile) and <b>send message</b> (visiting profile).*</p>
  </main>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js" type="text/javascript"></script>


<?php
    include "footerA.php";
?>
