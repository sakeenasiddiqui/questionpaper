<?php

include 'header.php';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'examdatabase');

?>
<!DOCTYPE html>
<html>
    <head>
         <title></title>
         <link rel="stylesheet" type="text/css" href="bootstrap.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
         <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">


    </head>
    <body>
     <div class="container">

     <br> <h1 class="text-center text-primary"> Online Examination </h1><br>
     <div class ="col-lg-g m-auto d.block">
     <div class="card">
         <h3 class="text-center card-header"> JavaScript Exam </h3>
     </div> 

     </div><br>
    <form  action= "check.php"  method="POST">

     <?php

        $results_per_page= 5;
        $i=1;
        if (!isset ($_GET['page']) ) {  
            $page = 1; 
            $i=1;
        } else {  
            $page = $_GET['page']; 
            $i=6;
        }

        $page_first_result = ($page-1) * $results_per_page;  
     
        $query = "SELECT * FROM questions1 LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($con, $query); 

        while ($rows = mysqli_fetch_array($result)) {  
           
    ?>
       <div class="card">
        <h4 class="card-header"><?php echo $rows['questions'] ?>  </h4>

        <?php
          
            $q = "select * from answers1 where ans_id = $i";
            $query = mysqli_query($con, $q);
            while($rows = mysqli_fetch_array($query))
            {
    
            ?>
            <div class="card-body">
                <input type="checkbox" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['a_id'];  ?>">
                <?php  echo $rows['answers'] ; 
                ?>

            </div>

    <?php
     }
     $i++;
    }

    ?>
    <br>
    <br>

    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d.block">
    </form>
</div>
    </div><br><br>
    
    <?php

    echo '<a href = "examview.php?page=1">Previous</a> <a href = "examview.php?page=2">Next</a>';

    ?>

    </body>
    
</html>

