<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - bejelentkezés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">    
</head>
<body>
    <div class="wrapper">
        <div class="login-container">
            <h1>Bejelentkezés</h1>
            {{ Form::open(["route" => "auth.login", "method" => "post"]) }}
                {{ csrf_field() }}    
                <div class="mb-3">
                    {{ Form::label('username', 'Felhasználónév') }}
                    {{ Form::text('username', $value = null, $attributes = ["class" => "login-textbox"]) }}
                </div>
                <div class="mb-3">
                <label for="passwordd">Jelszó</label><br>
                    {{ Form::password('passwordd', $attributes = ["class" => "login-textbox"]) }}
                </div>
                <div class="mb-3 text-end">
                    {{ Form::submit('Bejelentkezés', ["class" => "btn btn-success"]) }} 
                    <a href="">Elfelejtette a jelszavát?</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</body>
</html>