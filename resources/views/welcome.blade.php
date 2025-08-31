<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div>
        <form action="/form" method="POST">
            @csrf
            <label >Name</label>
            <input type="text">

            <label >Email</label>
            <input type="email" name="" id="">

            <label for="">Password</label>
            <input type="password" name="" id="">

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>