<?php

use Carbon\Carbon;

function dateBr($data)
{
    return (new Carbon($data))->format('d/m/Y');
}

function monthAndYear($data)
{
    return (new Carbon($data))->format('m/Y');
}

function monthAndYearInPt($data)
{
    setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

    $data = new Carbon($data);

    return mb_strtoupper($data->formatLocalized('%B/%Y'));
}

function setActive($value)
{
    if($value == 1)
    {
        return 'Ativo';
    }
    else
    {
        return 'Inativo';
    }
}

function setHighlight($value)
{
    if($value == 1)
    {
        return 'Sim';
    }
    else
    {
        return 'Não';
    }
}

function getFilename($file)
{
    if(!$file)
    {
        return 'Nenhum arquivo cadastrado!';
    }

    $file =  explode('/', $file);

    return $file[1];
}

function contentAbbreviation($content)
{
   return mb_strimwidth($content, 0, 150, "...");
}
