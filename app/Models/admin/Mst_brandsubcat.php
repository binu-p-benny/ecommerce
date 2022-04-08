<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mst_Brandsubcat extends Model
{
    use SoftDeletes;


    protected $table = "mst_brandsubcat_table";
    protected $primaryKey = "id";

    protected $fillable = [
        'brand_id',
        'item_category_id',
        'item_sub_category_id',
        'iltsc_id',
        ];
}
