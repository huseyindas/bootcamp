<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Slider Name</th>
        <th scope="col">Photo</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
    <tr>
        <td>{{$slider->id}}</td>
        <td>{{$slider->slider_name}}</td>
        <td>{{$slider->photo}}</td>
        <td>X</td>
    </tr>
    @endforeach
    </tbody>
</table>
