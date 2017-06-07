<div class="concerts col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <h2>Add concert</h2>
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
        <input type="text" name="date" class="form-control" value="">
        <button type="submit" name="update" class=" delete btn btn-primary">Add
        </button>
    </form>
    <h2>Add new city</h2>
    <form action="/add.city" method="POST" class="form-inline" >
        <p class="formfield">City</p>
        <input type="hidden" name="id" value="">
        <input type="text" name="name" class="form-inline">
        <p class="formfield formcomment">Country</p>
        <input type="text" name="country" class="form-inline">

        <button type="submit" name="update" class=" delete btn btn-primary">Add
        </button>
    </form>
    <form action="/delete.city" method="POST" class="form-inline" >
    <select name="cities">
        <?php
        foreach ($cities as $value) { ?>
            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
            <?php
        } ?>
    </select>
        <a class="add  btn btn-primary pull-right deletebtn" href="/delete.city?id=<?= $value['id'] ?>" role="button">Delete</a>
    </form>
</div>




