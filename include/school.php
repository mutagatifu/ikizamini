<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 09:59
 */
include "dbconnection.php";
class School extends DbConnection{
    private $name;
    private $location;
    private $streename;
    private $owner;
    private $email;
    private $phone;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getStreename()
    {
        return $this->streename;
    }
    /**
     * @param mixed $streename
     */
    public function setStreename($streename)
    {
        $this->streename = $streename;
    }
    public function recordSchool(){
        $query = $this->connection->query("insert into school (name,location,streetname,owner,email,phone) values ('$this->name','$this->location','$this->streename','$this->owner','$this->email','$this->phone')");
        return $query;
    }
    /*return all schools*/
    public function fetchSchools(){
        $query = $this->connection->query("select * from school");
        return $query;
    }
    /*return all staffs by school*/
    public function fetstaffbySchool(){
        $query = $this->connection->query("");
        return $query;
    }
//    return staffs by school
public function fetchStaffBySchool($schoolId){
        $query = $this->connection->query("select school.name,school.streetname,school.owner,school.email,school.phone,
        staff.name,staff.phone_number,staff.email,staff.position,staff.gender,staff.age,staff.profile_image from
 school,staff where staff.school_id=school.id and school.id='$schoolId'");
        return $query;
}
public function recordRate($school){
        $query=$this->connection->query("update school set rates = rates + 1 where school.id='$school'");
        return $query;
}
public function fetchServiceBySchoolId($schoolId){
    $query = $this->connection->query("select * from services where schoolId='$schoolId'");
    return $query;
}
public function updateSchool($schoolId,$updateTime){
    $query = $this->connection->query("update school set name='$this->name',location='$this->location',streetname='$this->streename',owner='$this->owner',email='$this->email',phone='$this->phone',updated_time='$updateTime' where id='$schoolId'");
return $query;

}
public function deleteSchool($schoolId)
{
    $query = $this->connection->query("delete from school where id='$schoolId'");
    return $query;
}






}
?>