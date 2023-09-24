<?php
function getCustomDateAndTime()
{
    // Intenta establecer la localización a Español (Ecuador)
    if (setlocale(LC_ALL, ['es_EC.UTF-8', 'es_EC', 'Spanish_Ecuador']) !== false) {
        // Utiliza strftime() para obtener la fecha y hora en el formato localizado
        $date = strftime("%d/%m/%Y");
        $datetime = strftime("%d/%m/%Y %H:%M");
    } else {
        // Utiliza date() como alternativa si la localización no se puede establecer
        $date = date("d/m/Y");
        $datetime = date("d/m/Y H:i");
    }

    return [
        'date' => $date,
        'datetime' => $datetime
    ];
}
