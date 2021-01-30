<?php
class Stopwatch{
    private $startTime;
    private $endTime;
    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return round($this->startTime * 1000); // lay time la miliseconds
    }
    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return round($this->endTime * 1000); // lay time la miliseconds
    }
    function start(){
        $this->startTime = microtime(true); // lay time start
    }
    function stop(){
        $this->endTime= microtime(true); // lay time stop
    }
    function getElapsedTime(){
        return $this->getEndTime() - $this->getStartTime();
    }
}

$watch = new Stopwatch();
$watch->start();
echo "start time: ".$watch->getStartTime()."<br>";
for ($i=0;$i<100000;$i++){
    echo " ";
}
$watch->stop();
echo "stop time: " . $watch->getEndTime()."<br>";
echo "Thoi gian troi " . $watch->getElapsedTime()." ms <br>";


/** test  */
//echo microtime();
//$start = round(microtime(true)*1000);
//echo "<br>";
//echo $start;
//for ($i=0; $i<100000;$i++){
//    echo " ";
//}
//$stop = round(microtime(true)*1000);
//echo "<br>";
//echo $stop."<br>";
//echo $stop - $start;