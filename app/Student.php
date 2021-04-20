<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Student extends Model
{   
    use AutoNumberTrait;
    protected $fillable = [
        'nama','jk','alamat','agama','asal_sekolah','minat_jurusan'
    ];
    protected $table='student';
    
    public function getAutoNumberOptions()
    {
        return [
            'no_reg' => [
                'format' => 'SB?',
                'length' => 4
            ]
        ];
    }
}
