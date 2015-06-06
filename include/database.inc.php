<?php
    $g_dbLink = null;
    
    function dbConnect()
    {
        global $g_dbLink;
        $g_dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (mysqli_connect_errno())
        {
            echo 'Unable to connect to database';
            exit();
        }
    }

    /**
     * Выполняет sql-запрос, переданный в переменной $query.
     * Возвращает ассоциативный массив с данными, если они есть. 
     * Возвращает пустой массив, если данных нет
     * @param string $query
     * @return array
     */
    function dbQuery($query)
    {
        global $g_dbLink;
        $data = array();
        if ($result = mysqli_query($g_dbLink, $query))
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                array_push($data, $row);
            }
            mysqli_free_result($result);
        }
        return $data;
    }

    function dbQuote($str)
    {
        global $g_dbLink;
        return mysqli_real_escape_string($g_dbLink, $str);
    }

    function dbClose()
    {
        global $g_dbLink;
        mysqli_close($g_dbLink);
    }