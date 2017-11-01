<!DOCTYPE html>
<html>
<style>
  table {
      width:100%;
      box-shadow: 10px 10px 5px grey;
  }
  table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
  }
  th, td {
      padding: 5px;
      text-align: left;
  }
  table#t01 tr:nth-child(even) {
      background-color: #eee;
  }
  table#t01 tr:nth-child(odd) {
     background-color:#fff;
  }
  table#t01 th {
      background-color: #3172aa;
      color: white;
  }
</style>

<div class = "table-responsive">
  <div class="panel-body table-responsive">
    <table class = "table" id="t01">
      <thead>
        <tr>
          <th>Entry owner</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Age</th>
          <th>Favorite color</th>
        </tr>
      </thead>
      <tbody>
        <?php
           $sql = "SELECT firstname, lastname, age, favoritecolor, entryowner
                   FROM FavoriteColor
                   ORDER BY lastname";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr> <td style='width:20%;'>".$row["entryowner"]. "</td> <td>". $row["firstname"].
                    "</td> <td>". $row["lastname"]. "</td> <td>" . $row["age"] .
                     "</td> <td>". $row["favoritecolor"]. "</td> </tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
          ?>
        </tbody>
    </table>
  </div>
</div>
</html>
