<?php

class Flasher
{

    public static function setFlash($message, $action, $typedat)
    {
        $_SESSION['flash'] = [
            'typedat' => $typedat,
            'message' => $message,
            'action' => $action

        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
            <div class="alert alert-' . $_SESSION['flash']['typedat'] . ' alert-dismissible fade show mt-2" role="alert">
                Data <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['action'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            unset($_SESSION['flash']);
        }
    }
}
