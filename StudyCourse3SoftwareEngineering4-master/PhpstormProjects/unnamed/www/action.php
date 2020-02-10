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
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Лысенко</div>
<div class='class_1'>Антон</div>
<div class='class_1'>Сергеевич</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">ПИ-13, КНТ(комп. наук и технологий)</marquee></div>
<div class='class_2'>Послания и другие части работы</div>
<div class='class_2'>Антон, 20 лет.</div>
<div class='class_2'>Послания и другие части работы</div>
</body>
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
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Лисенко</div>
<div class='class_1'>Антон</div>
<div class='class_1'>Сергійович</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">ПІ-13, КНТ(комп. наук і технологій)</marquee></div>
<div class='class_2'>Посилання на інші частини роботи</div>
<div class='class_2'>Антон, 20 років.</div>
<div class='class_2'>Посилання на інші частини роботи</div>
</body>
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
<div><img src=\"iam.jpg\" title='фото' alt='фото' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Lysenko</div>
<div class='class_1'>Anton</div>
<div class='class_1'>Sergeevich</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">SE-13,  SE(Software Engineer)</marquee></div>
<div class='class_2'>Message and other parts of work</div>
<div class='class_2'>My name is Anton, i'm 20.</div>
<div class='class_2'>Message and other parts of work</div>
</body>
</html>
";
}