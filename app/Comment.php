<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text', 'textru', 'texten', 'userid'
    ];

    public static function add($fields)
    {
        $comment = new static;
        $comment->fill($fields);
        $comment->save();

        return $comment;
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();

        return $this;
    }
}
