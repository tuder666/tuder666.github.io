<?php
$mver = 0;
$nver = 12;
$result = 0;
$a = $_POST['radio--1'];
$b = $_POST['radio--2'];
$c = $_POST['radio--3'];
$d = $_POST['radio--4'];
$e = $_POST['radio--5'];
$temp = $_POST['text--1'];
$j = $_POST['radio--6'];
$k = $_POST['radio--7'];
$l = $_POST['radio--8'];
$m = $_POST['radio--9'];
$n = $_POST['radio--10'];
$o = $_POST['radio--11'];
$p = $_POST['radio--12'];
$submit = $_POST['submit'];
if($a=="Да"){$mver++;}else{$mver--;}
if($b=="Да"){$mver++;}else{$mver--;}
if($c=="Да"){$mver++;}else{$mver--;}
if($d=="Нет"){$mver--;}else{if($temp>=37.7){$mver++;}else{$mver--;}}
if($e=="Да"){$mver--;}else{$mver++;}
if($j=="Сухой"){$mver++;}else{$mver--;}
if($k=="Да"){$mver++;}else{$mver--;}
if($l=="Да"){$mver++;}else{$mver--;}
if($m=="Да"){$mver++;}else{$mver--;}
if($n=="Да"){$mver++;}else{$mver--;}
if($o=="Да"){$mver--;}else{$mver++;}
if($p=="Да"){$mver++;}else{$mver--;}

if($submit==true){
//		echo "$a$b$c$d$e$j$k$l$m$n$o$p";
echo "<style>.answer{display: none;} #resulttest{
    position: absolute;
    margin-top: 50px;
    margin-left: 10px;
    width: 99%;
   } #head{opacity: 0;}
   </style>";
$result = round($result = ($mver/$nver)*100,2);
if($result<60){
echo "<div id='resulttest'>Ваш результат: <a>".$result."%</a>";
echo "<a>Скорее всего Вы не заболели вирусом COVID-19. Но если Вас беспокоит боль в груди, то мы советуем обратиться по номерам: <ul><li>Горячая линия по вопросам коронавируса: 8-800-2000-112</li><li>Роспотребнадзор: 8-800-555-49-43</li></ul></ul> Так же советуем Вам посмотреть, чем заняться на карантине. Ссылка в шапке.</a>";
}
if($result>=60){
echo "<div id='resulttest'>Ваш результат: <a>".$result."%</a>";
echo "<a>Большинство симптомов совпадает, но мы не можем утверждать, что вы заболели вирусом COVID-19. Пожалуйста, обратитесь по номерам: <ul><li>Горячая линия по вопросам коронавируса: 8-800-2000-112</li><li>Роспотребнадзор: 8-800-555-49-43</li></ul></ul></a>";
}

if($result>=90){
	echo "<div id='resulttest'>Ваш результат: <a>".$result."%</a>";
echo "<a>Большой шанс, что Вы заболели вирусом COVID-19. Пожалуйста, обратитесь по номерам: <ul><li>Горячая линия по вопросам коронавируса: 8-800-2000-112</li><li>Роспотребнадзор: 8-800-555-49-43</li></ul></ul></a>";
}
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
	<meta charset="UTF-8">
	<title>#ОСТАВАЙСЯДОМА</title>
<style>
	body{
		background: #ddd;
	}
	</style>
</head>
<body>
<form action="" method="POST">
	<h1 id="head" style="padding-left: 30%; width: 50%;">Тест по симптомам</h1>
<div class="answer answer--1">
	<p class="answerdec">1.Посещали ли Вы другие страны в ближайщие две недели?</p>
<a><input name="radio--1" class="radio--1" type="radio" value="Да" required>Да</a>
<a><input name="radio--1" class="radio--1" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">2.В этих странах много зараженных вирусом COVID-19?</p>
<a><input name="radio--2" class="radio--2" type="radio" value="Да" required>Да</a>
<a><input name="radio--2" class="radio--2" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">3.Встречались ли вы с людьми, приехавшими из заграницы в ближайшие две недели</p>
<a><input name="radio--3" class="radio--3" type="radio" value="Да" required>Да</a>
<a><input name="radio--3" class="radio--3" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">4.У вас есть повышенная температура?</p>
<input name="text--1" class="radio--4" type="text" placeholder="Если да, то сколько?" >
<a><input name="radio--4" class="radio--4" type="radio" value="Нет">Нет</a>
<p class="answerdec">5.Есть ли у Вас насморк?</p> 
<a><input name="radio--5" class="radio--5" type="radio" value="Да" required>Да</a>
<a><input name="radio--5" class="radio--5" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">6.Есть ли у Вас кашель? Если да, то какой?</p>
<a><input name="radio--6" class="radio--6" type="radio" value="Сухой" required>Сухой</a>
<a><input name="radio--6" class="radio--6" type="radio" value="Влажный" required>Влажный</a>
<a><input name="radio--6" class="radio--6" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">7.Есть ли у Вас затруднения в дыхании?</p>
<a><input name="radio--7" class="radio--7" type="radio" value="Да" required>Да</a>
<a><input name="radio--7" class="radio--7" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">8.Есть ли у Вас боль в горле</p>
<a><input name="radio--8" class="radio--8" type="radio" value="Да" required>Да</a>
<a><input name="radio--8" class="radio--8" type="radio" value="Нет" required>Нет <span class="ok"></span></a>
<p class="answerdec">9.Чувствуется ли дискомфорт в груди?</p>
<a><input name="radio--9" class="radio--9" type="radio" value="Да" required>Да</a>
<a><input name="radio--9" class="radio--9" type="radio" value="Нет" required>Нет <span class="ok"></span></a> 
<p class="answerdec">10.Есть ли у Вас боль в мышцах?</p>
<a><input name="radio--10" class="radio--10" type="radio" value="Да" required>Да</a>
<a><input name="radio--10" class="radio--10" type="radio" value="Нет" required>Нет <span class="ok"></span></a> 
<p class="answerdec">11.Есть ли у Вас панос и рвота</p>
<a><input name="radio--11" class="radio--11" type="radio" value="Да" required>Да</a>
<a><input name="radio--11" class="radio--11" type="radio" value="Нет" required>Нет <span class="ok"></span></a> 
<p class="answerdec">12.Посещали ли Вы людные места в ближайщие две недели?</p>
<a><input name="radio--12" class="radio--12" type="radio" value="Да" required>Да</a>
<a><input name="radio--12" class="radio--12" type="radio" value="Нет" required>Нет <span class="ok"></span></a><br>
<input type="submit" name="submit">
</form>
</body>
</html>