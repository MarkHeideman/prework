
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


<?php
$mood = "happy";
if ($mood == "happy") {
echo "Hooray! I'm in a good mood!";
}
?>

<?php
$mood = "sad";
if ($mood == "happy") {
echo "Hooray! I'm in a good mood!";
} else {
echo "I'm in a sad mood.";
}
?>

<?php
$mood = "sad";
if ($mood == "happy") {
echo "Hooray! I'm in a good mood!";
} elseif ($mood == "sad") {
echo "Aww. Don't be down!";
} else {
echo "I'm neither happy nor sad, but $mood.";
}
?>

<?php
$mood = "sad";
switch ($mood) {
case "happy":
echo "Hooray! I'm in a good mood!";
break
case "sad":
echo "Aww. Don't be down!";
break
default:
echo "I'm neither happy nor sad, but $mood.";
break
}
?>



>?php
$mood = "sad";
	$text = ($mood == "happy") ? "I am in a good mood! : "I am in s $mood mood.";
		echo "$text";
?>



<?php
$counter = 1;
while ($counter. <= 12) {
	echo $counter." times 2 is ".($counter * 2)."br ?>;
	$counter++;
}
?>


<$php
$num = 1;
do {
    echo "The number is: ".$num."<br ?>";
    $num++;
} while (($num > 200) && ($num < 400));
?>


<?php
for ($counter=1; $counter<=12; $counter++) {
     echo $counter." times 2 is ".($counter * 2)."br />";
}
?>


<?php
for ($counter=1; $counter; <= 10; $counter++) {
      $temp = 4000/$counter;
      echo "4000 divided by ".$counter." is...".Stemp."<br ?>;
      }
?>


<?php
for ($counter = -4;
     if ($counter; == 0); {
         break
         } else {
      $temp = 4000/$counter;
      echo "4000 divided by ".$counter." is...".Stemp."<br ?>;
      }
}
?>


<?php
$counter = -4;
for (; $counter <= 10; $counter++) {
     if ($counter == 0) {
        continue;
        }
        $temp = 4000/$counter;
        echo "4000 divided by ".$counter." is...".$temp."<br ?>;
}
?>


<?php
echo "<table style=\"border: 1px solid #000;\"> \n";
for ($y=1; $y<=12; $y++) {
     echo "<tr> \n";
     for ($x=1; $x<12; $x++) {
     echo "<td style="\"border: 1px solid #000; width: 25px;
              text-align:center;\">";
              echo ($x * $y);
              echo "</tr> \n";
      }
      echo "/tr> \n;
      }
   echo "</table>";
   ?>



<?php
$display_prices = true;
if ($display_prices) {
    echo "<table border=\ "1\ ">\n";
    echo "<tr><td colspan=\ "3\ ">";
    echo "today's prices in dollars";
    echo "<td></tr>";
    echo "<tr><td>\$14.00</td><td\$32.00</td><td>\$71.00</td></tr>\n";
    echo "</table>";
    }
    ?>


<?php
$display_prices = true
if ($display_prices) {
?>
<table border="1">
<tr><td> colspan="3">today's prices in dollars</td></tr>
<tr><td>\$14.00</td><td\$32.00</td><td>$71.00</td></tr>
</table>
<?php
}
?>

<?php
$num = -321;
$newnum = abs($num);
echo $newnum;
//prints "321"
?>

<?php
function bighello()
{
     echo "<h1>HELLO!</h1>";
}
     bighello();
	?>




<$php
function printBR($txt)
{
	echo $txt."<br/>";
}
printBR("This is a line.");
printBR("This is a new line.");
printBR("This is yet abother line.");
?>


<$php
function addNums($firstnum, $secondnum)
{
		$result = $firstnum + $secondnum;
		return $result;
}
echo addNums(3,5);
//will print "8"
?>

<$php
function test()
{
		$testvariable = "this is a test variable";
	}
echo "test variable: ".$testvariable."<br/>";
?>


<$php
$life = 42;
function meaningOfLife()
{
		echo "The meaning of life is ".$life";
}
meanOfLife();
?>




<$php
$life=42;
	function meaningOfLife()
{
		global $life;
		echo "The meaning of life is ".$life";
}
	meaningOfLife();
	?>


<$php
$num_0f_calls = 0;
	function numberedHeading($txt)
{
			global $num_of_calls:
	$num_of_calls++;
	echo "<h1>".$num_of_calls." ".$txt."</h1>";
}
	echo "<p>We build a fine range of widgets.</p>';
numberedHeading("Doodads");
	echo "<p>Finest in the world.</p.;
		?>



<$php
function numberedHeading($txt)
{
	static $num_of_calls = 0;
	$num_of_calls++;
	echo "<h1>".$num_of_calls." ".$txt."</h1>";
}
numberedHeading("Widgets");echo
echo "<p>We build a fine range of widgets.</p>";
numberedHeading("Doodads");
echo "<p>Finest in the world.</p>";
?>


<$php
	function fontwrap($txt, $fontsize)
{
	echo "<span style="\"font-size:$fontsize\">.$txt."</span?";
}
	fontWrap("A heading<br/>","24pt");
	fontWrap("some body text<br/>","12pt");
	fontWrap("smaller body text<br/>","10pt");
?>


<$php
function fontWrap($txt, $fontsize = "12pt")
{
	echo "<span style="\"font-size:$fontsize\">".$txt."</span>";
}
fontWrap("A Heading<br/>", "24pt");
fontWrap("some body text<br/>");
fontWrap("even smaller body text<br/>";
?>




<$php
 function addFive($num)
{
		$num +=5;
}
$orignum = 10;
addFive($orignum);
echo $orignum;
?>


<?php
function addFive(&$num)
{
		$num +=5;
}
$orignum = 10;
addFive($orignum);
echo $orignum;
?>


<$php
function tagWrap($tag, $txt, $func = "")
{
		if ((!empty($txt)) && (function_exist($func))) {
			$txt + $func($txt);
			return "<".$tag.">'.$txt."</".$tag."><bt/>";
		} else {
			return "<strong>".$txt."</strong><br/>";
		}
}

function underline($txt)
{
	return "<span style=\"text-decoration:underline;\">".$txt."</span>";
}
echo tagWrasp('strong', 'make me bold');
echo tagWrap('em', 'underline and italicize me', "underline");
echo tagWrap('em' 'make me italic and quote me',
create_function('$txt', 'return "&quot;$txt&quot;";'));
?>




