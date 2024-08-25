<?php

if (!function_exists('merge')) {
    function merge($arrays)
    {
        $result = [];

        foreach ($arrays as $array) {
            if ($array !== null) {
                if (gettype($array) !== 'string') {
                    foreach ($array as $key => $value) {
                        if (is_integer($key)) {
                            $result[] = $value;
                        } elseif (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                            $result[$key] = merge([$result[$key], $value]);
                        } else {
                            $result[$key] = $value;
                        }
                    }
                } else {
                    $result[count($result)] = $array;
                }
            }
        }

        return join(" ", $result);
    }
}

if (!function_exists('uncamelize')) {
    function uncamelize($camel, $splitter = "_")
    {
        $camel = preg_replace('/(?!^)[[:upper:]][[:lower:]]/', '$0', preg_replace('/(?!^)[[:upper:]]+/', $splitter . '$0', $camel));
        return strtolower($camel);
    }
}

if (!function_exists('formatCurrency')) {
    function formatCurrency($number)
    {
        if ($number) {
            $formattedNumber = preg_replace('/\D/', '', strval($number));
            $rest = strlen($formattedNumber) % 3;
            $currency = substr($formattedNumber, 0, $rest);
            $thousand = str_split(substr($formattedNumber, $rest), 3);
            $separator = '';

            if ($thousand) {
                $separator = $rest ? "." : "";
                $currency .= $separator . implode(".", $thousand);
            }

            return $currency;
        } else {
            return "";
        }
    }
}

if (!function_exists('getFileList')) {
    function getFileList($directory, $extensions)
    {
        $files = [];

        if (is_dir($directory)) {
            $scannedFiles = scandir($directory);
            foreach ($scannedFiles as $file) {
                if ($file === '.' || $file === '..') continue;

                $fileExtension = explode(".", $file);
                if (in_array(end($fileExtension), explode(",", $extensions))) {
                    array_push($files, str_replace(base_path() . "/", "", "/" . implode("/", array_filter(explode("/", $directory), "strlen")) . "/" . $file));
                }
            }
        }

        return $files;
    }
}
