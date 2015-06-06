<?php
    define('UPLOAD_ERR_TYPE', 'Тип файла должен быть jpg, png, gif');
    define('UPLOAD_ERR_MOVE', 'Не удалось переместить загруженный файл в новое место');
    define('UPLOAD_ERR_POST', 'Не удалось определить, был ли файл загружен при помощи HTTP POST');

    function uploadFile($file)
    {
        $errorValues = array
        ( 
            UPLOAD_ERR_OK => 'Файл был успешно загружен на сервер',
            UPLOAD_ERR_INI_SIZE => 'Размер принятого файла превысил максимально допустимый размер',  
            UPLOAD_ERR_FORM_SIZE => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE',                            
            UPLOAD_ERR_PARTIAL => 'Загружаемый файл был получен только частично',   
            UPLOAD_ERR_NO_FILE => 'Файл не был загружен',   
            UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка',   
            UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск',
            UPLOAD_ERR_EXTENSION => 'PHP-расширение остановило загрузку файла'
        );
        $message = $errorValues[$file['error']]; 
        if ($file['error'] == UPLOAD_ERR_OK)
        {     
            $fileType = array('image/jpeg', 'image/png', 'image/gif');
            $uploadFileType = $file['type'];
            if(in_array($uploadFileType, $fileType))
            {
                if (is_uploaded_file($file['tmp_name']))
                {
                    $newNameFile = UPLOAD_DIR . time() . '_' . $file['name'];
                    if (!move_uploaded_file($file['tmp_name'], $newNameFile))
                    {
                        $message = UPLOAD_ERR_MOVE;
                    }
                }
                else
                {
                    $message = UPLOAD_ERR_POST;
                }
            } 
            else
            {    
                $message = UPLOAD_ERR_TYPE;
            }       
        }
        return $message;
    }

    function getUploadImages()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileType = array('image/jpeg', 'image/png', 'image/gif');
        $files = scandir(UPLOAD_DIR);
        $images = array();
        foreach ($files as $filename) 
        {
            $type = finfo_file($finfo, UPLOAD_DIR . $filename);
            if(in_array($type, $fileType))
            {    
                $images[] = 'uploads/' . $filename;
            }    
        }
        finfo_close($finfo);

        return $images;
    }        