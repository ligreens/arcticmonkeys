
    <div class="concerts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="/update" method="POST" class="form-inline">
                    <p class="concert">City:</p>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <input type="text" name="city" class="form-control" value="<?php echo $concertId['city'] ?>">
                    <br>
                    <p class="concert">Date:</p>
                    <input type="text" name="date" class="form-control" value="<?php echo $concertId['date'] ?>">

                    <button type="submit" name="update" class=" delete btn btn-primary" >Update
                    </button>
                </form>
    </div>
