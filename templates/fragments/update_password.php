<?php /**modification du mot de passe*/?>
<form method="POST" action="" id="update_password" style="display: none;">
    <h4>Modifier son mot de passe</h4>
    <div>  
        <div>
            <input type="password" name="password" class="fat" id="password">                                   
            <label>Mot de passe</label> 
        </div>
        <div>
            <input type="password" name="password_confirm" class="fat" id="password_confirm">
            <label>Confirmation du mot de passe</label>
        </div>
        <button type="submit" value="Modifier_password" class="fat-send" id="send-connexion">Modifier</button>
    </div>
    <div id="Password"></div>
</form>

  