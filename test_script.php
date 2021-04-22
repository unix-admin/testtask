<?php
declare(strict_types=1);

if(empty($argv[1]) || empty($argv[2]) || !is_numeric($argv[1]) || !is_numeric($argv[2]) || $argv[1] < 2 || $argv[2] < 2 )
  exit('Неверные параметры!'.PHP_EOL);

$matrix = calculateMatrixSize((int)$argv[1],(int)$argv[2]);
echo 'В матрице прямоугольников: '.rectangles(++$matrix['cols'],2)*rectangles(++$matrix['rows'],2).PHP_EOL;


/**
 * Вычисляет размер матрицы по количеству точек
 * @param int $x
 * @param int $y
 * @return array
 */
function calculateMatrixSize(int $x, int $y){
  $cols = 0;
  $rows = 0;
  for ($i=1; $i<$x; $i++){
    for($j = 1; $j<$y; $j++)
      $rows++;
    $cols++;
  }
  return['cols'=>$cols,'rows'=>$rows/$cols];
}

/**
 * Вычисляет факториал числа
 * @param int $number
 * @return int
 */
function factorial(int $number){
  $result = 1;
  for($i = 1; $i<=$number; $i++)
    $result *= $i;

  return $result;
}

/**
 * Вычисляет количество прямоугольников в матрице размером MxN
 * @param int $m
 * @param int $n
 * @return float|int
 */
function rectangles(int $m, int $n){
  return factorial($m)/(factorial($n)*factorial($m-$n));
}

