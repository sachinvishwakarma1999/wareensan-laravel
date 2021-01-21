<?php

if (! function_exists('format_number')) {
    function format_number($number, $number_before = 2, $symbol_before = '0') {
        return str_pad($number, $number_before, $symbol_before, STR_PAD_LEFT);
    }
}
