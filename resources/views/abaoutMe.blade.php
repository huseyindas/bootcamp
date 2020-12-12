

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
    .container {
        width: 1500px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

</style>

<div class="container">
    <div class="container col-md-3">
        <b>USERS TABLE</b>
    </div>
    <table class="table" id="card-tabl">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

