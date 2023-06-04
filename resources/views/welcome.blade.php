<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>
<body style="background-color: #D0F5BE;">
<br><br>
    <div class="container text-center my-5">
        <h1 class="mb-4">WELLCOME TO HOME</h1>
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/Home.jpg') }}" alt="image" style="width: 750px;">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid">
                <a class="btn btn-outline-dark" href="home">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>