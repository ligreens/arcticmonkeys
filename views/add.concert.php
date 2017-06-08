<a href="/concert">Back</a>
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
<h2>Update city</h2>
<form action="/" method="POST" class="form-inline" >

    <?php
    foreach ($cities as $value) { ?>
        <p>  <?= $value['name'] ?>
        <a class="add  btn btn-primary pull-right deletebtn" href="/update.city?id=<?= $value['id'] ?><?= $value['name'] ?>"  role="button">Update</a>
        </p>
            <?php
    } ?>
</form>


<h2>Delete city</h2>
    <form action="/" method="POST" class="form-inline" >

        <?php
        foreach ($cities as $value) { ?>
<p><?= $value['name'] ?>

        <a class="add  btn btn-primary pull-right deletebtn" href="/delete.city?id=<?= $value['id'] ?><?= $value['name'] ?>" role="button">Delete</a>
</p>
            <?php
        } ?>

    </form>



