<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = "teams";

    public function players() {
        return $this->hasMany('App\Players', 'id_team');
    }

}

?>
