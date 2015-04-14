<?php
    function CalcStrength($password)
    {
        $strength = PasswordCheck($password);
        if ($strength !== false)
        {
            $strength += CalcLengthStrength($password);
            $strength += CalcDigitStrength($password);
            $strength += CalcUpperStrength($password);
            $strength += CalcLowerStrength($password);
            $strength += CalcOnlyCharStrength($password);
            $strength += CalcOnlyDigitStrength($password);
            $strength += CalcRepeatStrength($password);
        }
        return $strength;
    }

    function PasswordCheck($password)
    {
        return (ctype_alnum($password))
            ? 0
            : false;
    }

    function CalcLengthStrength($password)
    {
        return strlen($password) * 4;
    }

    function CalcDigitStrength($password)
    {
        $count = 0;
        for ($i = 0; $i < strlen($password); $i++)
        {
            if (ctype_digit($password[$i]))
            {
                $count++;
            }
        }
        return $count * 4;
    }

    function CalcUpperStrength($password)
    {
        $count = 0;
        for ($i = 0; $i < strlen($password); $i++)
        {
            if (ctype_upper($password[$i]))
            {
                $count++;
            }
        }
        return ($count > 0) 
            ? (strlen($password) - $count) * 2 
            : 0;
    }

    function CalcLowerStrength($password)
    {
        $count = 0;
        for ($i = 0; $i < strlen($password); $i++)
        {
            if (ctype_lower($password[$i]))
            {
                $count++;
            }
        }
        return ($count > 0) 
            ? (strlen($password) - $count) * 2 
            : 0;
    }

    function CalcOnlyCharStrength($password)
    {
        return (ctype_alpha($password)) 
            ? -strlen($password) 
            : 0;
    }

    function CalcOnlyDigitStrength($password)
    {
        return (ctype_digit($password)) 
            ? -strlen($password) 
            : 0;
    }

    function CalcRepeatStrength($password)
    {
        $strength = 0;
        foreach (count_chars($password, 1) as $value)
        {
            if ($value > 1)
            {
                $strength += $value;
            }
        }
        return -$strength;
    }