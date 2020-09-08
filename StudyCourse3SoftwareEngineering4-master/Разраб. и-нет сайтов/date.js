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
