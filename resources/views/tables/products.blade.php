
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
    .container {
        width: 1500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .buttons {
        margin-bottom: 20px;
    }

    .form {
        display: inline;
        margin-bottom: 20px;
    }

</style>
<div class="container">
    <div class="buttons">
    <form class="form" action="{{route('products.create')}}" method="get">
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
    <form class="form" action="{{route('products.export')}}" method="get">
        <button type="submit" class="btn btn-primary">Export Products</button>
    </form>
    <form class="form" action="{{route('products.deneme')}}" method="get">
        <button type="submit" class="btn btn-primary">Import Products</button>
    </form>
    </div>
<table class="table" id="card-tabl">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Added By</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->category_name}}</td>
            <td>{{$product->user->name}}</td>
            <td>
                <a class="btn btn-primary" href="{{route("products.edit", $product->id)}}">Edit</a>
            </td>
            <td>
               <form action="{{route("products.destroy", $product->id)}}" method="post">
                   @csrf
                   @method("delete")
                   <button class="btn btn-danger" type="submit">Delete</button>
               </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
<div class="d-flex justify-content-center">
    {{$products->links()}}
</div>
