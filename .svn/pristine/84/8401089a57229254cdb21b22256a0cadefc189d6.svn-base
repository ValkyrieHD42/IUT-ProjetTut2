<?php


class BadActivitySateError
{

    private $activity;
    private $desiredeState;

    /**
     * BadActivitySateError constructor.
     * @param Activity $a
     * @param ActivityState $ds
     */
    public function __construct(Activity $a, ActivityState $ds){
        $this->activity = $a;
        $this->desiredeState = $ds;

        echo '
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BadActivityState</title>
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
                        <h3>  Erreur Activitée : </h3>
                        <hr/>
                        <form>
                            <div class="form-group">
                                <h4> ' . $this->activity->getName()  . 'ne peux pas avoir comme état :' .$this->desiredeState . '<h4/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        ';
    }

}