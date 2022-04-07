<?php

/*
if ($_POST['date']>='2022-03-21' && $_POST['date']<='2022-06-21') {
        echo 'printemps';
    }elseif ($_POST['date']>='2022-06-21' && $_POST['date']<='2022-09-21') {
        echo 'été';
    }elseif ($_POST['date']>='2022-09-22' && $_POST['date']<='2022-09-20') {
        echo 'automne';
    }else  {
        echo 'Hiver';
    }
    */


    //Besoin de trouver le moyen d'éviter de rentrer l'année en dur
    function seasons() {
    if ($_POST['date']>='2022-03-21' && $_POST['date']<='2022-06-21') {
        return 'printemps';
    }elseif ($_POST['date']>='2022-06-21' && $_POST['date']<='2022-09-21') {
        return 'été';
    }elseif ($_POST['date']>='2022-09-22' && $_POST['date']<='2022-12-21') {
        return 'automne';
    }else  {
        return 'Hiver';
    }
    }

    
