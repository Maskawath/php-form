<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

     <div class="form-user">
         <h1>Add Your Info</h1>
         <?php
         if (isset($mess))
         {
             echo $mess;
         }
         ?>
         <form action="" method="GET" enctype="multipart/form-data">
             <input type="text" placeholder="Name" name="name">
             <input type="email" placeholder="email"  name="email">
             <input type="text" placeholder="Phone Number"  name="number">
             <input type="text" placeholder="age"  name="age">
             <input type="file" value="img" name="img">
             <input type="submit" value="Submit"  name="submitButton">

         </form>

     </div>

     <?php
     if(isset($_GET["submitButton"])){
         $name= $_GET["name"];
         $email= $_GET["email"];
         $cell= $_GET["number"];
         $age= $_GET["age"];
         if (filter_var($email, FILTER_VALIDATE_EMAIL)){
             echo "EMAIL IS VALID";

         }
         else "NOT AN VALID EMAIL";

         if (empty($name)|| empty($email)|| empty($cell)||empty($age)){
             $mess= "<p style='color: red;'> The Field Is Empty</p>";
         }
         else {
             $mess= "<p style='color: green;'>Submitted</p>";
         }
     }
   
     ?>
<h1>Git Added</h1>
</body>
</html>
