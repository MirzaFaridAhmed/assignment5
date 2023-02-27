<?php include "./class.php";?>
<!doctype html>
<html lang="en">

<head>
    <title>Module 5 - Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

</head>

<body>

   
            <h2>Task-1 Html Form</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                
                    <label>Name</label>
                    <input type="text" name="name" required="required">
       
                
                    <label>Email</label>
                    <input type="email" name="email" required="required">
           
                
                    
                    <!-- Login -->
                    <input type="submit" value="Submit">

            </form>
        
       
            <h2>Task-2 Basic OOP</h2>
            <p>Name: <span><?php echo $taskTwoName; ?></span></p>
            <p>Email: <span><?php echo $taskTwoEmail; ?></span></p>
            <hr /><br>
            <h2>Task-3 Super Global</h2>
            <p>Name: <span><?php echo $name; ?></span></p>
            <p>Email: <span><?php echo $email; ?></span></p>
        

</body>

</html>
