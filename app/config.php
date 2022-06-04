<?php

function activo($ruta)
{
    return request()->routeIs($ruta) ? 'activo' : '';
}
