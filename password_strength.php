<?php
    require_once ('include/common.inc.php');

    $password = GetParam('password');
    $strength = (!empty($password)) ? CalcStrength($password) : 'Пароль не задан.';
    echo($strength !== false) ? $strength : 'Пароль должен состоять из английских символов и цифр.'; 