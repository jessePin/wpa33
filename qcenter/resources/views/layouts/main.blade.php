<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangon Quarentine Center</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<style>
    #header h1{
        text-align: center;
        height: 40px;
        margin-top: 20px;
    }
    #header p{
        text-align: right;
        margin-bottom: 20px;
    }
    #msg p{
        text-align: left;
    }
</style>
<body>
    <?php 
    session_start();
    $auth = isset($_SESSION['auth']);

    ?>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>