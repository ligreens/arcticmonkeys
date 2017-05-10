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
<main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 albums" style="padding: 0px;">


    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songslist">ALBUMS</p>

    <div class="col-lg-3 songs" style="padding:0px">
        <button type="submit" class="albumam albumbutton"  name="am">AM </button>
        <br>
        <button type="submit" class="albumsuck albumbutton" name="suck">SUCK IT AND SEE </button>
        <br>
        <button type="submit" class="albumhumbug albumbutton" name="humbug">HUMBUG </button>
        <br>
        <button type="submit" class="albumworst albumbutton" name="worst">FAVOURITE WORST NIGHTMARE </button>
        <br>
        <button type="submit" class="albumpeople albumbutton " name="people">WHATEVER PEOPLE SAY I AM,THAT'S WHAT I'M <br> NOT </button>

    </div>


    <div class="col-lg-5">

        <p class="songlist songlistam albumheading">AM (2013)</p>
        <img src="images/am.png" class="songlist songlistam img-responsive suck pull-right">
        <?php $albums = $model->get_songs('AM') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlistam"><?= $item['songs'] ?>
        <p>
            <?php } ?>

        <p class="songlist songlistsuck albumheading">SUCK IT AND SEE (2011)</p>
        <img src="images/suckit.png" class="songlist songlistsuck img-responsive suck pull-right">
        <?php $albums = $model->get_songs('Suck It and See') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlistsuck"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlisthumbug albumheading">HUMBUG (2009)</p>
        <img src="images/humbug1.png" class="songlist songlisthumbug img-responsive suck pull-right">
        <?php $albums = $model->get_songs('Humbug') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlisthumbug"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistworst albumheading">FAVOURITE WORST NIGHTMARE (2007)</p>
        <img src="images/worst.png" class="songlist songlistworst img-responsive suck pull-right">
        <?php $albums = $model->get_songs('Favourite worst nightmare') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistworst songlist"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistpeople albumheading"> WHATEVER PEOPLE SAY I AM, THAT'S WHAT I'M NOT (2006)</p>
        <img src="images/people.png" class="songlist songlistpeople img-responsive suck pull-right">
        <?php $albums = $model->get_songs('Whatever People Say I Am, That\'s What I\'m Not') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistpeople songlist"><?= $item['songs'] ?><p>
            <?php } ?>

    </div>
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singles">SINGLES</p>
    <div class="col-lg-3 songs" style="padding:0px">
        <button type="submit" class="albumhigh albumbutton " name="">WHY'D YOU ONLY CALL ME WHEN YOU'RE HIGH?
        </button>
        <br>
        <button type="submit" class="albumknow albumbutton" name="">DO I WANNA KNOW?
        </button>
        <br>
        <button type="submit" class="albummine albumbutton" name="">R U MINE?
        </button>
        <br>
        <button type="submit" class="albumblack albumbutton" name="">BLACK TREACLE?
        </button>
        <br>
        <button type="submit" class="albumsee albumbutton" name="">SUCK IT AND SEE
        </button>
        <br>
        <button type="submit" class="albumbutton"  name="">THE HELLACAT SPANGLED SHALALALA</button>
        <br>
        <button type="submit" class="albumbutton"  name="">DON'T SIT DOWN 'CAUSE I MOVED YOUR CHAIR</button>
        <br>
        <button type="submit" class="albumbutton"  name="">MY PROPELLER</button>
        <br>
        <button type="submit" class="albumbutton"  name="">CORNERSTONE</button>
        <br>
        <button type="submit" class="albumbutton"  name="">CRYING LIGHTNING</button>
        <br>
        <button type="submit" class="albumbutton"  name="">TEDDY PICKER</button>
        <br>
        <button type="submit" class="albumbutton"  name="">FLUORESCENT ADOLESCENT</button>
        <br>
        <button type="submit" class="albumbutton"  name="">MATADOR/DAFRAME2R</button>
        <br>
        <button type="submit" class="albumbutton"  name="">BRAINSTORM</button>
        <br>
        <button type="submit" class="albumbutton"  name="">LEAVE BEFORE THE LIGHTS COME ON</button>
        <br>
        <button type="submit" class="albumbutton"  name="">WHO THE FUCK ARE ARCTIC MONKEYS?</button>
        <br>
        <button type="submit" class="albumbutton"  name="">WHEN THE SUN GOES DOWN</button>
        <br>
        <button type="submit" class="albumbutton"  name="">I BET YOU LOOK GOOD ON THE DANCEFLOOR</button>
        <br>
        <button type="submit" class="albumbutton"  name="">FIVE MINUTES WITH ARCTIC MONKEYS</button>
        <br>
    </div>
    <div class="col-lg-5">
        <p class="songlist songlisthigh albumheading ">WHY'D YOU ONLY CALL ME WHEN YOU'RE HIGH? (2013)</p>
        <?php $albums = $model->get_songs('Why\'d You Only Call Me When You\'re High?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlisthigh songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>

        <p class="songlist songlistknow albumheading">DO I WANNA KNOW?(2013)</p>
        <?php $albums = $model->get_songs('Do I Wanna Know?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistknow songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistmine albumheading">R U  MINE? (2012)</p>
        <?php $albums = $model->get_songs('R U Mine?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistmine songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistblack albumheading">BLACK TREACLE (2012)</p>
        <?php $albums = $model->get_songs('Black Treacle') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistblack songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>

        <p class="songlist songlistsee albumheading">SUCK IT AND SEE (2011)</p>
        <?php $albums = $model->get_songs('Suck it and see(2011)') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistsee songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>


    </div>

</main>
<!--    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px" ;>
            <p class="copy">&copy Arctic Monkeys fan page</p>
        </div>
    </footer>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>