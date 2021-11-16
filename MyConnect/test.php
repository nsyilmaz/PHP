<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "MyConnect.php";

        $MY = new MySqlConnection;
        $MY->Open();


	$id = "236 or' 1=1";
	$name = "Turkey";

        $query="select * from CountryCode where id=? and countryname=?";

	$args = array($id, $name);


        $MY->ExecSql($query, $args);

	//echo $MY->RowCount();

        while ($r = $MY->FetchData()) {
                printf("Id: ".$r["id"]."\n");
                printf("Name: ".$r["countryname"]."\n");

        }

        $MY->Close();
?>
