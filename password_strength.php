<?php
    require_once ('include/common.inc.php');

    $password = GetParam('password');
    $strength = ($password !== '')
    	? CalcStrength($password)
    	: '������ �� �����.';
    echo($strength !== false)
    	? $strength
    	: '������ ������ �������� �� ���������� �������� � ����.'; 