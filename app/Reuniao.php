<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $fillable = ['nome', 'descricao', 'data'];
}