<!DOCTYPE html>
<?php // Page où il y a le formulaire de connexion pour administrateur/trice ?>
<html>
    <?php include 'templates/fragments/head.php' ?>
    <title>Connexion</title>
    <body>
        <?php include 'templates/fragments/header.php' ?>
        <title>Connexion</title>
        <main>
            <form method="POST" action="spacemember.php">
                <h1>Connexion</h1>
                <div class="group-form">
                    <input type="email" name="email" class="fat" id="email" required>
                    <label>Email</label>
                </div>
                <div class="group-form">
                    <input type="password" name="password" class="fat" id="password" required>
                    <label>Mot de passe</label>
                </div>
                <div class="group-form">
                    <button type="submit" class="fat-send" id="send-connexion">Connexion</button>
                    <a href="reset.php" class="forgot-password">Mot de passe oublié ?</a>
                </div>
                <div>
                    <?php if(isset($erreur)){echo $erreur ; }else{}?>
                </div>
            </form>   
        </main>
    </body>
</html>