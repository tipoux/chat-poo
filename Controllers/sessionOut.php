<?php

    $update = new \Entite\GestionsUsers($db->getPdo());
    $update->update(0);

    unset($_SESSION);
    unset($_COOKIE);

    session_destroy();

    header('Location: ?page=index');

