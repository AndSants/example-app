<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAccess extends Model
{
    use HasFactory;

    //The database connection that should be used by the model.
    //protected $connection = 'sqlite';

    //The table associated with the model.
    protected $table = 'log_accesses';

    //The primary key associated with the table.
    protected $primaryKey = 'id';

    /*
      Autoriza que os parametros passados por array
      são adicionados como atributo do próprio objeto
      para que seja persistido seu valor no banco
    */
    protected $fillable = ['log'];
}
