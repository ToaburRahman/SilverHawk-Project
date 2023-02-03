<?php 
    include'view_query_top_header.php';
    include'view_query_main_menu.php';
  


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
                        <form action="insert_main_menu.php" method="POST" class="top_header_input">
                        <h3 style="text-align: right; margin-bottom: 10px;">Main Menu</h3> 
                            <label for="menuName" >Menu Name</label>
                            <input type="text" class="form-control"  placeholder="Enter Menu Name" name='menu_name' id="menuName">
                            <label for="menuURL">Menu URL</label>
                            <input type="text" class="form-control" placeholder="Enter Menu URL" name="menu_url" id="menuURL">
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!--Main lOGO Update -->
                    <div class="form-group col-6" style="box-sizing: border-box;padding-left: 120px; padding-top: 70px;">
                        <h2>Update Main Logo</h2>
                        <form action="insert_logo.php" method="POST" >
                        <input type="file" name="" >
                        </form>
                    </div>




                    <table class="table table table-striped table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Menu Name</th>
                          <th scope="col">Menu URL</th>
                          <th scope="col">Menu Edit</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php while ($main_menu_data = mysqli_fetch_assoc($menu_result)){?>
                        <tr>
                          <td><?php echo $main_menu_data['menu_name']; ?></td>
                          <td><?php echo $main_menu_data['menu_url']; ?></td>
                          <td>

                                <form action="main_menu_edit_item.php?id=<?php echo $main_menu_data['id']; ?>" method="POST">

                                    <input  type="text" value="<?php echo $main_menu_data['menu_name']; ?>" name="menu_name">

                                    <input type="text" value="<?php echo $main_menu_data['menu_url']; ?>" name="menu_url">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>

                          </td>
                          <td><button type="button" class="btn btn-danger"><a href="delete_main_menu_item.php?id=<?php echo $main_menu_data['id']; ?>" style="color:white; text-decoration: none;">Delete</a></button></td>
                        </tr>
                    <?php }?>
                        </tbody>
                        </table>   

                    </div>
                                
            </div>
    </div>
</div>



<script  src="js/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js" type="text/javascript" > </script>
</body>
</html>