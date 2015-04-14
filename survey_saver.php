<?php
    require_once ('include/common.inc.php');

    $surveyInfo = GetSurveyFromRequest();
    $saver = GetSurveyToFile($surveyInfo['email'], $surveyInfo);
    if ($saver == 'no_name')
    {
        echo 'Имя файла не определено.';
    }
    else
    {
        echo($saver !== false)
        ? 'Данные записаны в: data/' . $surveyInfo['email'] . '.txt (' . $saver . ' байт).'
        : 'Ошибка записи.';
    }