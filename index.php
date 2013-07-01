<?
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

require('lib/Michelf/Markdown.php');
require('lib/mime.php');
use \Michelf\Markdown;

$path = rtrim($_SERVER[REQUEST_URI], '/');
$path = substr($path, 5);
if (!$path) $path = '.';

$type = getBestSupportedMimeType(array('text/html','text/plain'));
$links = @file_get_contents($path.'/links');

$spec = @file_get_contents($path.'/md');
if ($spec == FALSE) {
  header("HTTP/1.1 404 not found");
  echo "not found";
  die;
}

if ($links)
   header('Link: ' . str_replace("\n", " ", $links));

if ($_SERVER['REQUEST_METHOD'] == 'HEAD')
   die;

if ($type == 'text/html') {
  header('Content-type: text/html');
  echo '<base href="http://grimwire.com/rel/">';
  echo Markdown::defaultTransform($spec);
}
else if ($type == 'text/plain') {
  header('Content-type: text/plain');
  echo $spec;
}
else {
  header("HTTP/1.1 406 not acceptable");
  echo "bad accept type";
}
?>