
<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
$f = 'I love using PHP!'
?>

<?php 
$name = 'Jovani';
$surname = 'Giorgio';
$city = 'Ortisei';
$age = 82;
$s = 'gogo'
?>

<?php
function getArray() {
  return array(1, 2, 3);
}
$secondElement = getArray()[1];
?>


<?php
define('KOOLAID', 'koolaid1');
$juices = array("apple", "orange", "koolaid1" => "purple");


class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();
?>