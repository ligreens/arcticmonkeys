<div class="concerts col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <h2>Update</h2>
    <form action="/update" method="POST" class="form-inline">
        <p class="concert">City:</p>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <select name="cities">
            <?php
            foreach ($cities as $value) { ?>
                <option value="<?= $value['id'] ?>" <?php if ($value['id'] == $_GET['city_id']) { ?> selected="selected"<?php } ?>><?= $value['name'] ?></option>
                <?php
            } ?>
        </select>
        <br>
        <p class="concert">Date:</p>
        <input type="text" name="date" class="form-control" value="<?php echo $concertId['date'] ?>">

        <button type="submit" name="update" class=" delete btn btn-primary">Update
        </button>
    </form>
</div>
