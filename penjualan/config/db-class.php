<?php

/**
 * Database class
 */
class db
{
	
	function connect($host, $user, $pass, $db)
	{
		return mysqli_connect($host, $user, $pass, $db);
	}

	function query($connection, $query) // khusus buat nampilin
	{
		$hasil = mysqli_query($connection, $query);
		$result = array();
		while($row = mysqli_fetch_array($hasil)) {
			array_push($result, $row);
		}
		return $result;
	}

	function qry($connection, $query) // dipake buat selain nampilin data
	{
		$hasil = mysqli_query($connection, $query);
		return true;
	}

}

?>