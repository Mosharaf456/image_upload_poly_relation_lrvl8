<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>File Upload::</p>

    @if ($errors->any())
     <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
         @endforeach
     </ul>
    @endif
    <form action="/fileup" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="user_img[]" multiple>

        <button type="submit"> Upload</button>
    </form>
</body>
</html>