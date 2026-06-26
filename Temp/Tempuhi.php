<?php
$celsius = 0; 

echo "--- ตารางแปลงค่าองศาเซลเซียส เป็น ฟาเรนไฮต์ ---\n";

while ($celsius <= 50) { 
    $fahrenheit = ($celsius * 1.8) + 32; 
    
    echo "Celsius: {$celsius}°C  ->  Fahrenheit: {$fahrenheit}°F\n";
    
    $celsius += 10; 
}
?>