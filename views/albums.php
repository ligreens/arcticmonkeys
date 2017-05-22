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
        <button type="submit" class="albumpeople albumbutton " name="people">WHATEVER PEOPLE SAY I AM,THAT'S<br><span class="pull-left"> WHAT I'M NOT</span></button>
    </div>
    <div class="col-lg-5">
        <p class="songlist songlistam albumheadings" id="ablumheadings">AM (2013)</p>
        <img src="images/am.png" class="songlist songlistam img-responsive suck am pull-right">

        <?php foreach ($name as $value) { ?>
        <p class="songlist songlistam"><?= $value['songs'] ?>
        <p>
            <?php } ?>

        <p class="songlist songlistsuck albumheadings">SUCK IT AND SEE (2011)</p>
        <img src="images/suckit.png" class="songlist songlistsuck img-responsive suck pull-right">

        <?php foreach ($name as $value) { ?>
        <p class="songlist songlistsuck"><?= $value['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlisthumbug albumheadings">HUMBUG (2009)</p>
        <img src="images/humbug1.png" class="songlist songlisthumbug img-responsive suck pull-right">

        <?php foreach ($name as $value) { ?>
        <p class="songlist songlisthumbug"><?= $value['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistworst albumheadings">FAVOURITE WORST NIGHTMARE (2007)</p>
        <img src="images/worst.png" class="songlist songlistworst img-responsive suck pull-right">
        <?php foreach ($name as $value) { ?>
        <p class="songlistworst songlist"><?= $value['songs'] ?>
        <p>
            <?php } ?>
        <p class="songlist songlistpeople albumheadings"> WHATEVER PEOPLE SAY I AM, THAT'S WHAT I'M NOT (2006)</p>
        <img src="images/people.png" class="songlist songlistpeople img-responsive suck pull-right">
        <?php foreach ($name as $value) { ?>
        <p class="songlistpeople songlist"><?= $value['songs'] ?><p>
            <?php } ?>

    </div>
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singles">SINGLES</p>
    <div class="col-lg-3 songs" style="padding:0px">
        <button type="submit" class="albumhigh albumbutton " name="">WHY'D YOU ONLY CALL ME WHEN YOU'RE<br><span class="pull-left"> HIGH?</span></button><br>
        <button type="submit" class="albumknow albumbutton" name="">DO I WANNA KNOW?</button><br>
        <button type="submit" class="albummine albumbutton" name="">R U MINE?</button><br>
        <button type="submit" class="albumblack albumbutton" name="">BLACK TREACLE?</button><br>
        <button type="submit" class="albumsee albumbutton" name="">SUCK IT AND SEE</button><br>
        <button type="submit" class="albumbutton" name="">THE HELLACAT SPANGLED SHALALALA</button><br>
        <button type="submit" class="albumbutton" name="">DON'T SIT DOWN 'CAUSE I MOVED YOUR <br><span class="pull-left">CHAIR</span></button><br>
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
        <button type="submit" class="albumbutton" name="">I BET YOU LOOK GOOD ON THE<br><span class="pull-left"> DANCEFLOOR</span></button><br>
        <button type="submit" class="albumbutton" name="">FIVE MINUTES WITH ARCTIC MONKEYS</button><br>
    </div>

</main>
<?php require 'footer.php'?>
