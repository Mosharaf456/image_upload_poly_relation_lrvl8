<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Polymorphic 1-1 </title>
</head>
<body>
    <div class="container">
        <h3>User Create: </h3>
        <form action="/users/create" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control">
            </div>
            {{-- email --}}
            <div class="form-group">
                <label for="image">Image Path</label>
                <input id="image" type="text" name="image_path" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>
</html>