<?php


/**
 * getMesAno
 *
 * @param  mixed $date 2024-02-01
 * @return void
 */
function getMesAno($date) {

    $meses = array(
        1 => 'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    );

    $str= $meses[date('n', strtotime($date))] . ' de ' . date('Y', strtotime($date)) ;
    return $str;
}