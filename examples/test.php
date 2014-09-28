<?php
include("phpgraphlib.php");
$graph = new PHPGraphLib(800,600, "test1.png");
$data = array("really long title"=>99, "Mary"=>98, "Joan"=>70, "Ed"=>90);
$graph->addData($data);
$graph->setTitle("Test Scores");
$graph->setTextColor("blue");
$graph->setXValuesHorizontal(true);
$graph->setBarColors(array("really long title"=>array("blue","red","green"), "Mary"=>array("yellow"), "Joan"=>array("red"),"Ed"=>array("blue", "yellow","blue", "yellow","blue", "yellow","blue", "yellow")));
$graph->createGraph();
echo "some text";
?>
