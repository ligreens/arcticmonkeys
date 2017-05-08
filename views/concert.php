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
            <a href="/" class=" menu home"> HOME</a>
            <a href ="concert" class="menu">CONCERTS</a>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">

        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">Upcoming concerts</p>

        <?php foreach ($concert as $item) {?>
        <h6 id='date'><?= $item['city'] . " " . $item['date']?><h6>
                <?php } ?>

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