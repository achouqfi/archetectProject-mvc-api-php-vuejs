<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/brief6/view/css/main1.css">
    <title>Formulaire</title>
</head>
<body>

    <div class="container login-container">
        <div class=" login-form-2">
            <h2>Remplir le formulaire</h2>
            <form action="http://localhost/brief6/login/create" method="post">
                <div class="form-group">
                    <input type="text" class="inputs" name="CIN" placeholder="CIN" required>
                    <input type="text" class="inputs" name="nom" placeholder="nom" required>
                    <input type="text" class="inputs" name="prenom" placeholder="prenom" required>
                    <input type="email" class="inputs" name="email" placeholder="email" required>
                    <input type="text" class="inputs" name="telephone" placeholder="telephone" required>
                    <input type="number" class="inputs" name="age" placeholder="age"required>
                    <textarea class="message" name="message" placeholder="type de consultation"required></textarea>
                    <input type="submit" name="ajouter" class="btnSubmit" value="Envoyer"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>