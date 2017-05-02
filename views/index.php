<?php

namespace views\index;

require '../app/Database.php';
require '../app/Controllers/comments.php';
require '../App/Models/Model.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arctic Monkeys</title>

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../public/css/custom.css" rel="stylesheet">

</head>
<body id="home">
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header" style="padding: 0;">
        <hr >
        <div class="row pull-right menurow" style="margin:3px;">
            <a href="#" class=" menu home"> HOME</a>
            <a href="#" class="menu albums"> ALBUMS</a>
            <a href="#" class=" menu fansforum ">FANS FORUM</a>
        </div>

        </div>

</header>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dive">

    <main  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main" style="padding: 0;">

        <form action="#" method="POST" name="member">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="../public/images/alex.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12 alex">
                <?php
               $model->get_members("SELECT `name`, `instruments`  FROM members where `name` = 'Alex Turner' ");
                ?>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 matt">
                <img src="../public/images/matt.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
              $model->get_members("SELECT `name`, `instruments`  FROM members where `name` = 'Matthew Helders' ");
                ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="../public/images/jamie.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
            $model->get_members("SELECT `name`, `instruments`  FROM members where `name` = 'Jamie Cook' ");
                ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="../public/images/nick.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
          $model->get_members("SELECT `name`, `instruments`  FROM members where `name` = 'Nick O\\'Malley' ");
                ?>
            </div>

        </form>
    </main>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cd" id="albums" style="padding:0px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
        <div class="col-lg-6 col-md-6 col-sm-12 xol-xs-12 am ">

        </div>
        <div class="col-lg-6 col-md-6 ">
            <h2>AM</h2>
            <?php
          $model->get_songs("SELECT `songs` FROM songs WHERE albums = 'AM'");
            ?>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcov" style="padding:0px;">
        <div class="col-lg-6 col-md-6 suck">

        </div>
        <div class="col-lg-6 col-md-6">
            <h2>Suck It and See</h2>
            <?php
          $model->get_songs("SELECT `songs` FROM songs WHERE albums = 'Suck it and see'");
            ?>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
        <div class="col-lg-6 col-md-6 humbug">

        </div>
        <div class="col-lg-6 col-md-6">
            <h2>Humbug</h2>
            <?php
            $model->get_songs("SELECT `songs` FROM songs WHERE albums = 'Humbug'");
            ?>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcov" style="padding:0px;">
            <div class="col-lg-6 col-md-6 worst">

            </div>
            <div class="col-lg-6 col-md-6">
                <h2>Favourite Worst Nightmare</h2>
                <?php
               $model->get_songs("SELECT `songs` FROM songs WHERE albums = 'Favourite Worst Nightmare'");
                ?>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
            <div class="col-lg-6 col-md-6 people">

            </div>
            <div class="col-lg-6 col-md-6">
                <h2>Whatever People Say I Am, That's What I'm Not</h2>
                <?php
             $model->get_songs("SELECT `songs` FROM songs WHERE albums = 'Whatever People Say I Am, That\\'s What I\\'m Not'");
                ?>
            </div>
        </div>

    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comment">
            <?php
            $comments->insert_comment();
            ?>
            <form action="#" method="POST" class="form-inline" id="fans" >
                <p class="formfield">Name:</p>
                <input type = "text" name="fname" class="form-control">
                <br>
                <p class="formfield formcomment">Comment:</p>
                <textarea class="form-control textcomment" cols="25" rows="4" name="comment"></textarea>
                <br>
                <br>
                <button type="submit" name="send" class="btn btn-primary send">Send</button>
            </form>
            <br>
            <div class="bordercomments col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-9 col-md-9">
                    <p class="fieldcomment">Comments</p>

                    <?php

                  $model->get_comments();
                    ?>

                </div>
                <div class="col-lg-2 col-md-2"></div>

            </div>
        </div>
    </div>

    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer"  style="padding:0px";>
            <p class="copy">&copy Arctic Monkeys fan page</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../public/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>
