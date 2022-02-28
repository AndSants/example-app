<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SelectOption extends Model
{
    use HasFactory;
    use SoftDeletes;    //trait

    //The table associated with the model.
    protected $table = 'select_options';

    //The primary key associated with the table.
    protected $primaryKey = 'id';

    /*
      Autoriza que os parametros passados por array
      são adicionados como atributo do próprio objeto
      para que seja persistido seu valor no banco
    */
    protected $fillable = ['name','option'];
}
