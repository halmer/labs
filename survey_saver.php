<?php
    define('ERR_NO_NAME', 'no_name');
    require_once ('include/common.inc.php');

    $surveyInfo = GetSurveyFromRequest();
    $saver = SaveSurveyToFile($surveyInfo);
    if ($saver == ERR_NO_NAME)
    {
        echo 'Имя файла не определено.';
    }
    else
    {
        echo($saver !== false)
        ? 'Данные записаны в: ' . GetSurveyFilePath($surveyInfo['email']) . ' (' . $saver . ' байт).'
        : 'Ошибка записи.';
    }