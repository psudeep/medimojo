<?php
/* Get Count of files with file type grouping from mysql */

function getFTypeCount(){
  $uid = $_SESSION['uid'];
  $q = "SELECT ftype,COUNT(*) AS c FROM tbl_file WHERE uid = '".$uid."' GROUP BY ftype";
  $runSql = mysqli_query($c,$q);
  while($op = mysqli_fetch_array($runSql)){
    $ftype = $op['ftype'];
    $count = $op['c'];
    $data[] = array("ftype" => $ftype, "count" => $count);
  }
  return $data;
}

function getFamilyCount(){
  $q = "SELECT id FROM tbl_family WHERE uid = '".$uid."'";
  $runSql = mysqli_query($c,$q);
  $count = mysqli_num_rows($runSql);
  return $count;
}
