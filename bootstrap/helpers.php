<?php
function test_helper()
{
    return "ok";
}

function route_class()
{
    return str_replace('.', '_', Route::currentRouteName());
}