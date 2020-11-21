<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = [
        'userid', 'shopid', 'catid', 'genderid',
        'title', 'titleru', 'titleen','titlech','titlekz', 'titlekg', 'titletr', 'titletc', 
        'description', 'descriptionu','descriptionen', 'descriptionch', 'descriptionkz', 'descriptionkg','descriptiontr', 'descriptiontc',
        'avgstarscount', 'commentcount','ordercount', 'price',
        'pricemany', 'additionaldiscountpercent','additionaldiscountpercentcount', 'totalcount',
        'instagramlink','additionaldiscountpercentcount', 'totalcount'

    ];



    public static function add($fields)
    {
        $good = new static;
        $good->fill($fields);
        $good->save();

        return  $good;
    }


}


