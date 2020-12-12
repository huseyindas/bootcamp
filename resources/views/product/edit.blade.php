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
                <button type="submit" class="btn btn-primary">List Products</button>
            </form>
        </div>
    <form class="card-form" action="{{route("products.update", $product->id)}}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Product Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="product_name" value="{{$product->product_name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Price</label>
                <input type="text" class="form-control" id="inputPassword4" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Photo</label>
                <input type="text" class="form-control" id="inputPassword4" name="photo" value="{{$product->photo}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Description</label>
                <input type="text" class="form-control" id="inputPassword4" name="description" value="{{$product->description}}">
            </div>
            <div class="form-group col-md-6">
                <label  for="inputPassword4">Category Name : </label>
                <select class="form-group col-md-6" name="category_id">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        @if($product->category_id == $category->id)
                            <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label  for="inputPassword4">User Name : </label>
                <select class="form-group col-md-6" name="user_id">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        @if($product->user_id == $user->id)
                            <option value="{{$user->id}}" selected>{{$user->name}}</option>
                        @else
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
