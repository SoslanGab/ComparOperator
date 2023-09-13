<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Page de Connexion</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Connexion</div>
                    <div class="card-body">
                        <form method="post" action="login_process.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liens vers les fichiers JavaScript de Bootstrap (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-gn5383ce01izfzlksz6x4j5rbzpj6wfs5n5l5f5f5g5f5g5v5f5g5f5f5f5g5f5f5"
        crossorigin="anonymous"></script>
</body>
</html>
