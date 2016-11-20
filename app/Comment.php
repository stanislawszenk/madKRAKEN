<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    public function posts()
    {
        return $this->belongsTo('App\Posts');
    }
}

?>
