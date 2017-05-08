<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concerts</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="/css/custom.css" rel="stylesheet">

</head>
<body>
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

        <hr>
        <div class="row pull-right menurow" style="margin:3px;">
            <a href="/" class=" menu home"> HOME</a>
            <a href="#" class="menu concertmenu">CONCERTS</a>
        </div>

</header>
    <div id="concertclick" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background" style="padding:0;">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <p id="concertheading">Upcoming concerts</p>

            <?php foreach ($concert as $item) { ?>

            <img src="images/concert.jpg" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 img-responsive">
            <form action="#" method="POST">
                <button type="submit" name="" class="pull-right info btn btn-primary col-xs-3 " value="">More info </button>
            </form>
            <p class="concertlist col-lg-10 col-md-10 col-sm-10 col-xs-12"><?= $item['city'] . ", " . $item['date'] ?><p>
                <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
    </div>


    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" style="padding:0px" ;>
            <p class="copy ">&copy Arctic Monkeys fan page</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/vendor/custom.js" type="text/javascript"></script>
</body>
</html>