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
				.IMG_TB." ("
				.COL_ID." INTEGER PRIMARY KEY, "
				.COL_BLOG_ID." INTEGER, "
				.COL_TAG." TEXT, "
				.COL_ALT." TEXT, "
				."FOREIGN KEY(".COL_BLOG_ID.") REFERENCES ".BLOG_TB."(".COL_ID."));");
		$db->close();

		//we are going to add tags for searching

	}

	public function __construct($_url = "")
	{
		//side note all the returns in this
		//function can't return anything
		//beacuse it is a constructer
		//kinda sucks

		if( !is_string($_title) || $_title == "")
		{
			return;
		}

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

	public static function createBlog($_title)
	{
		
		
	}

}


class BlogImg
{
	private $id = null;
	private $blog_id = null;
	private $img_url = null;
	private $alt = null;//alt text

	public function __construct($_id)
	{
		if($_id == null || !is_numeric($_id))
			return;


		//check if the row is there for that url
		$db = new SQLite3(DB_FILE);
		$smt = $db->prepare("SELECT * FROM ".IMG_TB." WHERE ".COL_id." = :id ;");
		$smt->bindValue(":id", $_id, SQLITE3_TEXT);
		$result = $smt->execute();
		$row = $result->fetchArray();
		if($row === false)
			return;

		$this->id = $row[COL_ID];
		$this->blog_id = $row[COL_BLOG_ID];
		$this->img_url = $row[COL_IMG];
		$this->alt = $row[COL_ALT];
	}

	public static function addImg($_blog_id, $fileObj, $_alt, $user)
	{
		if(!is_numeric($_blog_id) || $_img_id == "" || $user->isLogged())
			return (false);//simple error checking

		if(file_exists(DIR_IMG))
		{//checking and making the img folder
			mkdir(DIR_IMG, 0777);
		}

		$target_file = DIR_IMG . basename($fileObj[COL_L_IMG]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		//creating the new file name
		$target_file = DIR_IMG .$_blog_id.time() . "_big.". $imageFileType;
		//most of the code after this point is all from w3schools
		//https://www.w3schools.com/php/php_file_upload.asp
		//Looking for them hackers here
		$check = getimagesize($fileObj[COL_IMG]["tmp_name"]);
		if($check != false)
		{
			//this is good
			$uploadOk = 1;
		}
		else
		{
			//The file is not an image.
			//I hope that is all that is needed
			//when looking for bad files.
			return("Wrong file type");//this also happens when there is no file, too
		}
		if(file_exists($target_file))
		{
			//checking to see if the file exists
			//but I deleted whatever was there
			//this should not be a problem
			unlink($target_file);
			//$uploadOk = 0;
		}
		if($fileObj[COL_IMG]["size"] > LARGE_IMG_SIZE)
		{
			//checking to see if the file is too big, just like the cookies I want to eat
			//this could cause the most problems
			return("File size is too big");
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
		{
			//Only formats allowed are JPG, JPEG, PNG & GIF
			
			// We really only want jpg/jpeg because they load quicker-but I'm not messing with your code --Jen
			
			//if we are here that means the file is not allowed
			//I'll also expect cookies too
			return("Wrong image format.");
		}
		if($uploadOk == 0)
		{
			//the file was bad
			return("The file was too big or was an unsupported file type.");
		}
		else
		{
		//This is where you will do your image cropping
		//here is a link http://php.net/manual/en/function.imagecrop.php
			if(move_uploaded_file($fileObj[COL_L_IMG]["tmp_name"], $target_file))
			{
				//we are cooking cookies!!!!
			}
			else
			{
				//something went wrong and I don't know why
				return("Something went wrong. Try again.");
			}
		}

	}

	public static function getImgArr($_blog_id = null)
	{
		if($_id == null || !is_numeric($_id))
			return(false);

		$smt = $db->prepare("SELECT ".COL_ID." FROM ".IMG_TB." WHERE ".COL_BLOG_ID." = :id ;");
		$smt->bindValue(":id", $this->id, SQLITE3_INTEGER);
		if($row === false)
		{
			return(null);
		}
		//If there are rows will will put them into the array
		$count = count($row);
		$imgArr[$i];
		for($i = 0 ; $row = $result->fetchArray() ; $i++)
		{
			$imgArr[$i] = new BlogImg($row[COL_ID]);
		}
		return ($imgArr);
	}

}
