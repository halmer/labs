<?php
    function GetSurveyFromRequest()
    {
        $survey = array();
        $survey['first_name'] = GetParam('first_name');
        $survey['last_name'] = GetParam('last_name');
        $survey['email'] = GetParam('email');
        $survey['age'] = GetParam('age');
        return $survey;
    }

    function GetSurveyToFile($filename, $survey)
    {
        return (!empty($filename))
            ? file_put_contents('data/' . $filename . '.txt', serialize($survey))
            : 'no_name';
    }

    function GetSurveyFilename($filename)
    {
        return GetParam($filename);
    }

    function GetSurveyFromFile($filename)
    {
        $survey = array();
        $survey = (file_exists('data/' . $filename . '.txt'))
            ? file_get_contents('data/' . $filename . '.txt')
            : 'no_file';
        return ($survey !== false) && ($survey !== 'no_file')
            ? unserialize($survey)
            : $survey;
    }