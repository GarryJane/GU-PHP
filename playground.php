<?php

class Log
{

    public $logFileName;
    protected $file;

    function __construct($dirName = false, $fileName = false)
    {
        if (!$dirName) {
            $dirName = dirname(__FILE__);
        }
        if (!$fileName) {
            $fileName = "script.log";
        }
        $this->logFileName = $dirName . "/" . $fileName;
    }

    public function logMsg($msg = false)
    {
        if (!$msg) $msg = "empty message";
        $msg = "____________________\n"
            . date("Y/m/d H:i:s")
            . "\n$msg\n";
        $this->file = fopen($this->logFileName, 'a+');
        fwrite($this->file, $msg);
        fclose($this->file);
    }

}

$log = new Log();

$arr = ["a" => 1, "b" => 2, "c" => [1, 2, 3]];

ob_start();
var_dump($log->logFileName);
var_dump($arr);
$log->logMsg(ob_get_contents());