<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public $timestamps = false;
    use HasFactory;


    protected $fillable = [
        'NOP_SPPT',
        'NM_WP_SPPT',
        'JALAN_OP',
        'JLN_WP_SPPT',
        'NM_KELURAHAN',
        'NM_KECAMATAN',
        'THN_PAJAK_SPPT',
        'NILAI_SPPT',
    ];
}
