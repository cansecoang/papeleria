<?php

function urlEs($valor) {
    return $_SERVER['REQUEST_URI'] == $valor;
}