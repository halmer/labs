<?php
    define('ERR_NO_NAME', 'no_name');
    define('ERR_NO_FILE', 'no_file');
    define('ERR_NO_ACCESS_TO_FILE', 'no_access');
    define('ERR_UNABLE_TO_PARSE', 'unable_to_parse');
    define('ERR_OK', 'ok');

    /**                                         
     * @return array
     */
    function GetSurveyFromRequest()
    {
        $survey = array();
        $survey['first_name'] = GetParam('first_name');
        $survey['last_name'] = GetParam('last_name');
        $survey['email'] = GetParam('email');
        $survey['age'] = GetParam('age');
        return $survey;
    }

    /**                                         
     * @param string $filename
     * @return string
     */
    function GetSurveyFilePath($filename)
    {
        return 'data/' . $filename . '.txt';
    }

    /**                                         
     * @param array $survey
     * @return string
     */
    function SaveSurveyToFile($survey)
    {
        $filename = $survey['email'];
        $filePath = GetSurveyFilePath($filename);
        return (!empty($filename)) ? file_put_contents($filePath, serialize($survey)) : ERR_NO_NAME;
    }

    /**                                         
     * @param string $filename
     * @return string
     */
    function GetSurveyFilename($filename)
    {
        return GetParam($filename);
    }

    /**                                         
     * @param string $filename
     * @param string $errorCode
     * @return array|false
     */
    function GetSurveyFromFile($filename, &$errorCode)
    {
        $errorCode = ERR_OK;
        $filePath = GetSurveyFilePath($filename);
        $survey = array();

        if (!file_exists($filePath))
        {
            $errorCode = ERR_NO_FILE;
        }
        if ($errorCode === ERR_OK)
        {
            $survey = file_get_contents($filePath);
            if ( $survey === false )
            {
                $errorCode = ERR_NO_ACCESS_TO_FILE;
            }
        }
        if ($errorCode === ERR_OK)
        {
            $survey = unserialize($survey);
            if ($survey === false)
            {
                $errorCode = ERR_UNABLE_TO_PARSE;
            }
        }                                               
        return ($errorCode === ERR_OK) ? $survey : false;
    }

    /**                                         
     * @param array $survey
     * @return echo array
     */
    function PrintSurvey($survey)
    {
        foreach ($survey as $key => $value) 
        {
            $key = str_replace('_', ' ', ucfirst($key)) ;
            echo $key . ': ' . (!empty($value) ? $value : '...') . "\n";
        }
    }