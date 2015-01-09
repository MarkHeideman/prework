<DOCTYPE html xmlns="http://www.w3.org/1999/html">
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



<$php
class myClass {
		//code will go here
}
$object1 = new myClass();
echo "\$object1 is an ".gettype($object1).".<br/>";

if (is_object($object1)) {
		echo "Really! I swear \$object1 is an object!";
}
?>


<?php
class myCar {
	public $color = "silver";
	public $color = "MAZDA";
	public $color = "Protege5";
}
$car = new myCar();
echo "I drive a: ".$car -> color." ".$car -> make." ".$car -> model;
?>

<?php
class myCar {
	public $color = "silver";
	public $color = "Mazda";
	public $color = "Protege5";
}
$car = new myCar();
$car -> color = "red";
$car -> make = "Porsche";
$car -> model  = "Boxter";
echo "I drive a: ".$car -> color." ".$car -> make." ".$car -> model;
?>



<?php
class myClass {
	public$name = "Jimbo";
	function sayHello() {
		echo "Hello! My name is ".$this->name;
	}
}
$object1 = new myClass();
$object1 -> sayHello();
?>


<?php
class myClass {
	public$name = "Jimbo";
	function setName($n) {
		$this->name = $n;
	}
	function sayHello() {
		echo "Hello! My name is ".$this->name;
	}
}
$object1 = new myClass();
$object1 -> setName("Julie");
$object1 -> sayHello();
?>

<?php
class myClass {
	public$name = "Matt";
	function setName($n) {
		$this->name = $n;
	}
	function sayHello() {
		echo "Hello! My name is ".$this->name;
	}
}
class childClass extends myClass {
	//code goes here
}
$object1 = new new childClass ("Baby Matt");
$object1 -> sayHello();
?>

<?php
class myClass {
	public$name = "Matt";
	function setName($n) {
		$this->name = $n;
	}
	function sayHello() {
		echo "Hello! My name is ".$this->name;
	}
}
class childClass extends myClass {
	function sayHello() {
		echo "I will not tell you my name.";
	}
}
$object1 = new new childClass ("Baby Matt");
$object1 -> sayHello();
?>

