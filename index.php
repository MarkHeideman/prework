
<DOCTYPE html>
<html>
	<head>
		<title>I Completed the Prework</title>
	</head>
	<body>
		</p>I completed the Prework<p>
	</body>
</html>


<?php
$testing; // declare without assigning
echo "is null? ".is_null($testing); // checks if null
echo "<br/>";
$testing = 5;
echo "is an integer? ".is_int($testing); // checks if integer
echo "<br/>";
$testing = "five";
echo "is a string? " .is_string($testing); // checks if string
echo "<br/>";
$testing = 5.024;
echo "is a double? ".is_double($testing); // checks if double
echo "<br/>";
$testing = true;
echo "is boolean? ".is_bool($testing); // checks if boolean
echo "<br/>";
$testing = array('apple', 'orange', 'pear');
echo "is an array? ".is_array($testing); // checks if array
echo "<br/>";
echo "is numeric? ".is_numeric($testing); // checks if numeric
echo "<br/>";
echo "is a resource? ".is_resource($testing); // checks if is a resource
echo "<br/>";
echo "is an array? ".is_array($testing); // checks if is an array
echo "<br/>";
?>

<?php
$undecided = 3.14;
echo "is ".$undecided." a double? ".is_double($undecided). "<br/>"; // double
settype($undecided, 'string');
echo "is ".$undecided. " a string? ".is_string($undecided). "<br/>"; // string
settype($undecided, 'integer');
echo "is ".$undecided. " a integer? ".is_integer($undecided). "<br/>"; // integer
settype($undecided, 'double');
echo "is ".$undecided. " a double? ".is_double($undecided). "<br/>"; // double
settype($undecided, 'bool');
echo "is ".$undecided. " a boolean? ".is_bool($undecided). "<br/>"; // boolean
?>


<?php
$undecided = 3.14;
$holder = (double) $undecided;
echo "is ".$holder." a double? ".is_double($holder)."br/>; // double
$holder = (string) $undecided;
echo "is ".$holder." a string? ".is_string(holder)."br/>; // string
$holder = (integer) $undecided;
echo "is ".$holder." a integer? ".is_integer($holder)."br/>; // integer
$holder = (double) $undecided;
echo "is ".$holder." a double? ".is_double($holder)."br/>; // double
$holder = (boolean) $undecided;
echo "is ".$holder." a boolean? ".is_bool($holder)."br/>; // boolean
echo "hr/>";
echo "original variable type of $undecided: ";
echo gettype($undecided); // double
?>


