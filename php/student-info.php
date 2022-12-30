<!DOCTYPE html>
<html>
    <head>
        <title>Student Information</title>
    </head>

    <?php

            echo "<h1>Cosmos College Students Information</h1>";
            $student_photo_path=array("","","");
            $student_name=array("Nischal Khanal","Rabin Mishara","Aayush Karki");
            $student_rollno=array(200120,200101,200134);
            $student_interest=array("Artificial Intellegence","App Development","Web Development");

            for ($i=0; $i < 3; $i++) { 
                echo "Name : ".$student_name[$i]."<br>\n";
                echo "Rollno : ".$student_rollno[$i]."<br>\n";
                echo "Interest : ".$student_interest[$i]."<br><br><br>\n";
            }
    ?>
</html>