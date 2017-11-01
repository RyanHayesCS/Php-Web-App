<?php
  require_once('databaseConnect.php');
  require_once('session.php');

  if(isset($_POST["EntryID"]))
  {
    $entryID = $_POST["EntryID"];
    $retrieveSql = "INSERT INTO UserEntries (userid, entryid)
              VALUES ('$session_userid', '$entryID')";

    if ($conn->query($retrieveSql) === TRUE){
      echo "<br> Record successfully added to user's list of entries.";
      echo "<br> <a href='index.php'>Return to previous page</a>";
    }else {
      echo "<br> Error: " . $retrieveSql . "<br>" . $conn->error;
    }
  }
  $conn->close();
?>
