<?php
function dd($data) {
    echo '<pre>';
    echo '<style> body { background: black; color: white; font-weight: bold} </style>';
    var_dump($data);die;
}