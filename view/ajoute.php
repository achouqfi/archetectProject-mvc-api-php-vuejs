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
            <h2> Ajouter un render-vous</h2>
            <form action="http://localhost/brief6/book/create" method="post">
                <div class="form-group">
                    <input type="text" class="inputs" name="date" placeholder="CIN" required>
                    <input type="text" class="inputs" name="heure" placeholder="nom" required>
                    <input type="text" class="inputs" name="message" placeholder="prenom" required>
                    <!-- <input type="text" class="inputs" name="reference" placeholder="message" required> -->
                    <input type="submit" name="ajouter" class="btnSubmit" value="Envoyer"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>