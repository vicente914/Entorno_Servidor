<?php
    function obtenerFechaCastellano(){
        date_default_timezone_set('Europe/Madrid');
        
        $dias = [
            "Monday" => "Lunes",
            "Tuesday" => "Martes",
            "Wednesday" => "Miercoles",
            "Thursday" => "Jueves",
            "Friday" => "Viernes",
            "Saturday" => "Sabado",
            "Sunday" => "Domingo"
        ];

        $meses = [
            "January" => "Enero",
            "February" => "Febrero",
            "March" => "Marzo",
            "April" => "Abril",
            "May" => "Mayo",
            "June" => "Junio",
            "July" => "Julio",
            "August" => "Agosto",
            "September" => "Septiembre",
            "October" => "Octubre",
            "November" => "Noviembre",
            "Diciembre" => "Diciembre"
        ];

        $dia = $dias[date("l")];
        $numeroDia = date("d");
        $mes = $meses[date("F")];
        $año = date("Y");

        return "$dia, $numeroDia de $mes de $año";
    }

?>