<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            background:white;
            padding:40px;
            width:400px;
            border-radius:10px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            margin-bottom:30px;
            color:#006b2d;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:20px;
            border:1px solid #ddd;
            border-radius:5px;
        }

        button{
            width:100%;
            background:#006b2d;
            color:white;
            padding:12px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        a{
            color:#006b2d;
            text-decoration:none;
        }

    </style>

</head>
<body>

    <div class="login-box">

        {{ $slot }}

    </div>

</body>
</html>