<?php
include('GroupMaker.php');

$groupMaker = new GroupMaker();

$groupMaker->enterStudents();
$groupMaker->enterGroupSize();
$groupMaker->generateGroups();
$groupMaker->showGeneratedGroups();

?>