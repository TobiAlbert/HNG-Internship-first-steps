<?php

	try {

		$user = "user";
		$password = "password";
		$dbname = "dbname";

		$con = new PDO("mysql:host=localhost; dbname=$dbname", $user, $password);

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query_statement = "SELECT * FROM employee";

		$result = $con->query($query_statement);

		$result->setFetchMode(PDO::FETCH_ASSOC);

		foreach ($result as $row) {
			foreach ($row as $name => $value) {
				print $name.": ".$value."\n";
			}
			print "\n";
		}

	} catch (PDOException $pdoException) {
		print "PDO Exception: ".$pdoException->getMessage();
	}

