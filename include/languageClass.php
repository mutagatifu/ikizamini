<?php
include 'dbconnection.php';
class indimi extends DbConnection
{
	private $language;
	private $date;
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function __construct()
    {
        parent::__construct();
    }
    public function setLanguage($lang){
    	$this->language=$lang;
    	
    }
    public function getLanguage(){
    	return $this->language;
    }
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }



    
    }
?>