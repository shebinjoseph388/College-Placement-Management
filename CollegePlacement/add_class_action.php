<?php
include('dbcon.php');
 include('session.php');
 								error_reporting('E_ALL^E_NOTICE');

$session_id = $_POST['session_id'];
//$semester_id = $_POST['placement_id'];
$class_id = $_POST['class_id'];
$school_year = $_POST['year'];
$query = mysql_query("select * from teacher_class where  class_id = '$class_id' and teacher_id = '$session_id' and school_year = '$school_year' ")or die(mysql_error());
$count = mysql_num_rows($query);
$query1 = mysql_query("select * from teacher_class where  class_id = '$class_id' and school_year = '$school_year' ")or die(mysql_error());
$count1 = mysql_num_rows($query1);
if ($count > 0 OR $count1 >0){ 
echo "true";
}


else{

mysql_query("insert into teacher_class (teacher_id,class_id,thumbnails,school_year) values('$session_id','$class_id','nehadmin/uploads/thumbnails.jpg','$school_year')")or die(mysql_error());

$teacher_class = mysql_query("select * from teacher_class order by teacher_class_id DESC")or die(mysql_error());
$teacher_row = mysql_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];



$insert_query = mysql_query("select * from student where class_id = '$class_id'  AND year_of_studying = '$school_year'")or die(mysql_error());
while($row = mysql_fetch_array($insert_query)){
$id = $row['student_id'];
$year = $row['year_of_studying'];
mysql_query("insert into teacher_class_student (teacher_id,student_id,school_year,teacher_class_id) values('$session_id','$id','$year','$teacher_id')")or die(mysql_error());
echo "yes";
}
}
?>