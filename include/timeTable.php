<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 15:18
 */
include 'dbconnection.php';
class timeTable extends DbConnection
{
private $from;
private $to;
private $site;
private $examtype;
private $duration;
private $termRegistration;
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
    public function getSite()
    {
        return $this->site;
    }
    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }
    /**
     * @return mixed
     */
    public function getExamtype()
    {
        return $this->examtype;
    }
    /**
     * @param mixed $examtype
     */
    public function setExamtype($examtype)
    {
        $this->examtype = $examtype;
    }
    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    /**
     * @return mixed
     */
    public function getTermRegistration()
    {
        return $this->termRegistration;
    }
    /**
     * @param mixed $termRegistration
     */
    public function setTermRegistration($termRegistration)
    {
        $this->termRegistration = $termRegistration;
    }
public function recordTimeTable(){
        $query = $this->connection->query("INSERT INTO `timetableofexam`(`from`, `to`, `site`, `examType`, `duration`, `termRegistration`) 
                                        VALUES ('$this->from','$this->to','$this->site','$this->examtype','$this->duration','$this->termRegistration')");
        return $query;
}
/*returning intara of rwanda*/
    public function returnIntara(){
        $query = $this->connection->query("select * from intara");
        return $query;
    }
/*returning uturere by intara*/
public function returnDistrictByIntara($intara){
    $query = $this->connection->query("select * from locations where province = '$intara'");
    return $query;
}
/*return time table by intara*/
    public function returnTimeTableByIntara($intara){
        $query = $this->connection->query("select sites.id as 'site number', sites.name as 'site name',sites.streetname,locations.district,timetableofexam.id,
        timetableofexam.from,timetableofexam.to,timetableofexam.duration,timetableofexam.termRegistration,timetableofexam.examType,examtype.name
from sites,locations,timetableofexam,examtype
where sites.location=locations.id and locations.id in(select locations.id from locations where province='$intara') 
and timetableofexam.site=sites.id and timetableofexam.examType=examtype.id");
        return $query;
    }

}