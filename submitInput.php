<?php
  require_once('databaseConnect.php');
  require_once('session.php');


  if (isset($_POST["firstname"]) &&
      isset($_POST["lastname"]) &&
      isset($_POST["age"]) &&
      isset($_POST["favoritecolor"])){

          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $age = $_POST["age"];
          $favoritecolor = $_POST["favoritecolor"];

          $entryid = uniqid(rand(),true);

          $formSql = "INSERT INTO FavoriteColor (entryid, firstname, lastname, age, favoritecolor, entryowner)
            VALUES ('$entryid','$firstname', '$lastname', '$age', '$favoritecolor', '$session_user')";

          $entryMapSql = "INSERT INTO UserEntries (userid, entryid)
            VALUES ('$session_userid', '$entryid')";

          if ($conn->query($formSql) === TRUE) {
            echo "<br> New record created successfully";
            echo "<br> Your unique entry id is: ".$entryid;
            echo "<br><a href='index.php'>Return to previous page</a>";
            if(!$conn->query($entryMapSql)){
              echo "<br> Error mapping userid to entry id: ".$entryMapSql."<br>".$conn->error;
            }
          } else {
            echo "<br> Error: " . $formSql . "<br>" . $conn->error;
          }

      }else{
        echo "<br> Form filled out incorrectly. Refresh and try again.";
      }

  $conn->close();
?>
