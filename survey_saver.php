<?php
    define('ERR_NO_NAME', 'no_name');
    require_once ('include/common.inc.php');

    $surveyInfo = GetSurveyFromRequest();
    $saver = SaveSurveyToFile($surveyInfo);
    if ($saver == ERR_NO_NAME)
    {
        echo '��� ����� �� ����������.';
    }
    else
    {
        echo($saver !== false)
        ? '������ �������� �: ' . GetSurveyFilePath($surveyInfo['email']) . ' (' . $saver . ' ����).'
        : '������ ������.';
    }