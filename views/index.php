<?php require 'header.php'?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dive">
<main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main" style="padding: 0;">
        <form action="#" method="POST" name="member">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/alex.jpg"
                     class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12 alex">
                <?php $member = $model->get_songs_member("members", 'name', 'Alex Turner'); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 matt">
                <img src="images/img/matt.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_songs_member("members", 'name', "Matthew Helders"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/jamie.jpg"
                     class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_songs_member("members", 'name', "Jamie Cook"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/nick.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_songs_member("members", 'name', "Nick O'Malley"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>
        </form>
    </main>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comment" style="padding: 0;">
        <p class=" addcomment">FAN AREA</p>
        <div>
            <form action="#" method="POST" class="form-inline fans" id="fans">
                <p class="formfield">NAME</p>
                <input type="text" name="fname" class="form-control textcomment">
                <p class="formfield formcomment">POST A COMMENT</p>
                <textarea class="form-control textcomment" cols="50" rows="6" name="comment"></textarea>
                <br>
                <br>
                <button type="submit" name="send" class="btn btn-primary send">COMMENT</button>
            </form>
            <br>
            <div class="bordercomments col-lg-12 col-md-12 col-sm-12 col-xs-12 fans" style=" margin:0px; " >
                <div class="col-lg-9 col-md-9">
                    <?php $count = $model->count('comments'); ?>
                    <?php foreach ($count as $item) { ?>
                        <p class="fieldcomment">COMMENTS(<?= $item['total'] ?>)</p>
                    <?php } ?>
                    <?php foreach ($comments as $item) { ?>
                        <div class="second">
                            <p class='commentname'><?= $item['fname'] ?>: </p>
                            <h6 id='date' class=""><?= $item['date'] ?>
                            </h6>
                            <p class='comments'><?= $item['comment'] ?></p><br>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'?>

