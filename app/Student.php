<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['kode','nama','jenis_kelamin','agama','tmpt_lahir','tgl_lahir','alamat'];
}
