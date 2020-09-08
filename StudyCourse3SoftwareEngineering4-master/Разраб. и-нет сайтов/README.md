Index.html
<!DOCTYPE html>
<html>
<head>
    <title>Автобиография</title>
    <meta http-equiv="Content-type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="date.js">
</script>
<form action="action.php" method="post">
    <div class="class">
        <label>
            <input type="submit" name="send_ru" value="Русский">
        </label>
        <label>
            <input type="submit" name="send_ua" value="Українська">
        </label>
        <label>
            <input type="submit" name="send_en" value="English">
        </label>
    </div>
</form>
</body>
</html>
Date.js
function isDate()
{
    var strDay;
    var strMonth;
    var ourDate = new Date();
    var day = ourDate.getDay();
    var month = ourDate.getMonth();
    var year = ourDate.getFullYear();
    var date = ourDate.getDate();
    var hours = ourDate.getHours();
    var minutes = ourDate.getMinutes();
    var seconds = ourDate.getSeconds();
    if (day == 0)
        strDay = "Воскресенье";
    else if (day == 1)
        strDay = "Понедельник";
    else if (day == 2)
        strDay = "Вторник";
    else if (day == 3)
        strDay = "Среда";
    else if (day == 4)
        strDay = "Четверг";
    else if (day == 5)
        strDay = "Пятница";
    else if (day == 6)
        strDay = "Суббота";
    if (month == 0)
        strMonth = "Январь";
    else if (month == 1)
        strMonth = "Февраль";
    else if (month == 2)
        strMonth = "Март";
    else if (month == 3)
        strMonth = "Апрель";
    else if (month == 4)
        strMonth = "Май";
    else if (month == 5)
        strMonth = "Июнь";
    else if (month == 6)
        strMonth = "Июль";
    else if (month == 7)
        strMonth = "Август";
    else if (month == 8)
        strMonth = "Сентябрь";
    else if (month == 9)
        strMonth = "Октябрь";
    else if (month == 10)
        strMonth = "Ноябрь";
    else if (month == 11)
        strMonth = "Декабрь";
    alert(strDay + ' ' + date + ' ' + strMonth + ' ' + year + ' ' + hours + '-' + minutes + '-' + seconds);
}
isDate();
action.php

<?php
if($_POST["send_ru"])
{

    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>Автобиография</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<script src='date.js'></script>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"Русский\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"Українська\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px' onmouseout=\"this.src='iam.jpg'\" onmouseover=\"this.src='IMG_3040.JPG'\"></div>
<div><img src=\"mat_1.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Лысенко</div>
<div class='class_1'>Антон</div>
<div class='class_1'>Сергеевич</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">ПИ-13, КНТ(комп. наук и технологий)</marquee></div>
<div class='class_2'>Послания и другие части работы</div>
<div class='class_2'>Антон, 20 лет.</div>
<div class='class_2'>Послания и другие части работы</div>
</body>
<form  name=\"form\" onsubmit=\"sendForm(this); return false\">
    <div>
        <label><input type=\"text\" name=\"from\" placeholder=\"От кого\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><input type=\"text\" name=\"who\" placeholder=\"Кому\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><textarea name=\"message\" placeholder=\"Сообщение\" cols=\"22\"></textarea></label>
    </div>
    <div>
        <label><input type=\"reset\" value=\"Очистить\"></label>
        <label><input type=\"submit\" value=\"Отправить\"></label>
    </div>
</form>
<script>
    function sendForm(f)
    {
        f.submit();
         alert(f.from.value);
         alert(f.who.value);
         alert(f.message.value);
    }
</script>
</html>
 ";
}
if($_POST["send_ua"])
{
    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>Автобіографія</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<script src='date.js'></script>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"Русский\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"Українська\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px' onmouseout=\"this.src='iam.jpg'\" onmouseover=\"this.src='IMG_3040.JPG'\"></div>
<div><img src=\"mat_1.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Лисенко</div>
<div class='class_1'>Антон</div>
<div class='class_1'>Сергійович</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">ПІ-13, КНТ(комп. наук і технологій)</marquee></div>
<div class='class_2'>Посилання на інші частини роботи</div>
<div class='class_2'>Антон, 20 років.</div>
<div class='class_2'>Посилання на інші частини роботи</div>
</body>
<form  name=\"form\" onsubmit=\"sendForm(this); return false\">
    <div>
        <label><input type=\"text\" name=\"from\" placeholder=\"От кого\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><input type=\"text\" name=\"who\" placeholder=\"Кому\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><textarea name=\"message\" placeholder=\"Сообщение\" cols=\"22\"></textarea></label>
    </div>
    <div>
        <label><input type=\"reset\" value=\"Очистить\"></label>
        <label><input type=\"submit\" value=\"Отправить\"></label>
    </div>
</form>
<script>
    function sendForm(f)
    {
        f.submit();
         alert(f.from.value);
         alert(f.who.value);
         alert(f.message.value);
    }
</script>
</html>
";
}
if($_POST["send_en"])
{
    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>Autobiography</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<script src='date.js'></script>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"Русский\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"Українська\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px' onmouseout=\"this.src='iam.jpg'\" onmouseover=\"this.src='IMG_3040.JPG'\"></div>
<div><img src=\"mat_1.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Lysenko</div>
<div class='class_1'>Anton</div>
<div class='class_1'>Sergeevich</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">SE-13,  SE(Software Engineer)</marquee></div>
<div class='class_2'>Message and other parts of work</div>
<div class='class_2'>My name is Anton, i'm 20.</div>
<div class='class_2'>Message and other parts of work</div>
</body>
<form  name=\"form\" onsubmit=\"sendForm(this); return false\">
    <div>
        <label><input type=\"text\" name=\"from\" placeholder=\"От кого\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><input type=\"text\" name=\"who\" placeholder=\"Кому\" autocomplete=\"off\"></label>
    </div>
    <div>
        <label><textarea name=\"message\" placeholder=\"Сообщение\" cols=\"22\"></textarea></label>
    </div>
    <div>
        <label><input type=\"reset\" value=\"Очистить\"></label>
        <label><input type=\"submit\" value=\"Отправить\"></label>
    </div>
</form>
<script>
    function sendForm(f)
    {
        f.submit();
         alert(f.from.value);
         alert(f.who.value);
         alert(f.message.value);
    }
</script>
</html>
";
}
Style.css
.class
{
 margin-left: 45%;
}
.class_1
{
    text-align: right;
}
.class_2
{
    text-align: center;
}
