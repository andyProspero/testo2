<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// подключаем bootstrap (v. 5.0.0)
use Bitrix\Main\UI\Extension;
Extension::load('ui.bootstrap4');

$APPLICATION->SetTitle("Testovoe 2");

// testovoe 2
/*
    По условию задачи даны три массива: города, участники и мероприятия.
    Нужно вывести участников мероприятия на текущую дату в определённом городе.

    Решение:
    1. Если мы собрали пользователей адекватно, с привязкой пользователя к городу и мероприятию,
    то обходим массив мероприятий и при совпадении значения даты с текущей, выводим элемент как заголовок.
    Значения собираем в массив $events[].

    foreach($meropriyatiya as $event)
    {
        if($event['DATE'] == date[d.m.y])
        {
            $events[] = $event;
        }
    }

    2. Обходим массив $events и внутри него вызываем массив пользователей, проверяя привязку и при совпадении
    привязываем пользователя в массив мероприятия.

    foreach($events as $key=>$event)
    {
        foreach($users as $user)
        {
            if($user['EVENT'] == $event['NAME'])
            {
                $events[$key]['USER'][] = $user;
            }
        }
    }

    3. Получаем нормальный массив $events с пользователями внутри, который мы можем передать,
    обработать или вывести куда-либо.

    По сути это всё решение.
*/


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");