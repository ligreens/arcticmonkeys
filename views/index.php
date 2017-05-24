<?php require 'header.php' ?>
<main>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dive " style="padding:0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding: 0;">
        <p class=" addcomment">FAN AREA</p>
        <div>
            <form action="/add" method="POST" class="form-inline fans" id="fans">
                <p class="formfield">NAME</p>
                <input type="text" name="name" class="form-control textcomment">
                <p class="formfield formcomment">POST A COMMENT</p>
                <textarea class="form-control textcomment" cols="50" rows="6" name="comment"></textarea>
                <br>
                <br>
                <button type="submit" name="send" class="btn btn-primary send">COMMENT</button>
            </form>
            <br>
            <div class="bordercomments col-lg-12 col-md-12 col-sm-12 col-xs-12 fans" style=" margin:0px; ">
                <div class="col-lg-9 col-md-9">
                    <p class="fieldcomment">COMMENTS</p>
                    <?php foreach ($comment as $value) { ?>
                        <div class="second">
                            <p class='commentname'><?= $value['name'] ?>: </p>
                            <h6 id='date' class=""><?= $value['date'] ?>
                            </h6>
                            <p class='comments'><?= $value['comment'] ?></p><br>

                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>

