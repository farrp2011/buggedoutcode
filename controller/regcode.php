<?php
require_once 'Users.php';

define("REG_CODES_TB","codes_tb");
define("COL_CODE","code");
class RegCode
{
   public function makeCodes()
   {
		//we will make 30 codes
		//most of them will be un-used
		$this->createDatabase();
		$db = new SQLite3(DB_FILE);
		$smt = $db->prepare("INSERT INTO ".REG_CODES_TB." ( ".COL_CODE." ) VALUES ( :code );");
		for($i = 0 ; $i < 30 ; $i++)
		{
			$smt->bindValue(":code", bin2hex(random_bytes(3))/* 6 char*/, SQLITE3_TEXT );
			$smt->execute();
      }
      $smt->close();
   }
   public function checkCode($code)
   {
      $isFound = $false;
      $this->createDatabase();
      $db = new SQLite3(DB_FILE);
      $smt = $db->prepare("SELECT * FROM ".REG_CODES_TB." WHERE ".COL_CODE." = :code ;");
      $smt->bindValue(":code", $code, SQLITE3_TEXT);
      $res = $smt->execute();
      if($row = $res->fetchArray())
      {
			//code is good
         $isFound = true;
      }
      //code is bad
		$smt->close();
      return($isFound);
   }
	public function deleteCode($code)
	{
      $db = new SQLite3(DB_FILE);
		$smt = $db->prepare("DELETE FROM ".REG_CODES_TB." WHERE ".COL_CODE." = :code ;");
		$smt->bindParam(":code", $code, SQLITE3_TEXT);
		$smt->execute();
		$smt->close();
	}
   private function createDatabase()
   {
      $db = new SQLite3(DB_FILE);
      $db->query("CREATE TABLE IF NOT EXISTS ".REG_CODES_TB." ( ".COL_ID." INTEGER PRIMARY KEY, ".COL_CODE." TEXT);");
      $db->close();
   }
}
