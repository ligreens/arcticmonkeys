<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arctic Monkeys edit</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body class="edit">
<h1 class="col-lg-12">Welcome <?php echo $_SESSION['user_id'] ?> </h1>
<form action="#" method="post">
    <button type="submit" name="logout" class="pull-right ">Log out</button>
</form>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="#" method="POST" class="form-inline">
        <h3 class="formedit">Add concert:</h3>
        <p class="formedit">City:</p>
        <input type="text" name="city" class="form-control">
        <br>
        <p class="formedit">Date:</p>
        <input type="text" name="date" class="form-control">
        <button type="submit" name="add" class="btn btn-primary send">Add</button>
    </form>
    <?php foreach ($concert as $item) { ?>
        <div class="concerts col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h3><?= $item['city'] . " " . $item['date'] ?>
                <h3>
                    <?php $controller->delete('concert'); ?>

                    <form action="#" method="POST" class="form-inline">
                        <p class="concert">City:</p>
                        <input type="text" name="city" class="form-control" value="<?php echo $item['city'] ?>">
                        <br>
                        <p class="concert">Date:</p>
                        <input type="text" name="date" class="form-control" value="<?php echo $item['date'] ?>">
                        <button type="submit" name="delete" class=" delete btn btn-primary"
                                value="<?php echo $item['id'] ?>">Delete
                        </button>
                        <button type="submit" name="update" class=" delete btn btn-primary"
                                value="<?php echo $item['id'] ?>">Update
                        </button>
                    </form>
        </div>
    <?php } ?>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <h3>Comments</h3>
        <form action="#" method="POST" class="form-inline" id="fans">
            <p class="formedit">Name:</p>
            <input type="text" name="fname" class="form-control admincomment"
                   value="<?php echo $_SESSION['user_id'] ?>">
            <br>
            <p class="formedit formcomment">Comment:</p>
            <textarea class="form-control textcomment" cols="25" rows="4" name="comment"></textarea>
            <br>
            <br>
            <button type="submit" name="send" class="btn btn-primary send">Send</button>
        </form>
        <br>
        <div class="bordercomments editcomment col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-9 col-md-9">
                <p class="">Comments</p>
                <?php foreach ($comments as $item) { ?>
                <h6 id='date editdate'><?= $item['date'] ?>
                    <h6>
                        <form action="#" method="POST">
                            <?php $controller->delete('comments'); ?>
                            <button type="submit" name="delete" class="pull-right delete btn btn-primary"
                                    value="<?php echo $item['id'] ?>">Delete
                            </button>
                        </form>
                        <p class='commentname editcommentanme'><?= $item['fname'] ?>: </p>
                        <p class='comments editcomments  '><?= $item['comment'] ?></p><br>
                        <?php } ?>
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>






<div class="col-lg-5">
    <p class="songlist songlisthigh albumheadings ">WHY'D YOU ONLY CALL ME WHEN YOU'RE HIGH? (2013)</p>
    <?php $albums = $model->get_songs_member("songs", 'albums','Why\'d You Only Call Me When You\'re High?') ?>
    <?php foreach ($albums as $item) { ?>
    <p class="songlisthigh songlist "><?= $item['songs'] ?>
    <p>
        <?php } ?>
    <p class="songlist songlistknow albumheadings">DO I WANNA KNOW?(2013)</p>
    <?php $albums = $model->get_songs_member("songs", 'albums','Do I Wanna Know?') ?>
    <?php foreach ($albums as $item) { ?>
    <p class="songlistknow songlist "><?= $item['songs'] ?>
    <p>
        <?php } ?>
    <p class="songlist songlistmine albumheadings">R U MINE? (2012)</p>
    <?php $albums = $model->get_songs_member("songs", 'albums','R U Mine?') ?>
    <?php foreach ($albums as $item) { ?>
    <p class="songlistmine songlist "><?= $item['songs'] ?>
    <p>
        <?php } ?>
    <p class="songlist songlistblack albumheadings">BLACK TREACLE (2012)</p>
    <?php $albums = $model->get_songs_member("songs", 'albums','Black Treacle') ?>
    <?php foreach ($albums as $item) { ?>
    <p class="songlistblack songlist "><?= $item['songs'] ?>
    <p>
        <?php } ?>
    <p class="songlist songlistsee albumheadings">SUCK IT AND SEE (2011)</p>
    <?php $albums = $model->get_songs_member("songs", 'albums','Suck it and see(2011)') ?>
    <?php foreach ($albums as $item) { ?>
    <p class="songlistsee songlist "><?= $item['songs'] ?>
    <p>
        <?php } ?>
</div>