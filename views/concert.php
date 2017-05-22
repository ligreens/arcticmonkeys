<?php require 'header.php' ?>
<div id="concertclick" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0;">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <p id="concertheading">Upcoming concerts</p>
        <?php foreach ($concert as $value) { ?>
        <img src="images/concert.jpg" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 img-responsive">

            <a class="delete btn btn-primary" href="/update.concert?id=<?= $value['id'] ?>" role='button'>Update</a>

        <p class="concertlist col-lg-10 col-md-10 col-sm-10 col-xs-12"><?= $value['city'] . ", " . $value['date'] ?><p>
            <?php } ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>


<?php require 'footer.php' ?>
