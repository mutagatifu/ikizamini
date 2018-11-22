<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 12:08
 */
include 'dbconnection.php';
class examTerm extends DbConnection{
    private $month;
    private $from;
    private $to;
    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }
    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }
    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }
 public function recordTerms(){
        $query = $this->connection->query("INSERT INTO `registrationterm`(`month`, `from`, `to`) VALUES ('$this->month','$this->from','$this->to')");
        return $query;
 }
public function returnTerms(){
        $query = $this->connection->query("select * from registrationterm");
        return $query;
}

}

?>