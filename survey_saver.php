<?php
    require_once ('include/common.inc.php');

    $surveyInfo = GetSurveyFromRequest();
    $saver = GetSurveyToFile($surveyInfo['email'], $surveyInfo);
    if ($saver == 'no_name')
    {
        echo '��� ����� �� ����������.';
    }
    else
    {
        echo($saver !== false)
        ? '������ �������� �: data/' . $surveyInfo['email'] . '.txt (' . $saver . ' ����).'
        : '������ ������.';
    }