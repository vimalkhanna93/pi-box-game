<html>
<head><meta http-equiv="refresh" content="<?php echo 3?>;URL='<?php echo $_SERVER['PHP_SELF']?>'"></head>
<style>
table {
    border-collapse: collapse;
    width: 40%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<body>
	<table>
	  <tr>
	    <th>User ID</th>
	    <th>USer Score</th>
	  </tr>
<?php
							$user_name = "root";
							$password = "";
							$database = "pibox";
							$host_name = "localhost";

							$connect_db=mysql_connect($host_name, $user_name, $password);

							$find_db=mysql_select_db($database);

							if ($find_db) {
									$result = mysql_query("SELECT userid, userscore FROM sessionuserassoc ORDER BY userscore DESC");

        		if (mysql_num_rows($result)) {
            	while ($row = mysql_fetch_assoc($result)) {
                	echo "<tr>
									       <td>{$row['userid']}</td>
                         <td>{$row['userscore']}</td>
												</tr>";

            }
        }
								}
								else {

									echo "Database does not exist";

								}
?>
</table>
</body>
</html>
