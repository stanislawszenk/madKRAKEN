<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $table = "team_players";

    public function team() {
        return $this->hasOne('App\Teams', 'id_team');
    }

}

?>
