https://github.com/RajeshNagar701/7th_Jan_PHP_2025

# Core PHP

## What is PHP

## function

wht is a function

var_dump() : get data type and value
strlen() : get string length

include() : function to get content of file, can be used multiple times, provides warning if file not present and executes rest of code
include_once() : function to get content of file, file is included only once
require() : function to get content of file, can be used multiple times, if file not present it throws fatal error and halts code execution
require_once() : function to get content of file, file is added only once, if file not present it throws fatal error and halts code execution

## types of error in PHP

warning : undefined variable
warning : file does not exist through include
fatal error : file does not exist, terminates script
syntax error : Fatal error : terminates code, result not provided (Parse error)

isset : to check if a variable is set

# PHP Advanced built in functions

## string functions

- `strlen()` - get string length, counts all blank space,

- `strtolower()` - converts string to lowercase

- `strtoupper()` - converts string to uppercase

- `number_format()` - converts numbers to proper number format, arguments - var, digit after zero

- `str_shuffle()` - shuffles string characters

- `str_word_count()` - gets the number of words used for the string

- `rand()` - generates random number from provided range

- `str_replace()` - replaces character string with another string (case-sensitive)

- `str_ireplace()` - replaces character string with another string (case-insensitive)

### encryption and decryption

- `base64_encode()` - for encrypting string in base64 hash

- `base64_decode()` - for decrypting base64 hash to string

- `md5()` - for encrypting string in md5 hash

- `sha1()` - for encrypting string in sha1 hash

### Implode and explode

- `implode()` - convert array into a string with separator

- `explode()` - convert string into an array with separator

## Array functions

- **Numeric array** - an array of values with integers as keys starting from 0.

- **Associative array** - an array of values with user defined keys.

- **Multi-dimentional array** - array of array - an array within array is a multidimensional array.

    ```php
    $nemeric=array("a","b","c","d","e");  index auto generate 0
    echo $nemeric[1];    

    $associate=array("raj"=>"a","2"=>"b","3"=>"c");  // associative array
    echo $associate[raj];

    $multidemetional=array("a","b"=>array("p","q"),"c");  // multidemetional array
    echo $multidemetional[b][1]; 
    ```

- `print_r()` - used for printing array with keys and values,
    ```php
    $arr=array("a","b","c","d","e","f","g","h","i");  
    print_r($arr); // array("0"=>"a","1"=>"b","2"=>"c");
    ```

- `sizeof()` - find total values of arr

- `sort()` - sort arrays in ascending order
- `rsort()` - sort arrays in descending order
- `asort()` - sort associative arrays in ascending order, according to the value
- `ksort()` - sort associative arrays in ascending order, according to the key
- `arsort()` - sort associative arrays in descending order, according to the value
- `krsort()` - sort associative arrays in descending order, according to the key
    ```php
    $b=array("a"=>"banana","b"=>"apple","c"=>"mango"); // value sort accendind order
    asort($b);     // value sort accending order A-Z
    print_r($b);
    arsort($b);     // value sort deccending order Z-A
    print_r($b);

    $a=array("b"=>"ishita","a"=>"raj","c"=>"nagar"); // key sort accendind order
    ksort($a);     // key/index sort accending order a-z
    print_r($a);
    krsort($a);     // key/index sort deccending order z-a
    print_r($a);

    ```

- `array_reverse()` - used to reverse provided array
    ```php
    $a=array("b"=>"CAT","a"=>"TIGER","c"=>"DOG"); // ("c"=>"DOG","a"=>"TIGER","b"=>"CAT");
    print_r(array_reverse($a));  // only reverse 
    ```

- `array_keys()` - used to separate keys from provided array

- `array_values()` - used to separate values from provided array
    ```php
    $a=array("a"=>"KEYUR","b"=>"JIGNESH","C"=>"DEVANSH"); // saprate key and value 1 to make it 2 array
    print_r($a);
    echo "<br>";
    print_r(array_keys($a)); // arr of keys
    echo "<br>";
    print_r(array_values($a)) // arr of values
    ```

- `in_array()` - find if provided element is present in an array returns boolean
    ```php
    $lag=array("Hindi","English","Gujarati"); // find array value by ternary
    echo in_array("Hindi",$lag)?"Match":"Not Match";
    ```

- `array_merge()` - used to merge two arrays in one and removes common elements
    ```php
    $a=array("a"=>"TIGER","b"=>"LION"); // MERGE 2 ARRAY TO 1 ARRAY
    $b=array("a"=>"TIGER","c"=>"DOG");
    print_r(array_merge($a,$b)); // merge 2 arr in one
    ```

- `array_merge_recursive()` - used to merge two arrays in one multidimensional array and keeps common elements
    ```php
    print_r(array_merge_recursive($a,$b)); // merge 2 arr in one
    ```

