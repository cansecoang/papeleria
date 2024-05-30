<?php
function dd($var){
echo "<pre>";
var_dump($var);
echo "</pre>";
die();
};

// if($_SERVER['REQUEST_URI'] === "/") {
//     echo 'bg-gray-900 text-white';
// } else {
//     echo 'text-gray-300 hover:bg-gray-700 hover:text-white';
// };
function esUri($pagina) {

     return $_SERVER['REQUEST_URI'] === $pagina;

};