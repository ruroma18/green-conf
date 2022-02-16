<?
use PDO;

class Database
{
	private static $_instance;

	public function __construct ()
	{
		try {
		self::$_instance = new PDO(
			'mysql:host=localhost;dbname=conf',
	    	'root',
	    	'',
	    	[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
		);
;

	    } catch (PDOException $e) {
		      echo 'Connection failed: ' . $e->getMessage();
	    }
	}

  public static function closeConnection()
	{
		if (self::$_instance) {
			self::$_instance = null;
			return true;
		} else {
			return false;
		}
	}
}