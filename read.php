<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <style>
        .box{
            height: 75px;
            margin-top: 25px;
        }
    </style>
    <body>
        <section id="header">
            <div class="header_top">
                <div class="wrap">
                    <div class="logo">
                        <a href="index.php	"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="login_button">
                        <ul>
                            <li><a href="check.php">Log in</a><li> |
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        <section class="news container">
            <?php
            include "db.php";
                $id = $_GET['id'];
                $sql = "SELECT * FROM news WHERE id='$id'";
                $query = mysqli_query($db_con, $sql);
                $row = mysqli_fetch_assoc($query); ?>
                <img style="height: 250px;" src="<?=$row['photo']; ?>">
                <div class="box">

                   <?php  print_r($row['text']); ?>

                </div>

        </section>
        <section id="footer">
            <div class="footer">
                <div class="wrap">
                    <div class="footer_grid1">
                        <h3>About Us</h3>
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
                    </div>
                    <div class="footer_grid2">
                        <h3>Navigate</h3>
                        <div class="f_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="single.html">Articles</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Write for Us</a></li>
                                <li><a href="#">Submit Tips</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_grid3">
                        <h3>We're Social</h3>
                        <div class="img_list">
                            <ul>
                                <li><img src="images/facebook.png" alt="" /><a href="#">Facebook</a></li>
                                <li><img src="images/flickr.png" alt="" /><a href="#">Flickr</a></li>
                                <li><img src="images/google.png" alt="" /><a href="#">Google</a></li>
                                <li><img src="images/yahoo.png" alt="" /><a href="#">Yahoo</a></li>
                                <li><img src="images/youtube.png" alt="" /><a href="#">Youtube</a></li>
                                <li><img src="images/twitter.png" alt="" /><a href="#">Twitter</a></li>
                                <li><img src="images/yelp.png" alt="" /><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </section>
    </body>
</html>