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

    <link rel="stylesheet/less" type="text/css" href="/css/styles.less"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/app.js" type="text/javascript"></script>
    <!-- <script src="/js/vendor/custom.js" type="text/javascript"></script> -->

</head>
<body>
<a href="/concert">Back</a>
<div class="col-lg-12 col-md-12 col-sm-12">
<h3>Add concert</h3>
    <form action="/create" method="POST" class="form-inline">
        <p class="concert">City:</p>
        <input type="hidden" name="id" value="">
        <select name="cities">
            <?php
            foreach ($cities as $value) { ?>
                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                <?php
            } ?>
        </select>
        <br>
        <p class="concert">Date:</p>
        <input type="text" name="date" class="" value="">
        <button type="submit" name="update" class="">Add
        </button>
    </form>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <h3>Add new city</h3>
    <form action="/add.city" method="POST" class="form-inline" >
        <p class="">City</p>
        <input type="hidden" name="id" value="">
        <input type="text" name="name" class="form-inline">
        <p class="formfield formcomment">Country</p>
        <input type="text" name="country" class="form-inline">

        <button type="submit" name="update" class=" ">Add
        </button>
    </form>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
    <h3>Update city</h3>
<form action="/" method="POST" class="form-inline" >

    <?php
    foreach ($cities as $value) { ?>
        <p>  <?= $value['name'] ?>
        <a class="add  btn btn-primary pull-right deletebtn" href="/update.city?id=<?= $value['id'] ?><?= $value['name'] ?>"  role="button">Update</a>
        </p>
            <?php
    } ?>
</form>
    <div class="col-lg-4 col-md-4 col-sm-6"></div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<h3>Delete city</h3>
    <form action="/" method="POST" class="" >

        <?php
        foreach ($cities as $value) { ?>
<p><?= $value['name'] ?>

        <a class="add  btn btn-primary pull-right " href="/delete.city?id=<?= $value['id'] ?><?= $value['name'] ?>" role="button">Delete</a>
</p>
            <?php
        } ?>

    </form>
</div>
</body>


