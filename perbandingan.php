<?php 
echo "1. 17 < 19 = "; var_dump(17<19); // bool(true)  
echo "<br />";   

echo "2. 18 < 17 = "; var_dump(18<17); // bool(false) 
echo "<br />";   

echo "3. 14 <= 14 = "; var_dump(14<=14); // bool(true)  
echo "<br />";   

echo "4. 10 <> '10' = "; var_dump(10<>'10'); // bool(false)  
echo "<br />";   

echo "5. 11 == '11' = "; var_dump(11=='11'); // bool(true)  
echo "<br />";   

echo "6. 20 === '20' = "; var_dump(20==='20'); // bool(false)  
echo "<br />";   

echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2'); // bool(true)  
echo "<br />";   

echo "8. 'praktikum' == 0 = "; var_dump('praktikum'==0); // bool(true)  
echo "<br />"; 
?> 