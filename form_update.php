 <?php 
       include("includes/database.class.php");

      
         if(isset($_POST['btnsubmit']))

{ 
         // print_r($_POST);
          // echo "<pre>";
            $patient_id=$_POST['patient_id'];
            $first_name=$_POST['first_name'];
            $surname=$_POST['surname'];
            $dob=$_POST['dob'];
            $age=$_POST['age'];
            $totalscore=$_POST['total_score'];
            $question1=$_POST['question1'];
            $question2=$_POST['question2'];
            $question3=$_POST['question3'];
            $question4=$_POST['question4'];
            $question5=$_POST['question5'];

            $question6=$_POST['question6'];
            $question7=$_POST['question7'];

            $question8=$_POST['question8'];
            $question9=$_POST['question9'];
            $question10=$_POST['question10'];
            $question11=$_POST['question11'];
            $question12=$_POST['question12'];
           
              date_default_timezone_set('Europe/London');
              $cdate = date("d-m-Y H:i:s");
             
       

              $db=new database();  
             //  echo "UPDATE `patient_detail` SET `total_score`='$totalscore',`created_on`='$cdate' WHERE `id`='$patient_id'"; 
              $db->query("UPDATE `patient_detail` SET `total_score`='$totalscore',`created_on`='$cdate' WHERE `id`='$patient_id'");
              $db->execute();
   
              $db1=new database();   
              $db1->query("UPDATE `pain_score` SET `question1`='$question1',`question2`='$question2',`question3`='$question3',`question4`='$question4',`question5`='$question5',`question6`='$question6',`question7`='$question7',`question8`='$question8',`question9`='$question9',`question10`='$question10',`question11`='$question11',`question12`='$question12',`added_on`='$cdate' WHERE `patient_id`='$patient_id'");
              $db1->execute();


             
               session_write_close();echo "<script>alert('Updated Successfully');window.location='admin_view.php';</script>";


       

 


    


}
  




?>

