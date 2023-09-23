<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Final Grade Results</title>
    <h1> Final Grades: </h1> 
    </head>
    <body>
        <?php
          //retrieves the input from the html file for assignments 1-6, final project and finalexam 
            $Assign1=$_POST['Assignment1'];
            $Assign2=$_POST['Assignment2'];
            $Assign3=$_POST['Assignment3'];
            $Assign4=$_POST['Assignment4'];
            $Assign5=$_POST['Assignment5'];
            $Assign6=$_POST['Assignment6'];
          
            $FinalProject=$_POST['finalProject'];
            $FinalExam=$_POST['FinalExam'];


            //calculates the assignment average 
            $allAssign=($Assign1+$Assign2+$Assign3+$Assign4+$Assign5+$Assign6)/6;
            $Totalallassign = $allAssign*0.5;
            
            //calculates the scores for the final project and final exam 
            $Final_project=$FinalProject*0.30;
            $final_exam=$FinalExam*0.20;



            //calculates total score for course
            $totalgrade=$Totalallassign+$Final_project+$final_exam; 



            
            echo 'Assignments total grade:'. round($allAssign) . '<br />';
            echo 'Assignments Average:    ' . ($Totalallassign) .'<br />';
            echo 'Final Project:  ' . ($Final_project). '<br />';
            echo 'Final Exam:      ' . round($final_exam) . '<br />';
            echo 'Final Score for the course: ' . ($totalgrade) . '<br />';
        
        ?>
    </body>
</html>
