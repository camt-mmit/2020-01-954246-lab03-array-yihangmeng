<?php
$sum=0;
echo"input number of data: ";
$number = trim(fgets(STDIN));
for($i=1;$i<=$number;$i++)
{
  echo"input score ".($i).": ";
  $score[$i] = trim(fgets(STDIN));
  $sum+=$score[$i];
}
$average=$sum/$number;
echo"The average score for ";
for($i=1;$i<=$number;$i++)
{
  echo $score[$i];
  if($i==$number-1)
  {
    echo "and";
  }
  else
  {
    echo ",";
  }
}
echo "=".$average;
