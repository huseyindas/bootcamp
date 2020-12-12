<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.container {
    width: 1500px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
}


</style>

<div class="container">
    <div class="container">
        <div class="buttons">
            <form class="form" action="{{route('products.index')}}" method="get">
                <button type="submit" class="btn btn-primary">List Product</button>
            </form>
        </div>
<form class="card-form" action="{{route("products.store")}}" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Product Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="product_name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Price</label>
            <input type="text" class="form-control" id="inputPassword4" name="price" placeholder="Price">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Photo</label>
            <input type="text" class="form-control" id="inputPassword4" name="photo" placeholder="Photo">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Description</label>
            <input type="text" class="form-control" id="inputPassword4" name="desription" placeholder="Description">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Category ID</label>
        <input type="text" class="form-control" id="inputPassword4" name="category_id" placeholder="Category">
    </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">User ID</label>
            <input type="text" class="form-control" id="inputPassword4" name="user_id" placeholder="User">
        </div>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
