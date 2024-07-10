<?php include("includes/database.class.php");?>

 
 
    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

    <!-- jQuery library file -->
    <script type="text/javascript"src="https://code.jquery.com/jquery-3.5.1.js"> </script> 

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script> 
</head> 
       
                         <div class="project-head">
                             <h4><center>Patient Record</center></h4>
                      
                       </div>
                     
                     
                   <body> 
                  
                  
    <!--HTML table with patient data-->
    <table id="tableID" class="display" style="width:80%"> 
        <thead> 
            <tr> 
                <th>Sl No</th>
                <th>First Name</th>  
                <th>SurName </th>  
                <th>Age</th> 
              
               
                
               <th>Date Of Birth</th>
                <th>Total Score</th> 
               
                 <th>Date of submission</th>
               <th>Action</th>
                
                
            </tr> 
        </thead> 
        <tbody> 
                        <?php $i=1;
            
    
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("select * from patient_detail");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 {
                                  ?>
                                     
            <tr> 
                
                 <td><?php echo $i;?></td>
                <td><?php echo $result['first_name'];?></td> 
                <td><?php echo $result['surname'];?></td> 
                 <td><?php echo $result['age'];?></td>
                 

                <td><?php echo $result['dob'];?></td> 
                <td><?php echo $result['total_score'];?></td>
                <td><?php echo $result['created_on'];?></td>
              
               <td><a class="btn btn-primary" href="view_patientrecord.php?ids=<?php echo $result['id'];?>">Click to view</a></td>
                
              
               
            </tr> 
           <?php    $i++; } ?>  
             
        </tbody> 
    </table> 





</body></div></div></div></div>
    <script> 

        /* Initialization of datatable */ 
        $(document).ready(function() { 
            $('#tableID').DataTable({ }); 
        }); 
    </script> 





  

    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <!-- <script type="text/javascript" src="js/slick.min.js"></script> -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- <script src="js/calendar.js"></script> -->




</body> 

</html> 
