<?php
    require_once ('include/common.inc.php');

    header('Content-Type: text/plain');
    $filename = GetSurveyFilename('email');
    $surveyInfo = GetSurveyFromFile($filename);
    if ($surveyInfo == 'no_file')
    {
        echo '���� ' . $filename . '.txt �� ������.';
    }
    else
    {
        if ($surveyInfo !== false)
        {
            echo(!empty ($surveyInfo['first_name']))
                ? 'First Name: ' . $surveyInfo['first_name'] . "\n"
                : 'First Name: ...' . "\n";
            echo(!empty ($surveyInfo['last_name']))
                ? 'Last Name: ' . $surveyInfo['last_name'] . "\n"
                : 'Last Name: ...' . "\n";
            echo(!empty ($surveyInfo['email']))
                ? 'Email: ' . $surveyInfo['email'] . "\n"
                : 'Email: ...' . "\n";
            echo(!empty ($surveyInfo['age']))
                ? 'Age: ' . $surveyInfo['age'] . "\n"
                : 'Age: ...' . "\n";
        }
        else
        {
            echo '������ ������';
        }
    }