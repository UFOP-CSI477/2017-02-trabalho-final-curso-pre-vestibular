<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public $table = 'aluno';
    protected  $primaryKey = 'id_aluno';
}