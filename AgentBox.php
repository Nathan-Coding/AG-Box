<?php
declare(strict_types=1);
class Q1
{
    public function repeatWord(string $str, bool $caseSensitive=true) : bool
    {
        $res = [];
        for ($i=0; $i < strlen($str); $i++) {
            if (!in_array($str[$i], $res)) {
                if (ctype_alnum($str[$i])) {
                    $res[] = $caseSensitive ? $str[$i] : strtolower($str[$i]);
                }
            } else {
                return false;
            }
        }
        return true;
    }
}

class Q2
{
    public function literalDateParsing(string $str) : string
    {
        return date('Y-m-d', strtotime(substr($str, 4)));
    }
}