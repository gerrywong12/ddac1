<html>
    <head>
          <title>List of KL Restaurant</title>
    </head>
    <body>
          <center>
<h1>List of KL Restaurant</h1>
<!--create table structure using HTML first--> <table border="1">
                  <tr>
                    <th>Restaurant ID</th>
                    <th>Restaurant Name</th>
                    <th>Address</th>
                    <th>Phone</th>
</tr> <tr>
<th>0</th>
<th>Subway Restaurant</th>
<th>Menara Standard Chartered, TPM</th> <th>03-22441234</th>
                  </tr>
              <?php
$serverName = "simplewebtp000000.database.windows.net"; $connectionOptions = array(
  Level 2
Asia Pacific University of Technology & Innovation
Page 11 of 14
?>
echo "<tr>"; echo "<td>". echo "<td>". echo "<td>". echo "<td>". echo "</tr>";
 }
sqlsrv_free_stmt($getResults);
"Database" => " "Uid" => " "PWD" => "
", ",
");
simpleweb
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
die("Error connection: ".sqlsrv_errors()); }
$tsql= "SELECT * FROM [dbo].[restaurant]"; $getResults= sqlsrv_query($conn, $tsql);
if ($getResults == FALSE) {
     die(sqlsrv_errors());
 }
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
simpleweb
 Simple@web
$row['restaurant_id'] . "</td>"; $row['restaurant_name'] ."</td>"; $row['restaurant_address'] . "</td>"; $row['restaurant_phone'] . "</td>";
              </table>
          </center>
    </body>
</html>
