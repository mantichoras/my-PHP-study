
<?php
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'bar', 'quux');
echo "{$foo->$bar} <br />";
echo "{$foo->$baz[2]}<br />";
?>

