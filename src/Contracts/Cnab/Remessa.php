<?php
namespace Brunopignatari\LaravelBoleto\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}
