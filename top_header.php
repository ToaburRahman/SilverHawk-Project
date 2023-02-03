<?php 
include'view_query_top_header.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>

<div class="dashboard" style="background: #C3D7EF;">
    <div class="row">
         <?php include'sidebar.php' ?>
        <div class="right_column col-10">
                <div class="row">
                    <div class="form-group col-6">
                        <form action="insart_query_page.php" method="POST" class="top_header_input">
                        <h3>Insert Top Header Data</h3> 
                            <label >Phone Number</label>
                            <input type="tel" class="form-control"  placeholder="Enter Phone" name='phone'>
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                     <div class="form-group col-6">
                        <form action="update_query_top_header.php" method="POST" class="top_header_input"> 
                            <h3>Update Top Header Data</h3>
                            <label >Phone Number</label>
                            <input type="tel" class="form-control" value="<?php echo $top_data['Phone Number'];?>" name='phone'>
                            <label>Email address</label>
                            <input type="email" class="form-control" value="<?php echo $top_data['E-mail Address'];?>" name="email">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                    
                </div>
            
        </div>
    </div>

</div>



<script  src="js/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js" type="text/javascript" > </script>
</body>
</html>