<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 12:28
 */

include 'dbconnection.php';
class Examtype extends DbConnection{
    private $examName;
    /**
     * @return mixed
     */
    public function getExamName()
    {
        return $this->examName;
    }
    /**
     * @param mixed $examName
     */
    public function setExamName($examName)
    {
        $this->examName = $examName;
    }

    public function recordExamtype(){
        $query = $this->connection->query("INSERT INTO `examtype`(`name`) VALUES ('$this->examName')");
        return $query;
    }
}

?>