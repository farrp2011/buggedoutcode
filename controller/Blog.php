<?php

require_once 'Users.php';

define("BLOG_TB","blog_tb");
//id is defined in Users.php
define("COL_USER_ID","user_id");
define("COL_TITLE","title");
define("COL_URL","blog_url");//this is the url for the blog based off the title
define("COL_TEXT","text");
define("COL_IMG","img_url");
define("COL_DATE","date");
define("COL_GIT","github_url");//url for github

//this table stores all the image urls for the site
define("IMG_TB","image_tb");
//id is defined
define("COL_BLOG_ID","blog_id");
//img_url is defined
define("COL_ALT","ALT");

class Blog
{

	private $id = false;
	private $user_id = false;
	private $title = false;
	private $text = false;//this is going to be long
	private $img = false;//url of image of image for blog post
	private $date = false;//Unix time stamp
	private $git = false;

	private $img_arr;//this is loaded from a diffrent table

	private function createDB()
	{
		$db = new SQLite3(DB_FILE);
		$db->query("CREATE TABLE IF NOT EXISTS "
				.BLOG_TB." (".COL_ID." INTERGER PRIMARY KEY, "
				.COL_USER_ID." INTERGER, "
				.COL_TITLE." TEXT, "
				.COL_URL." TEXT UNIQUE, "
				.COL_IMG." TEXT, "
				.COL_DATE." INTERGER, "
				.COL_GIT." TEXT, "
				."FOREIGN KEY(".COL_USER_ID.") REFERENCES ".USERS_TABLE."(".COL_ID."));");

		$db->query("CREATE TABLE IF NOT EXISTS "
				.TAGS_TB." ("
				.COL_ID." INTEGER PRIMARY KEY, "
				.COL_BLOG_ID." INTEGER, "
				.COL_TAG." TEXT, "
				.COL_ALT." TEXT, "
				."FOREIGN KEY(".COL_BLOG_ID.") REFERENCES ".BLOG_TB."(".COL_ID."));");
		$db->close();
	}

	function __construct($_url = "")
	{
		//side note all the returns in this
		//function can't return anything
		//beacuse it is a constructer
		//kinda sucks

		if($_title == "")
			return;


		$this->createDb();//make sure we have a database
		//check if the row is there for that url

		$db = new SQLite3(DB_FILE);

		$smt = $db->prepare("SELECT * FROM ".BLOG_TB." WHERE ".COL_URL." = :url ;");

		$smt->bindValue(":url", $_url, SQLITE3_TEXT);
		$result = $smt->execute();
		$row = $result->fetchArray();

		if($row === false)
			return;//nothing was found

		$this->id = $row[COL_ID];
		$this->user_id = $row[COL_USER_ID];
		$this->title = $row[COL_TEXT];
		$this->url = $row[COL_URL];
		$this->img = $row[COL_IMG];
		$this->date = $row[COL_DATE];
		$this->git = $this[COL_GIT];

		//lets try to get the array of images

		$smt = $db->prepare("SELECT * FROM ".IMG_TB." WHERE ".COL_BLOG_ID." = :id ;");
		$smt->bindValue(":id", $this->id, SQLITE3_INTEGER);


		if($row === false)
		{
			$this->img_arr = null;
			return;
		}
		//If there are rows will will put them into the array


		$count = count($row);
		for($i = 0 ; $row = $result->fetchArray() ; $i++)
		{
			$this->img_arr[$i][COL_ID] = $row[COL_ID];
			$this->img_arr[$i][COL_BLOG_ID] = $row[COL_BLOG_ID];
			$this->img_arr[$i][COL_IMG] = $row[COL_IMG];
			$this->img_arr[$i][COL_ALT] = $row[COL_ALT];
		}


		return;
	}
}
