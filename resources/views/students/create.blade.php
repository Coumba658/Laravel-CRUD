<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ajouter étudiant</title>
</head>
<body>

    {{-- @if ($errors->any())
        <div class="p-2 m-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form class="container mt-3" action="{{ route('student.index') }}" method="post">
        @csrf
        <div class="card" style="width: 60%">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Matricule</label>
                    <input type="text" class="form-control @error('matricule') is-invalid @enderror" id="matricule" name="matricule" placeholder="Entrer le matricule">
                </div>
                <div>
                    @error('matricule')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Entrer le prénom">
                </div>
                <div>
                    @error('first_name')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Entrer le nom">
                </div>
                <div>
                    @error('last_name')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Entrer l'email">
                </div>
                <div>
                    @error('email')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Téléphone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Entrer le téléphone">
                </div>
                <div>
                    @error('phone')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <a href="{{ route('student.index') }}"><button type="button" class="btn btn-danger">Annuler</button></a>
                    <input type="submit" value="Ajouter" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
