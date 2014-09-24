<?php

function test_css($filename) {
$file_to_test = $filename;
$content = file_get_contents($file_to_test);
$pattern = "/[.][a-zA-Z].*[ ]?[{]|\/\*[Tt][Ii][Tt][Ll][Ee][:][A-Za-z !?¿\"'=()\[\]\{\}#·$~%,.-;:_+\/]+\*\//";
preg_match_all($pattern, $content, $matches);

function startsWith($haystack, $needle){return $needle === "" || strpos($haystack, $needle) === 0;}
function endsWith($haystack, $needle) {return $needle === "" || substr($haystack, -strlen($needle)) === $needle;}

echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<meta charset="UTF-8" />'."\n";
echo '<link href="'.$file_to_test.'" rel="stylesheet" type="text/css" />'."\n";
echo "</head>"."\n";
echo "<body>"."\n";



echo '<table style="width:100%;">'."\n";

for($i=0; $i<sizeof($matches[0]); $i++) {
	$match = $matches[0][$i];
	$isTitle = $match[0] == "/";
	$match = preg_replace("/^[.]/","", $match);
	$match = preg_replace("/[ ]*[{]$/","", $match);
	if(!$isTitle) {
		echo '<tr style="width:100%;">'."\n";
		echo '<td style="width: 70%;">'."\n";
		echo ".".$match;
		echo "</td>"."\n";
		echo '<td style="width: 30%;" class="'.$match.'">'."\n";
		echo 'This is a request';
		echo "</td>"."\n";
		echo "</tr>"."\n";
	} else {
		$match = preg_replace("/^\/\*[Tt][Ii][Tt][Ll][Ee][:]/","",$match);
		$match = preg_replace("/\*\/$/","",$match);
		echo '<tr style="width:100%;">'."\n";
		echo '<td style="width:100%; text-align:center;" colspan="2">'."\n";
		echo $match;
		echo "</td>"."\n";
		echo "</tr>"."\n";
	}
}
echo "</table>"."\n";
echo "</body>";
echo "</html>";

}

test_css("test.css");
?>
