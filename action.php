<?php

include_once("DbOnly.php");
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $msg=$_POST['msg'];
//   $customertype=$_POST['customertype'];
  $ipAddress=$_SERVER['REMOTE_ADDR'];
  $fbLeads=$_POST['fbLeads'];
  $commingLeadsDate=date("Y-m-d");
  $getData="SELECT * FROM contact WHERE name='$name' AND mobile='$mobile' order by contactID desc";
  $qry=$con->query($getData);
  $cid=mysqli_fetch_object($qry);
  $lastId=$cid->contactID;
  
  $count=mysqli_num_rows($qry);
  if ($count > 0){ 
    $Insert="insert into leads (contactID,msg,ip,fbLeads,commingLeadsDate) values('$lastId','$msg','$ipAddress','$fbLeads','$commingLeadsDate')";
   
      $run=$con->query($Insert);
     redirect_to("https://elitedesignstudio.in/thankyou.php");
    

  }
  else{

      $Insert1="insert into contact (name,email,mobile) values('$name','$email','$mobile')";
      $run1=$con->query($Insert1);
      $last_id = mysqli_insert_id($con);
      if ($run1) {

         $Insert3="insert into leads (contactID,msg,ip,fbLeads,commingLeadsDate) values('$last_id','$msg','$ipAddress','$fbLeads','$commingLeadsDate')";
         $run3=$con->query($Insert3);
           redirect_to("thankyou.php");
      }else{
           
          redirect_to("https://www.elitedesignstudio.in/thankyou.php");

      }

  }
  
  
}




?>