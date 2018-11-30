<?php
function test_helper()
{
    return "ok";
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}