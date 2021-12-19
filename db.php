<?php
function connect()
{
	$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
$dbname = DB_Name;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
function insert($table, $data = array())
{
	$col = '';
	$val = '';
	$i = 0;
	foreach($data as $k=> $v)
	{
		if($i == 0)
		{
			$col= $col.$k;
			$val= $val."'".$v."'";
		}
		else
		{
			$col= $col.','.$k;
			$val= $val.",'".$v."'";
		}
		$i++;

	}
$conn = connect();

$sql = 'INSERT INTO '.$table.' ('.$col.')

 VALUES ('.$val.')';
if ($conn->query($sql) === TRUE) {
      return $last_id = $conn->insert_id;

} else {
    return 0;
}

$conn->close();

}
?>