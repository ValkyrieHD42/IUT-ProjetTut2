<?php
include('inc/header.php');

class ProfileWindow
{


    /*
     * Initialise l'écran
     */
    public function __construct(User $_user)
    {
        $this->Validate($_user);
    }


    /**
     * L'utilisateur valide la modification du profil
     * @param User $_user
     */
    public function Validate(User $_user){

        echo ' <html>
 <body>
<div class="col-lg-6">
<div class="card">
    <div class="card-header">
        <strong>Modification d\'informations</strong>
    </div>
    <div class="card-body card-block">
    <form action="pushUpdateUser.php" method="POST" class="form-horizontal">
            <p><strong>Fonction : </strong>'. $_user->type_utilisateur() . '</p>
            <input name="login" type="hidden" value="' . $_user->login() . '"/>
            <br/>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="newLogin" class="form-control-label">Changer votre login : </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="newLogin" name="newLogin" value="' . $_user->login() . '" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="newLogin" class="form-control-label">Changer votre mot de passe : </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="newPassword" name="newPassword" value="" class="form-control">
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Valider
            </button>
            <button type="reset" class="btn btn-danger btn-sm" onclick="history.go(-1)">
                <i class="fa fa-ban"></i> Annuler
            </button></a>
        </form>  
</body>
</html>' ;



       /* if($_POST['newPassword'] != null ){
            $_newPassword = $_POST['newPassword'];
            $_user->setPassword($_newPassword);
            echo ' Votre mot de passe a été changé.';
        }
        if ($_POST['newLogin'] != null ) {
            $_newLogin = $_POST['newLogin'];
            $_user->setLogin($_newLogin);
            echo 'Votre login a été changé.';
        } */
        //this.close();

    }

    /**
     *
    L'utilisateur annule la modification du profil (ferme juste la fenêtre)
     */
    public function Cancel(){
        //directement dans le bouton pour plus de facilitée
    }


}

include('inc/footer.php');
