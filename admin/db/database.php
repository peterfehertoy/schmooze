<?php
class Database
{
  
/*
   private static $dbName = 'u175136655_and' ;
    private static $dbHost = 'mysql.hostinger.hu' ;
    private static $dbUsername = 'u175136655_dam';
    private static $dbUserPassword = 'alexiroope12';
  */
  
    private static $dbName = 'schmooze_schmooze' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'schmooze_varga';
    private static $dbUserPassword = 'Varga123varga321';
   /*
  
    private static $dbName = 'schmooze' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $cont  = null;
    */
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       try
        {
          $cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       return $cont;
    }
     
    public static function disconnect()
    {
        $cont = null;
    }
}
?>