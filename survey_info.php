<?php
    define('ERR_NO_FILE', 'no_file');
    define('ERR_NO_ACCESS_TO_FILE', 'no_access');
    define('OK', 'ok');
    require_once ('include/common.inc.php');

    header('Content-Type: text/plain');
    $filename = GetSurveyFilename('email');
    $error = OK;
    $surveyInfo = GetSurveyFromFile($filename, $error);
    if ($error == OK)
    {
        PrintSurvey($surveyInfo);
    }
    else
    {
        if ($error == ERR_NO_FILE)
        {
            echo 'Файл ' . $filename . '.txt не найден';
        }
        if ($error == ERR_NO_ACCESS_TO_FILE)
        {
            echo 'Ошибка чтения';
        }
    }