<?php

include('inc/header.php');

//require('Activity.php');
//require('User.php');
//require('Project.php');

class ActivityWindow
{

    /**
     * ActivityWindow constructor.
     * @param Activity $a
     */
    /* public function __construct(Activity $a)
     {
         include('inc/header.php');

         $this->a = $a;


         echo'<p>Activitées</p>';
     }*/

    public function __construct($project, $user)
    {
        //readfile("Activity.php");
    }

    public function ChooseActivity() {
        //readfile("ActivityEdit.php");
    }

    public function Close(){

    }

    public function SetStarted(){
        require_once('../app/ConnexionBDD.php');
        $valider = false;
        $annuler = false;
      echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ConnexionError</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/theme.css">
        <script src="https://kit.fontawesome.com/f59e24d178.js" crossorigin="anonymous"></script>
    </head>
    <div class="page-content--bge7">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                        <h3>  Demande de confirmation : </h3>
                        <hr/>
                        <form>
                              <button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="$valider = true">Valider <i class="zmdi zmdi-edit"></i></button> 
                              <button type="button" class="btn btn-danger m-l10 m-b-10"  onclick="$annuler = true ">Annuler <i class="zmdi zmdi-delete"></i> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> ';

        if (valider == true) {
            (new Activity)->startActivity(); //appel de la fonction startActivity
            if ($this->a->getState == ActivityState::PREVUE) {
                $this->a->setState(ActivityState::ENCOURS);
            }
            $activityDao = new ActivityDAO(db);
            $activityDao->Update($this->a);
        }
    }

    public function setPlanned(){
        require_once('../app/ConnexionBDD.php');
        $valider = false;
        $annuler = false;
      echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ConnexionError</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/theme.css">
        <script src="https://kit.fontawesome.com/f59e24d178.js" crossorigin="anonymous"></script>
    </head>
    <div class="page-content--bge7">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                        <h3>  Demande de confirmation : </h3>
                        <hr/>
                        <form>
                              <button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="$valider = true">Valider <i class="zmdi zmdi-edit"></i></button> 
                              <button type="button" class="btn btn-danger m-l10 m-b-10"  onclick="$annuler = true ">Annuler <i class="zmdi zmdi-delete"></i> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> ';

        if (valider == true) {
            $activityDao = new ActivityDAO(db);
            (new Activity)->Uncancel(); //appel de la fonction Uncancel
            $this->a->setState("Planifiée");
            $activityDao->Update($this->a);
        }
    }

    public function  setCanceled(){
        require_once('../app/ConnexionBDD.php');
        $valider = false;
        $annuler = false;
      echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ConnexionError</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/theme.css">
        <script src="https://kit.fontawesome.com/f59e24d178.js" crossorigin="anonymous"></script>
    </head>
    <div class="page-content--bge7">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                        <h3>  Demande de confirmation : </h3>
                        <hr/>
                        <form>
                              <button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="$valider = true">Valider <i class="zmdi zmdi-edit"></i></button> 
                              <button type="button" class="btn btn-danger m-l10 m-b-10"  onclick="$annuler = true ">Annuler <i class="zmdi zmdi-delete"></i> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> ';

        if (valider == true) {
            $activityDao = new ActivityDAO(db);
            (new Activity)->Cancel();//appel de la fonction Cancel
            $this->a->setState("Annulée");
            $activityDao->Update($this->a);
        }
    }
    public function setFinished(){
        require_once('../app/ConnexionBDD.php');
        $valider = false;
        $annuler = false;
      echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ConnexionError</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/theme.css">
        <script src="https://kit.fontawesome.com/f59e24d178.js" crossorigin="anonymous"></script>
    </head>
    <div class="page-content--bge7">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                        <h3>  Demande de confirmation : </h3>
                        <hr/>
                        <form>
                              <button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="$valider = true">Valider <i class="zmdi zmdi-edit"></i></button> 
                              <button type="button" class="btn btn-danger m-l10 m-b-10"  onclick="$annuler = true ">Annuler <i class="zmdi zmdi-delete"></i> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> ';

        if (valider == true) {
            $activityDao = new ActivityDAO(db);
            (new Activity)->finish();//appel de la fonction finished
            $this->a->setState("Fini");
            $activityDao->Update($this->a);
        }
    }
}

?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Activités</h1>
                    <hr>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                            <tr>
                                <th>Résumé</th>
                                <th>Détails</th>
                                <th>Statut</th>
                                <th>Type</th>
                                <th>Durée prévue</th>
                                <th>Technicien</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php /*
                                    require('../app/ProjectDAO.php');
                                    $p = new ActivityDAO();
                                    $projects = $p->readProjects($_SESSION['utilisateurId']);
                                    foreach ($projects as $element) {
                                        echo \'<tr><td>\' . $element[\'nom\'] . \'</td><td>\' . $element[\'dureeEstimee\'] . \'</td><td>\' . $element[\'dureeFinale\'] . \'</td><td>\' . $element[\'statut\'] . \'</td><td><button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="self.location.href=\\'ActivityWindows . php\\'">Details </button></td></tr>\';
                                    }*/
                                ?>
                            <tr>
                                <td>La le résumé hého</td>
                                <td>Ceci est un détail</td>
                                <td><span class="btn btn-outline-warning active">En cours</span></td>
                                <td>maintenance</td>
                                <td>50</td>
                                <td>Jean Daniel</td>
                                <td>
                                    <button type="button" class="btn btn-primary m-l-10 m-b-10" onclick="self.location.href=\'EditActivity.php\'">Edit <i class="zmdi zmdi-edit"></i></button> <!-- bien penser a relier a bad ActivityState -->
                                    <button type="button" class="btn btn-danger m-l10 m-b-10">Delete <i class="zmdi zmdi-delete"></i> </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>';

include('inc/footer.php');

?>



