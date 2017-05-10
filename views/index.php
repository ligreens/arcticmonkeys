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
<body id="home">
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header" style="padding: 0;">
        <hr>
        <div class="row pull-right menurow" style="margin:3px;">
            <a href="#" class=" menu home"> HOME</a>
            <a href="albums" class="menu"> ALBUMS</a>
            <a href="#" class=" menu fansforum ">FANS FORUM</a>
            <a href="concert" class="menu">CONCERTS</a>
        </div>

    </div>

</header>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dive">

    <main class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main" style="padding: 0;">

        <form action="#" method="POST" name="member">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/alex.jpg"
                     class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12 alex">
                <?php $member = $model->get_member_by_name("Alex Turner"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>


            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 matt">
                <img src="images/img/matt.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_member_by_name("Matthew Helders"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>


            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/jamie.jpg"
                     class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_member_by_name("Jamie Cook"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="images/img/nick.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $member = $model->get_member_by_name("Nick O'Malley"); ?>
                <?php foreach ($member as $item) { ?>
                    <h4><?= $name = $item['name'] . ", " . $instrument = $item['instruments'] ?></h4>
                <?php } ?>
            </div>

        </form>
    </main>
</div>




    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comment"style="padding: 0;">
            <p class=" addcomment">ADD A COMMENT</p>


            <?php $comment->insert_comment(); ?>

        <div>
            <form action="#" method="POST" class="form-inline fans" >
                <p class="formfield">Name:</p>
                <input type="text" name="fname" class="form-control">
                <br>
                <p class="formfield formcomment">Comment:</p>
                <textarea class="form-control textcomment" cols="25" rows="4" name="comment"></textarea>
                <br>
                <br>
                <button type="submit" name="send" class="btn btn-primary send">Send</button>
            </form>

            <br>
            <div class="bordercomments col-lg-12 col-md-12 col-sm-12 col-xs-12 fans">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-9 col-md-9">
                    <p class="fieldcomment">Comments</p>

                    <?php foreach ($comments as $item) { ?>
                        <span class="item">


                            <p class='commentname'><?= $item['fname'] ?>: </p>
                    <h6 id='date' class=""><?= $item['date'] ?>
                        <h6>
                            <p class='comments'><?= $item['comment'] ?></p><br>
                    </span>
                            <?php } ?>

                </div>
                <div class="col-lg-2 col-md-2"></div>

            </div>
        </div>
    </div>

    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px" ;>
            <p class="copy">&copy Arctic Monkeys fan page</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>
