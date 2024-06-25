<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>differentservice</title>
</head>
<body>
    <div>
        <img class="mb-5 w-100" src='https://placehold.it/1265x400' alt=''/>
    </div>
    <div class="container">
    <h1 class="mt-5 ">{{ $details->domaine }}</h1>
    <section class="mt-3">
        <p>{{ $details->description }}</p>
        <a href="{{route('accueil')}}" class="btn btn-danger fw-bold mt-3">Retour</a>
    </section>
    </div>
        <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>