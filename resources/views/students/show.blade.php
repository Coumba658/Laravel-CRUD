<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Détails étudiant</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card" style="width: 60%">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Matricule : {{ $student->matricule }}</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Prenom : {{ $student->first_name }}</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom : {{ $student->last_name }}</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email : {{ $student->email }}</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Téléphone : {{ $student->phone }}</label>
                </div>

                <div>
                    <a href="{{ route('student.index') }}"><button type="button" class="btn btn-secondary">Retour</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
