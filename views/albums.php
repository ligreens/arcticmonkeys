<?php require 'header.php'?>

<main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 albums" style="padding: 0px;">
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songslist">ALBUMS</p>
    <div class="col-lg-3 songs" style="padding:0px">
        <button type="submit" class="albumam albumbutton" name="am">AM</button>
        <br>
        <button type="submit" class="albumsuck albumbutton" name="suck">SUCK IT AND SEE</button>
        <br>
        <button type="submit" class="albumhumbug albumbutton" name="humbug">HUMBUG</button>
        <br>
        <button type="submit" class="albumworst albumbutton" name="worst">FAVOURITE WORST NIGHTMARE</button>
        <br>
        <button type="submit" class="albumpeople albumbutton " name="people">WHATEVER PEOPLE SAY I AM,THAT'S WHAT I'M<br><span class="pull-left">NOT</span></button>
    </div>
    <div class="col-lg-5">
        <p class="songlist songlistam albumheading">AM (2013)</p>
        <img src="images/am.png" class="songlist songlistam img-responsive suck am pull-right">
        <?php $albums = $model->get_songs_member("songs", 'albums', 'AM') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlistam"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistsuck albumheading">SUCK IT AND SEE (2011)</p>
        <img src="images/suckit.png" class="songlist songlistsuck img-responsive suck pull-right">
        <?php $albums = $model->get_songs_member("songs", 'albums','Suck It and See') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlistsuck"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlisthumbug albumheading">HUMBUG (2009)</p>
        <img src="images/humbug1.png" class="songlist songlisthumbug img-responsive suck pull-right">
        <?php $albums = $model->get_songs_member("songs", 'albums','Humbug') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlist songlisthumbug"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistworst albumheading">FAVOURITE WORST NIGHTMARE (2007)</p>
        <img src="images/worst.png" class="songlist songlistworst img-responsive suck pull-right">
        <?php $albums = $model->get_songs_member("songs", 'albums','Favourite worst nightmare') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistworst songlist"><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistpeople albumheading"> WHATEVER PEOPLE SAY I AM, THAT'S WHAT I'M NOT (2006)</p>
        <img src="images/people.png" class="songlist songlistpeople img-responsive suck pull-right">
        <?php $albums = $model->get_songs_member("songs", 'albums','Whatever People Say I Am, That\'s What I\'m Not') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistpeople songlist"><?= $item['songs'] ?><p>
            <?php } ?>
    </div>
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singles">SINGLES</p>
    <div class="col-lg-3 songs" style="padding:0px">
        <button type="submit" class="albumhigh albumbutton " name="">WHY'D YOU ONLY CALL ME WHEN YOU'RE HIGH?</button><br>
        <button type="submit" class="albumknow albumbutton" name="">DO I WANNA KNOW?</button><br>
        <button type="submit" class="albummine albumbutton" name="">R U MINE?</button><br>
        <button type="submit" class="albumblack albumbutton" name="">BLACK TREACLE?</button><br>
        <button type="submit" class="albumsee albumbutton" name="">SUCK IT AND SEE</button><br>
        <button type="submit" class="albumbutton" name="">THE HELLACAT SPANGLED SHALALALA</button><br>
        <button type="submit" class="albumbutton" name="">DON'T SIT DOWN 'CAUSE I MOVED YOUR CHAIR</button><br>
        <button type="submit" class="albumbutton" name="">MY PROPELLER</button><br>
        <button type="submit" class="albumbutton" name="">CORNERSTONE</button><br>
        <button type="submit" class="albumbutton" name="">CRYING LIGHTNING</button><br>
        <button type="submit" class="albumbutton" name="">TEDDY PICKER</button><br>
        <button type="submit" class="albumbutton" name="">FLUORESCENT ADOLESCENT</button><br>
        <button type="submit" class="albumbutton" name="">MATADOR/DAFRAME2R</button><br>
        <button type="submit" class="albumbutton" name="">BRAINSTORM</button><br>
        <button type="submit" class="albumbutton" name="">LEAVE BEFORE THE LIGHTS COME ON</button><br>
        <button type="submit" class="albumbutton" name="">WHO THE FUCK ARE ARCTIC MONKEYS?</button><br>
        <button type="submit" class="albumbutton" name="">WHEN THE SUN GOES DOWN</button><br>
        <button type="submit" class="albumbutton" name="">I BET YOU LOOK GOOD ON THE DANCEFLOOR</button><br>
        <button type="submit" class="albumbutton" name="">FIVE MINUTES WITH ARCTIC MONKEYS</button><br>
    </div>
    <div class="col-lg-5">
        <p class="songlist songlisthigh albumheading ">WHY'D YOU ONLY CALL ME WHEN YOU'RE HIGH? (2013)</p>
        <?php $albums = $model->get_songs_member("songs", 'albums','Why\'d You Only Call Me When You\'re High?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlisthigh songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistknow albumheading">DO I WANNA KNOW?(2013)</p>
        <?php $albums = $model->get_songs_member("songs", 'albums','Do I Wanna Know?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistknow songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistmine albumheading">R U MINE? (2012)</p>
        <?php $albums = $model->get_songs_member("songs", 'albums','R U Mine?') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistmine songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistblack albumheading">BLACK TREACLE (2012)</p>
        <?php $albums = $model->get_songs_member("songs", 'albums','Black Treacle') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistblack songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistsee albumheading">SUCK IT AND SEE (2011)</p>
        <?php $albums = $model->get_songs_member("songs", 'albums','Suck it and see(2011)') ?>
        <?php foreach ($albums as $item) { ?>
        <p class="songlistsee songlist "><?= $item['songs'] ?>
        <p>
            <?php } ?>
    </div>
</main>
<?php require 'footer.php'?>
