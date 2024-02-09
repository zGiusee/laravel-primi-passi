<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <div class="col-6">
                <div>
                    <h1> {{ $welcome }}</h1>
                    <h2>ciaooooo home</h2>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <div>
                        <a href="{{ route('home') }}" class="btn btn-primary ">Sezione
                            home</a>
                        <a href="{{ route('studenti') }}" class="btn btn-primary ">Sezione
                            studenti</a>
                        <a href="{{ route('insegnanti') }}" class="btn btn-danger ">Sezione
                            insegnanti</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
