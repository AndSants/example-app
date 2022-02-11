<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;     //trait
    use SoftDeletes;    //trait

    //The database connection that should be used by the model.
    protected $connection = 'sqlite';
    //The table associated with the model.
    protected $table = 'providers';
    //The primary key associated with the table.
    protected $primaryKey = 'id';
    /*
      Autoriza que os parametros passados por array
      são adicionados como atributo do próprio objeto
      para que seja persistido seu valor no banco
    */
    protected $fillable = ['name'];
}
