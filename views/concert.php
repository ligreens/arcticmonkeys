<?php require 'header.php' ?>
<div id="concertclick" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0;">

    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <p id="concertheading">Upcoming concerts</p>
        <?php foreach ($concertData as $value) { ?>

        <img src="images/concert.jpg" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 img-responsive">

        <a class="add  btn btn-primary pull-right"
           href="/update.concert?id=<?= $value['concert']['id'] ?> ,<?= $value['city']['id'] ?>"
           role='button'>Update</a>
        <a class="add  btn btn-primary pull-right deletebtn" href="/delete?id=<?= $value['concert']['id'] ?>">Delete</a>
        <p class="concertlist col-lg-10 col-md-10 col-sm-10 col-xs-12"><?= $value['concert']['date'] ?>
            , <?= $value['city']['name'] ?>
        <p>
            <?php } ?>
    </div>
    <a class="add btn btn-primary" href="/add.concert" role="button">Add</a>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
<?php require 'footer.php' ?>
