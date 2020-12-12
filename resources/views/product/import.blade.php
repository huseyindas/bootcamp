
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
    .form {
        margin-top: 50px ;
        margin-right: 100px;
        margin-left: 100px;
        display : flex;
    }

    .file-input {
        margin-left: 30px;
    }

    .btn {
        margin-left: -30px;
        margin-right: 0px;
    }

</style>
<div>

    <form class="form" action="{{route('products.index')}}" method="get">
        <button type="submit" class="btn btn-primary">< List Products</button>
    </form>

    <form class="form" action="{{route("products.import")}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-2">
        <label for="staticEmail2" >Products Excel File :</label>
        <input class="file-input" name="file" type="file">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add Products</button>
    </form>
</div>
