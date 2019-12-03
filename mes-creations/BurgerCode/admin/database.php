<?php
	
class Database
{ 
	private static $dbHost = "localhost";
	private static $dbName = "id2966104_burger";
	private static $dbUser = "id2966104_thae";
	private static $dbUserPassword = "$$0312Quick";

	private static $connection = null;

	public static function connect()
	{
		try
		{ 
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
		return self::$connection;
	}

	public static function disconnect()
	{
		self::$connection = null;
	}
}

Database::connect();
?>