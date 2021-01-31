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

class Q3
{
    public function stringMerge(string $s1, string $s2) : string
    {
        $res = '';
        for ($i=0; $i < strlen($s1); $i++) {
            $res .= substr($s1, $i, 1) . substr($s2, $i, 1);
        }
        $res .= strlen($s2) > strlen($s1) ? substr($s2, strlen($s1)) : '';
        return $res;
    }
}

class Q4
{
    public function superDigit(int $num) : int
    {
        while ($num >= 10) {
            $res = 0;
            while ($num >= 1) {
                $res += $num % 10;
                $num /= 10;
            }
            $num = $res;
        }
        return $num;
    }
}

class Q5
{
    public function importXML(string $filePath) : array
    {
        $res = [];
        $xml = simplexml_load_file($filePath);
        foreach ($xml as $node) {
            if (isset($node->children()->uniqueID)) {
                $res[(string)$node->children()->uniqueID] = $node->getName();
            }
        }
        return $res;
    }
}