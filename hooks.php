<?php
$str='leads	{"note":[{"note":{"date_create":"\'2019-02-12 20:24:44\'",
"created_by":"3238405","timestamp_x":"\'2019-02-12 20:24:44\'",
"text":"\'Добавлен новый объект\'","note_type":"1","element_type":"2","main_user_id":"3238405","element_id":"7135917",
"account_id":"24414061","modified_by":"3238405"}}]}';

$str1= 'account	{"subdomain":"fedot79","id":"24414061","_links":{"self":"https://fedot79.amocrm.ru"}}';


$fd = fopen("text.txt", 'a+') or die("не удалось открыть файл");

fwrite($fd, $str);
fwrite($fd, $str1);
fclose($fd);