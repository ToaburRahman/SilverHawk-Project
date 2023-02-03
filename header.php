<?php include'view_query_top_header.php';
    include'view_query_main_menu.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Hawk</title>
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section class="top_header">
        <div class="container">
            <div class="main_column">
                <div class="left_column">
                    <a href="tel:702-960-7754"> <i class="fa-solid fa-phone-volume"></i> <?php echo $top_data['Phone Number'];?></a>
                    <a href="mailto:info@SilverHawk.com"><i class="fa-regular fa-envelope"></i><?php echo $top_data['E-mail Address'];?></a>
                </div>
                <div class="right_column">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="main_menu_section">
        <div class="container">
            <div class="main_column">
                <div class="left_column">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="right_column">
                    <ul id="menu">
                        <?php while ($main_menu_data = mysqli_fetch_assoc($menu_result)) {?>

                            <li><a href="<?php echo  $main_menu_data['menu_url'];?>"><?php echo  $main_menu_data['menu_name'];?> </a></li>


                       <?php  }?>
                        
                     </ul>
                </div>
            </div>
        </div>
    </section>