

<?php 
 $p = 'Приветствую Вас на моей страничке!';
?>

<?php 
 $name = 'Инокентий';
 $surname = 'Лаврентьев';
 $city = 'Санкт-Петербург';
 $age = 27;
?>

<!--время обучения-->
<?php
function learningTime ()
{
 $today = time();
 $startDate = mktime(0, 0, 0, 12, 3, 2020);
 $learning = $today - $startDate;
 echo date('n', $learning), ' ', 'месяцев.';
}
?>

<?php
 include 'main.php';
?>