<?php
$number = 543;
printf("Decimal: %d<br/>"", $number);
printf("Binary: %d<br/>"", $number);
printf("Double: %d<br/>"", $number);
printf("Octal: %d<br/>"", $number);
printf("String: %d<br/>"", $number);
printf("Hex (lower): %d<br/>"", $number);
printf("Hex (upper): %d<br/>"", $number);
?>

<?php
$products = array("Green armchair" => "222.4",
						"Candlestick"=> "4",
						"Coffe table"=> "80.6");
echo "<pre>";
printf("%-20s%20s/n", "Name", "Price");
forech ($products as $key=>$val) {
	printf( "%-20s%20.2f\n", $key, $val );
}
echo "</pre>";
?>


<?php
$test = "http://www.google.com/search?";
$test .= "hl=en&ie=UTF -8&q=php+development+books&btnG=Google+Search";
$delims = "?&";
Sword = strtok($test, $delims);
while (is_string($word))) {
	if ($word) {
		echo $word."<br/>";
	}
		$word = strtok($delims);
}
?>

<?php
$date_array = getdate(); // no argument passed so today's date will be used foreach ($date_array as $key => $val) {
	echo "$key = $val<br>";
}
<hr/>
<?$php_
echo "<p>Today's date: ".$date_array['mon']."/".$date_array['mday']."/".
		$date_array['year']."<p>";
?>

<?php
$time = time(); //stores the exact timestamp to use in this script
echo date("m/d/y G:i:s e", $time);
echo "<br/>";
echo "Today is ";
echo date("js \of F Y, \a\\t g:ia \i\\n e", $time);
?>


<?php
// make a time stamp for Jan 17 2012 at 9:34 pl
$ts = mktime(21, 34, 0, 1, 17, 2012);
echo date("m/d/y G:i:s: e" , $ts);
echo "<br/>";
echo "The date is ";
echo date("js \of F Y, \a\\t g:ia \i\\n e", $ts);
?>


<!DOCTYPE html>
<html>
</head>
<title>A simple HTML form</title>
</head>
<body>
<form method="post" action="send_simpleform.php">
<p><label for="text" id="user">Name:</label><br/>
	<input type="text" id="user" name="user"></p>
<p><label for="message">Message:</label><br/>
	<textarea id="message" name="message" rows="5" cols="40"></textarea></p>
	<button type="submit" name="submit" value="send">Send message</button>
	</form>
	</body>
</html>



<!DOCTYPE html>
<html>
	<head>
		<title>A simple response</title>
	</head>
	<body>
<p>Welcome, <strong><?php echo $_POST['user']; ?></strong>!,</p>
		<p>Your message is:
		<strong><?php echo $_POST['message']; ?></strong></p>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<title>An HTML form with checkboxes</title>
</head>
<body>
	<form action="send_formwithcb.php" method="POST">
	<p><label>Name:</label><br/>
		<input type="text" name="user" /></p>
		<fieldset>
			<legend>Select Some Products:</legend><br/>
			<input type="checkbox" id="Tricorder"
					 name="products[]" value="Tricorder">
	<label for="tricorder">Tricorder</label><br/>


	<input type="checkbox" id="ORAC_AI"
			 name="products[]" value="ORAC_AI">
			<label for="ORAC_AI">ORAC AI</label><br/>


			<input type="checkbox" id="HAL_2000"
					 name="products[]" value="HAL_2000">
			<label for="HAL_2000">HAL 2000</label><br/>
			</fieldset>
		<button type="submit" name="submit" value="submit">Submit Form</button>
	</form>
</body>
</html>





<!DOCTYPE html>
<html>
	<head>
		<title>Reading checkboxes</title>
	</head>
	<body>
		<p>Welcome, <strong><?php echo $_POST['user']; ?></strong>!,/p>
		<p>Your product choices are:
			<?php
			if (!empty($_POST['products'])) {
				echo "ul";
				foreach ($_POST['products'] as $value) {
					echo "<li>$value</li>li>";
				}
			}
			echo "/ul";
			} else {
				echo "None";
			}
			?>
		</body>
</html>




<!DOCTYPE html>
<html>
	<head>
	<title>An HTML form that calls itself</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="guess">Type your guess here:</label> <br/>
				<input type="text" id="guess" name="guess" /></p>
			<button type="submit" name="submit" value="submit">Submit</button>
		</form>
	</body>
</html>




<?php
$num_to_guess = 42
	if (!isset($_POST['guess'])) {
		$message = "Welcome to the guessing machine!";
	} elseif (!is_numeric(($_POST['guess'])) { // is not numeric
	$message = "I don't understand that response.";
} elseif ($_POST['guess'] == $num_to_guess)) { // matches!
$message = "Well done.";
} elseif ($_POST['guess'] > $num_to_guess) {
$message = "$_POST['guess']." is too big! Try a smaller number.";
} elseif ($_POST['guess'] < $num_to_guess) {
$message = $_POST['guess']." is too small! Try a larger number.";
} else { // some other condition
$message = "I am terribly confused.";
}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>A PHP number guessing script</title>
	</head>
	<body>
		<h1><?php echo $message; ?></h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="guess">Type your guess here:</label> <br/>
				<input type="text" id="guess" name="guess" /></p>
			<button type="submit" name="submit" value="submit">Submit</button>
		</form>
	</body>
</html>




<?php
$num_to_guess = 42
	$num_tries = (!isset($_POST['num_tries'])) ? $num_tries + 1 : 1;
	if (!isset($_POST['guess'])) {
		$message = "Welcome to the guessing machine!";
	} elseif (!is_numeric(($_POST['guess'])) { // is not numeric
	$message = "I don't understand that response.";
} elseif ($_POST['guess'] == $num_to_guess)) { // matches!
	$message = "Well done.";
} elseif ($_POST['guess'] > $num_to_guess) {
	$message = "$_POST['guess']." is too big! Try a smaller number.";
} elseif ($_POST['guess'] < $num_to_guess) {
$message = $_POST['guess']." is too small! Try a larger number.";
} else { // some other condition
	$message = "I am terribly confused.";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>A PHP number guessing script</title>
	</head>
	<body>
		<h1><?php echo $message; ?></h1>
		<p><strong>Guess number:</strong> <?php echo $num_tries; ?></p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p><label for="guess">Type your guess here:</label> <br/>
	<input type="text" id="guess" name="guess" /></p>
<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>" />
<button type="submit" name="submit" value="submit">Submit</button>
</form>
</body>
</html>




HTTP/1.1 200 OK
date: Sun, 29 Jan 2012 15:50 PST
Server: Apache/2.2.21 (Win32) PHP/5.4.0
X-Powered-By: PHP/5.4.0
Connection: close
Content - Type: text/html


<?php
$num_to_guess = 42
	$num_tries = (!isset($_POST['num_tries'])) ? $num_tries + 1 : 1;
	if (!isset($_POST['guess'])) {
		$message = "Welcome to the guessing machine!";
	} elseif (!is_numeric(($_POST['guess'])) { // is not numeric
	$message = "I don't understand that response.";
} elseif ($_POST['guess'] == $num_to_guess)) { // matches!
			header(Location: conrats.html");
			exit;
		} elseif ($_POST['guess'] > $num_to_guess) {
			$message = "$_POST['guess']." is too big! Try a smaller number.";
} elseif ($_POST['guess'] < $num_to_guess) {
$message = $_POST['guess']." is too small! Try a larger number.";
} else { // some other condition
	$message = "I am terribly confused.";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>A PHP number guessing script</title>
	</head>
	<body>
		<h1><?php echo $message; ?></h1>
		<p><strong>Guess number:</strong> <?php echo $num_tries; ?></p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="guess">Type your guess here:</label> <br/>
				<input type="text" id="guess" name="guess" /></p>
			<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>" />
			<button type="submit" name="submit" value="submit">Submit</button>
		</form>
	</body>
</html>





<!DOCTYPE html>
<html>
	<head>
		<title>E-Mail Form</title>
	</head>
	<body>
		<form action="sendmail.php" method="POST">
			<p><label for="name">Name:</label> <br/>
				<input type="text" size="25" id="name" name="name" /></p>
			<p><label for="email">E-Mail Address:</label> <br/>
				<input type="text" size="25" id="email" name="email" /></p>
			<p><label for="msg">Message:</label> <br/>
			<textarea id="msg" name="msg" cols="30" rows="5"></textarea></p>
			<button type="submit" name="submit" value="send">Send Message</button>
		</form>
	</body>
</html>





<?php
//start building the mail string
$msg = "Name:         ".$_POST['name']."\n";
$msg = "E-Mail:       ".$_POST['email']."\n";
$msg = "Message:      ".$_POST['messgae']."\n";

//set up the mail
$recipient = "you@yourdomain.com";
$subject = "Form Submission Results";
$mailheaders = "From My Web Site <defaultaddress@yourdomain.com> \n";
$mailheaders .= "Reply - To: ".$_POST['email'];

//send the mail
mail ($recipient, $subject, $msg, $mailheaders);
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sending mail from the form in Listing 11.10</title>
	</head>
	<body>
<p> Thanks, <strong><?php echo $_POST['name']; ?></strong>,
	for your message.</p>
		<p> Your e-mail address:
			<strong><?php echo $_POST['email']; ?><strong></p>
		</body>
	</html>




<?php
//start building the mail string
$msg = "<p><strong>Name:</strong>          ".$_POST['name']."</p>";
$msg .= "<p><strong>E-Mail:<strong>        ".$_POST['email']."<p/>";
$msg .= "<p><strong>Message:<strong>       ".$_POST['messgae']."</p>";

//set up the mail
$recipient = "you@yourdomain.com";
$subject = "Form Submission Results";
$mailheaders = "MIME-Version: 1.0\r\n\";
$mailheaders .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$mailheaders = "From My Web Site <defaultaddress@yourdomain.com> \n";
$mailheaders .= "Reply-To: ".$_POST['email'];

//send the mail
mail ($recipient, $subject, $msg, $mailheaders);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sending the Simple Feedback Form - HTML Version</title>
	</head>
	<body>
		<p> Thanks, <strong><?php echo $_POST['name']; ?></strong>,
			for your message.</p>
		<p> Your e-mail address:
			<strong><?php echo $_POST['email']; ?><strong></p>
 <p>Your message: <br/> <?php echo $_POST['$message']; ?> </p>
	</body>
</html>


<!DOCTYPE html>
<html>
	<head>
		<title>A simple file upload form</title>
	</head>
	<body>
	<form action="do_upload.php" enctype="multipart/form-data" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
	<p><label for ="fileupload">File to Upload:</label>
<input type="file" id="fileupload"  name="fileupload" /></p>
<button type="submit" name="submit" value="send">Upload File</button>
</form>
 </body>
</html>



<?php
$file_dir = "/path/to/upload/directory";

foreach($_FILES as $file_name => $file_array) {
	echo "path: ".$file_array['tmp_name']."<br/>\n";
	echo "path: ".$file_array['name']."<br/>\n";
	echo "path: ".$file_array['type']."<br/>\n";
	echo "path: ".$file_array['size']."<br/>\n";

	if (is_uploaded_file($file_array['tmp_name'])) {
		move_uploaded_file(file_array['tmp_name'],
			"$file_dir/".$file_array['name'])
			or die ("Couldn't move file");
			} else {
				echo "No file found.";
				}
}
?>




