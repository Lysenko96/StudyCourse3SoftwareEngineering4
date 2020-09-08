

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
