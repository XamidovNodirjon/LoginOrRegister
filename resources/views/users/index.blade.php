<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="from-control">
    <table class="table" style="border: 2px">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
        </thead>
        <tbody>
        <tr>
            @foreach($users as $user)
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
