<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css ">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>

<div class="dashboard">
    <div class="row">
       <?php include'sidebar.php' ?>
        <div class="right_column col-10">
            <?php include'dashboard_homepage.php' ?>
        </div>
    </div>
</div>



<script  src="js/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js" type="text/javascript" > </script>
</body>
</html>