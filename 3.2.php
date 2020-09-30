<?php
$sum=0;
echo"input number of data:";
$number = trim(fgets(STDIN));
for($i=0;$i<$number;$i++)
{
  echo"input score".($i+1).":";
  $score[$i] = trim(fgets(STDIN));
  $sum+=$score[$i];
}
$average=$sum/$number;
echo"The average score for ";
for($i=0;$i<$number;$i++)
{
  echo $score[$i].", ";
}
echo "=".$average;
