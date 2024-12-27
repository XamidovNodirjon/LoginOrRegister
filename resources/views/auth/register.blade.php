<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="form-control">
    <div class="form-login">
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name">
            <label for="email">email</label>
            <input type="email" name="email" placeholder="email">
            <label for="password">password</label>
            <input type="password" name="password" placeholder="password">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
            <a href="{{route('auth.login')}}">Already register</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
