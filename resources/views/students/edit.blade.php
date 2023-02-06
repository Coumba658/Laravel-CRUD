<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Editer étudiant</title>
</head>
<body>

    <form class="container mt-3" action="{{ url('/student/' .$student->id) }}" method="post">
        @csrf
        @method("PATCH")
        <div class="card" style="width: 60%">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Matricule</label>
                    <input type="text" class="form-control" id="matricule" name="matricule" value="{{ $student->matricule }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $student->first_name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                </div>

                <div>
                    <a href="{{ url('/student') }}"><button type="button" class="btn btn-danger">Annuler</button></a>
                    <input type="submit" value="Modifier" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