- `array_combine()` - combine two numeric array in one associative array
    ```php
    $a = array("a","b","c");
    $b = array("PHP","ASP","JAVA");
    print_r(array_combine($a,$b));  // combine two nemeric arr in one associate arr
    ```

- `array_count_values()` - counts the number of times a value is present in array
    ```php
    $a = array("a"=>"KEYUR","b"=>"KEYUR","C"=>"DEVANSH"); // count how many value come  
    print_r(array_count_values($a))
    ```

## Date and Time Functions

- `date()` - `date('d/m/y')` - used for getting the current date from the server

- `date('H:i:s a')` - used to get the current time from the server

- _Uses of letters in date function_

  - d - The day of the month (from 01 to 31)
  - D - A textual representation of a day (three letters)
  - j - The day of the month without leading zeros (1 to 31)
  - l (lowercase 'L') - A full textual representation of a day
  - N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
  - S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
  - w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
  - z - The day of the year (from 0 through 365)
  - W - The ISO-8601 week number of year (weeks starting on Monday)
  - F - A full textual representation of a month (January through December)
  - m - A numeric representation of a month (from 01 to 12)
  - M - A short textual representation of a month (three letters)
  - n - A numeric representation of a month, without leading zeros (1 to 12)
  - t - The number of days in the given month
  - L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
  - o - The ISO-8601 year number
  - Y - A four digit representation of a year
  - y - A two digit representation of a year
  - a - Lowercase am or pm
  - A - Uppercase AM or PM
  - B - Swatch Internet time (000 to 999)
  - g - 12-hour format of an hour (1 to 12)
  - G - 24-hour format of an hour (0 to 23)
  - h - 12-hour format of an hour (01 to 12)
  - H - 24-hour format of an hour (00 to 23)
  - i - Minutes with leading zeros (00 to 59)
  - s - Seconds, with leading zeros (00 to 59)
  - u - Microseconds (added in PHP 5.2.2)
  - e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
  - I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
  - O - Difference to Greenwich time (GMT) in hours (Example: +0100)
  - P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
  - T - Timezone abbreviations (Examples: EST, MDT)
  - Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
  - c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
  - r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
  - U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)

- `date_default_timezone_set('asia/calcutta')` - used to set the default timezone for the server

- `time()` - used to get the current time of the server, also used to add time, minutes, seconds, hours to get a past or future time.

    ```php
    $day=time()+(2*24*60*60);
    echo date('d/m/y',$day);
    echo "<br>";

    $time=time()+(2*60*60);
    echo date('h:i:s a',$time);
    echo "<br>";
    ```

- `mktime()` - also used for adding days, month, year or hours, minutes, seconds

    ```php
    $date=mktime(0,0,0,date("m")+2,date("d")+2,date("y")+4);
    echo $d=date("d/m/y",$date);

    $time=mktime(date("h")+2,date("i")+2,date("s")+4);
    echo $d=date("h:i:s a",$time);
    ```

- `strtotime()` - used for adding days, month, year or hours, minutes, seconds in string form, only one entity at a time

    ```php
    echo date("d-m-y",strtotime('+5 days'));// add week in date by strtotime      
    echo date('h:i:s A',strtotime('+2 hours'));
    ```

## Header function

- `header('location:welcome.php')`
    used for page redirection

- `header("refresh:5;welcome.php")`; used for page redirection after a set amount of seconds

- `header('Content-type')` - Used for providing file download option 
    ```php
    // we will be outputing a document and octect-stream for any file type for download
    header('Content-type:application/octect-stream'); 
    // the file will be sent as an attachment and downloaded with the mentioned file name
    header('Content-Disposition:attachment;filename="mytops1.pdf"'); 
    // we provide full path/ name of original file to readfile function
    readfile('hr_interview_question.pdf');
    ```

- Header function is also used for access control for webpages, e.g.,
    ```php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");

    $json=file_get_contents('https://jsonplaceholder.typicode.com/posts');

    $phparr=json_decode($json); // json econvert to arr

    print_r($phparr);
    ```

- `exit()` - used for stopping code execution, useful for debugging

## Super Global variables

`$GLOBALS` - global variable array
`$_GET` - global variable for receiving values through get request
`$_POST` - global variable for receiving values through post request
`$_REQUEST` - global variable for receiving values through both get and post request
`$_FILES` - global variable for receiving file from client


create an application to enter marks for 3 subjects
get total 
get percentage
get grade

```php
<!DOCTYPE html>
<html lang="en">
<head><title></title>
</head>
<body>
<form>

</form>
<?php
if(isset($_REQUEST['submit']))
{
    // echo $username = $_POST['username']
    if($_FILES['file1']['size'] > 0)
    {
        echo $img = $_FILES['file1']['name'];
        $path = 'img/upload/'.$img;
        $dup_img = $_FILES['files']['tmp_name'];
        move_uploaded_file($dup_img, $path);
    }
}
?>
<body>
```


