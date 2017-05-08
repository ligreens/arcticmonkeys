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
<body class="edit" >

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


    <form action="#" method="POST" class="form-inline">
        <h3 class="formedit">Add concert:</h3>
        <p class="formedit">City:</p>
        <input type="text" name="city" class="form-control">
        <br>
        <p class="formedit">Date:</p>
        <input type="text" name="date" class="form-control">

        <button type="submit" name="add" class="btn btn-primary send">Add</button>
    </form>

        <?php foreach ($concert as $item) {?>
        <h3 id='date'><?= $item['city'] . " " . $item['date']?><h3>
                <?php $controller->delete_concerts(); ?>

                <form action="#" method="POST"  class="form-inline">
                    <p>City:</p>
                    <input type="text" name="city" class="form-control">
                    <br>
                    <p>Date:</p>
                    <input type="text" name="date" class="form-control">
                    <button type="submit" name="delete_concerts" class=" delete btn btn-primary" value="<?php echo $item['id'] ?>">Delete</button>
                    <button type="submit" name="update" class=" delete btn btn-primary" value="<?php echo $item['id'] ?>">Update</button>
                </form>

                <?php } ?>


</div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <h3>Comments</h3>
            <?php /*$controller->insert_comment(); */?><!--


            <form action="#" method="POST" class="form-inline" id="fans">
                <p class="formedit">Name:</p>
                <input type="text" name="fname" class="form-control">
                <br>
                <p class="formedit formcomment">Comment:</p>
                <textarea class="form-control textcomment" cols="25" rows="4" name="comment"></textarea>
                <br>
                <br>
                <button type="submit" name="send" class="btn btn-primary send">Send</button>
            </form>

            <br>-->
            <div class="bordercomments col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-9 col-md-9">
                    <p class="fieldcomment">Comments</p>
                    <?php foreach ($comments as $item) {?>
                    <h6 id='date'><?= $item['date'] ?><h6>

                       <form action="#" method="POST">
                            <?php $controller->delete_comments(); ?>
                            <button type="submit" name="delete" class="pull-right delete btn btn-primary" value="<?php echo $item['id'] ?>">Delete</button>
                            </form>

                            <p class='commentname'><?= $item['fname'] ?>: </p>
                            <p class='comments'><?= $item['comment'] ?></p><br>

                            <?php } ?>

                </div>
                <div class="col-lg-2 col-md-2"></div>

            </div>
        </div>
    </div>

    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer " style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer edit" style="padding:0px" ;>
            <p class="copy">Edit page</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>