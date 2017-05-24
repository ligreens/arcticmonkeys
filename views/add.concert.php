<div class="concerts col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <h2>Add</h2>
    <form action="/create" method="POST" class="form-inline">
        <p class="concert">City:</p>
        <input type="hidden" name="id" value="">
        <input type="text" name="city" class="form-control" value="">
        <br>
        <p class="concert">Date:</p>
        <input type="text" name="date" class="form-control" value="">

        <button type="submit" name="update" class=" delete btn btn-primary" >Add
        </button>
    </form>
</div>