<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reference</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/brief6/view/css/main.css">
</head>
<body>
    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://icon-library.com/images/architecture-icon-png/architecture-icon-png-17.jpg" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form action="http://localhost/brief6/login/reference" method="post"  class="form-signin">
                        <input type="text" name="reference" class="form-control form-group" placeholder="reference" required >
                        <input type="submit" name="ajouter" class="btnSubmit" value="Envoyer"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
