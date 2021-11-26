<?php

namespace App\Controller;


class SessionController
{

    public function start()
    {
        session_start();
        $_SESSION['roundsWon'] = 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //var_dump($_POST); die();

            $_SESSION['loginname'] = $_POST['loginname'];
        } else {
            $_SESSION['loginname'] = "Michel";
        }
        header('Location: /game');
    }
}
