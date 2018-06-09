<?php

echo json_encode(array_merge([
    "retorno_servico" => "retorno",
    "servidor" => "app2"
], $_REQUEST));