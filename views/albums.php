<?php require 'header.php'?>

<main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 albums" style="padding: 0px;">
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songslist">ALBUMS</p>
    <div class="col-lg-3 songs " style="padding:0px">

        <?php foreach ($album as $value) { ?>

            <p class=" albumheadings"><?= $value['name'] ?></p>
            <br>
        <?php } ?>
    </div>
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singles">SINGLES</p>
    <div class="col-lg-3 songs single" style="padding:0px">
        <?php foreach ($single as $value) { ?>

            <p class=" albumheadings"><?= $value['name'] ?></p>
            <br>
        <?php } ?>
    </div>

</main>
<?php require 'footer.php'?>
