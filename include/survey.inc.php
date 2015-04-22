<?php
    define('ERR_NO_NAME', 'no_name');
    define('ERR_NO_FILE', 'no_file');
    define('ERR_NO_ACCESS_TO_FILE', 'no_access');

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
        $filePath = GetSurveyFilePath($filename);
        $survey = array();
        $survey = (file_exists($filePath)) ? file_get_contents($filePath) : $errorCode = ERR_NO_FILE;
        if ($survey === false)
        {
            $errorCode = ERR_NO_ACCESS_TO_FILE;
        }
        return ($survey !== false) && ($errorCode !== ERR_NO_FILE) ? unserialize($survey) : $survey;
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