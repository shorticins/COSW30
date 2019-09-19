<?php
$numberParagraphs = $_POST['pragraphs'];
$text = $_POST['text'];

print_r($text_explode);
$text_explode = explode(' ', $text);
$shuffled_text = shuffle($text_explode);

foreach($text_explode as $key => $value) {
    
    echo "<p>$key Value: $value</p>";
}

$text_implode = implode(' ', $text_explode);



print_r($shuffled_text);
/*$text = "Many times, readers will get distracted by readable text when looking at the layout of a page. Instead of using filler text that says “Insert content here,” Lorem Ipsum uses a normal distribution of letters, making it resemble standard English.";*/

for ($i = 0; $i < $numberParagraphs; $i++) {
    echo  "<p>$text</p>";
    echo "<p>$text_implode</p>";
}



?>