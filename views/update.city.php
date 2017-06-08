<h2>Add new city</h2>
<form action="/updateCity" method="POST" class="form-inline" >
    <p class="formfield">City</p>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input type="text" name="name" class="form-inline" value="<?php echo $cityId['name'] ?>">
    <p class="formfield formcomment">Country</p>
    <input type="text" name="country" class="form-inline" value="<?php echo $cityId['country'] ?>">

    <button type="submit" name="update" class=" delete btn btn-primary">Update
    </button>
</form>