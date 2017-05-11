<?php require 'header.php'?>
<div id="concertclick" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0;">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <p id="concertheading">Upcoming concerts</p>
        <?php foreach ($concert as $item) { ?>
        <img src="images/concert.jpg" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 img-responsive">
        <form action="#" method="POST">
            <button type="submit" name="" class="pull-right info btn btn-primary col-xs-3 " value="">More info</button>
        </form>
        <p class="concertlist col-lg-10 col-md-10 col-sm-10 col-xs-12"><?= $item['city'] . ", " . $item['date'] ?><p>
            <?php } ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
<?php require 'footer.php'?>
