<?php

include_once "serverinfo.php";

	class Connection
	{		
		public function __construct($uname,$spass,$url,$dbname)
		{
			mysql_connect($url,$uname,$spass) or die("Connection Error");
			mysql_selectdb($dbname);
		}
		public function __destruct()
		{
			mysql_close();
		}
		
	}

?>