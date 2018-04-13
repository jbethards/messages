<?php
/**
 * Created by PhpStorm.
 * User: Joseph Bethards
 * Date: 4/5/2018
 * Time: 7:31 PM
 */
function getConnection(){
    $username='jbethard_user';
    $password='#iykEA36UI?y';
    $host='localhost';
    $database='jbethard_It328';
    $connection= mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        echo 'Error connection to DB:'.mysqli_connect_error();
        exit;
    }
    return $connection;
}
function getMessages(){
    $connection=getConnection();
    $query= 'Select id,body From messages';
    $results=mysqli_query($connection,$query);
    if(!$results){
        echo'Error returning results';
        exit;
    }
    $records=array();
    while($row = mysqli_fetch_assoc($results)){
        $records[]=$row;
    }
    mysqli_free_result($results);
    return $records;


}
function insertMessage($message){

}
$username='jbethard_user';
$password='#iykEA36UI?y';