<!--
/**
 * Created by PhpStorm.
 * User: 21104216
 * Date: 30/05/2015
 * Time: 10:08 PM
 */-->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <?php
                        $query = "SELECT * FROM `catagory`";
                        $all_categories = mysqli_query($db,$query);

                    while($row = mysqli_fetch_assoc($all_categories)){
                        $nav_li = $row['cat_title'];

                        ?>

                        <li><a href="#"><?php echo $nav_li ?></a></li>

                    <?php

                    }
                    ?>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                 <!--   <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>