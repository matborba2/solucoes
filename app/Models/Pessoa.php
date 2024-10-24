<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function processo(){
        return $this->belongsTo(Processo::class, 'processo_id');
    }}
