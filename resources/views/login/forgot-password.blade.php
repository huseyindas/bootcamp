<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        body {
            margin: 25px;
            font-size: 25px;
        }

        .container{
            position: absolute;
            margin-left: 600px;
            margin-top: 300px;


        }
    </style>
</head>
<body>
<div class="container">
    <h2>Forget My Password</h2>


    Enter it under your phone number.<br />
    <small>Phone : 905551112233</small><br><br>

    <form action="{{route('login.send-password')}}" method="post" class="form-inline">
        <input type="tel" name="phone" class="form-control mb-2 mr-sm-2" id="telephone" placeholder="905551112233" pattern="[0-9]{12}" required>
        @csrf
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>
</body>
</html>
