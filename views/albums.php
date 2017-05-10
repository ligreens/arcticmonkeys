<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arctic Monkeys</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="/css/custom.css" rel="stylesheet">

</head>
<body id="homealbums">
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header" style="padding: 0;">
        <hr>
        <div class="row pull-right menurow" style="margin:3px;">
            <a href="/" class=" menu home"> HOME</a>
            <a href="#" class="menu album"> ALBUMS</a>
            <a href="/" class=" menu fansforum ">FANS FORUM</a>
            <a href="concert" class="menu">CONCERTS</a>
        </div>

    </div>

</header>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cd" id="" style="padding:0px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0px;">


      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right b" id="songs" >ALBUMS</p>

        <ul>
            <li><button type="submit" class="albumam albumbutton" name="am">AM</button>
                <?php $albums = $model->get_songs('AM') ?>
            <?php foreach ($albums as $item) { ?>
            <p class="songlist songlistam"><?= $item['songs'] ?><p>
                <?php } ?>


            </li>
            <li><button type="submit" class="albumsuck albumbutton" name="suck">SUCK IT AND SEE</button>

                <?php $albums = $model->get_songs('Suck It and See') ?>
                <?php foreach ($albums as $item) { ?>
                <p class="songlist songlistsuck"><?= $item['songs'] ?><p>
                    <?php } ?>
            </li>
            <li><button type="submit" class="albumhumbug albumbutton" name="humbug">HUMBUG</button>

                <?php $albums = $model->get_songs('Humbug') ?>
                <?php foreach ($albums as $item) { ?>
                <p class="songlist songlisthumbug"><?= $item['songs'] ?><p>
                    <?php } ?>

            </li>
            <li><button type="submit" class="albumworst albumbutton" name="worst">FAVOURITE WORST NIGHTMARE</button>

                <?php $albums = $model->get_songs('Favourite worst nightmare') ?>
                <?php foreach ($albums as $item) { ?>
                <p class="songlistworst songlist"><?= $item['songs'] ?><p>
                    <?php } ?>

            </li>
            <li><button type="submit" class="albumpeople albumbutton" name="people">WHATEVER PEOPLE SAY I AM, THAT'S WHAT I'M NOT</button>

                <?php $albums = $model->get_songs('Whatever People Say I Am, That\'s What I\'m Not') ?>
                <?php foreach ($albums as $item) { ?>
                <p class="songlistpeople songlist"><?= $item['songs'] ?><p>
                    <?php } ?>

            </li>
        </ul>

</div>
</div>
<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cd" id="albums" style="padding:0px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
        <div class="col-lg-6 col-md-6 col-sm-12 xol-xs-12 am ">

        </div>
        <div class="col-lg-6 col-md-6 ">
            <h2>AM</h2>
            <?php /*$albums = $model->get_songs('AM') ?>
            <?php /*foreach ($albums as $item) { ?>
            <p class="album"><?/*= $item['songs'] ?><p>
                <?php /*} ?>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcov" style="padding:0px;">
        <div class="col-lg-6 col-md-6 suck">

        </div>
        <div class="col-lg-6 col-md-6">
            <h2>Suck It and See</h2>
            <?php /*$albums = $model->get_songs('Suck It and See') */?>
            <?php /*foreach ($albums as $item) { */?>
            <p class="album"><?/*= $item['songs'] */?><p>
                <?php /*} */?>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
        <div class="col-lg-6 col-md-6 humbug">

        </div>
        <div class="col-lg-6 col-md-6">
            <h2>Humbug</h2>
            <?php /*$albums = $model->get_songs('Humbug') */?>
            <?php /*foreach ($albums as $item) { */?>
            <p class="album"><?/*= $item['songs'] */?><p>
                <?php /*} */?>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcov" style="padding:0px;">
            <div class="col-lg-6 col-md-6 worst">

            </div>
            <div class="col-lg-6 col-md-6">
                <h2>Favourite Worst Nightmare</h2>
                <?php /*$albums = $model->get_songs('Favourite worst nightmare') */?>
                <?php /*foreach ($albums as $item) { */?>
                <p class="album"><?/*= $item['songs'] */?><p>
                    <?php /*} */?>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cdcover" style="padding:0px;">
            <div class="col-lg-6 col-md-6 people">

            </div>
            <div class="col-lg-6 col-md-6">
                <h2>Whatever People Say I Am, That's What I'm Not</h2>
                <?php /*$albums = $model->get_songs('Whatever People Say I Am, That\'s What I\'m Not') */?>
                <?php /*foreach ($albums as $item) { */?>
                <p class="album"><?/*= $item['songs'] */?><p>
                    <?php /*} */?>
            </div>
        </div>

    </div>

    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px" ;>
            <p class="copy">&copy Arctic Monkeys fan page</p>
        </div>
    </footer>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>