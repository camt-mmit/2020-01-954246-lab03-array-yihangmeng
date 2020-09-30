<?php
$sum=0;$score=[];
$number=0;$i=0;
while(true)
{ 
  echo"input score ".($i+1).": ";
  $score[$i] = trim(fgets(STDIN));
  if($score[$i]=='e')
  {
    break;
  }
  $sum+=$score[$i];
  $i=$i+1;
}
$number=$i;
$average=$sum/$number;
echo"The average score for ";
for($j=0;$j<=$number-1;$j++)
{
  echo $score[$j];
  if($j==$number-2)
  {
    echo "and";
  }
  else if($j!=$number-2 && $j != $number-1)
  {
    echo ",";
  }
}
echo "=".$average;
