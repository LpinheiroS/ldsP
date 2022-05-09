<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $fillable = ['nome', 'data', 'descricao'];
  //  use HasFactory;
}
