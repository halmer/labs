<?php
    define('ERR_NO_FILE', 'no_file');
    define('ERR_NO_ACCESS_TO_FILE', 'no_access');
    define('ERR_UNABLE_TO_PARSE', 'unable_to_parse');
    define('ERR_OK', 'ok');
    require_once ('include/common.inc.php');

    header('Content-Type: text/plain');
    $filename = GetSurveyFilename('email');
    $error = ERR_OK;
    $surveyInfo = GetSurveyFromFile($filename, $error);
    if ($error == ERR_OK)
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
        if ($error == ERR_UNABLE_TO_PARSE)
        {
            echo 'Файл испорчен';
        }
    }