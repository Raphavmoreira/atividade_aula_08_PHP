<?php 
    session_start();

    include_once('servicos.busca.php');

    header('Location: servicos.form.editar.page.php');
    exit;