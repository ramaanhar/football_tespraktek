<?php

namespace App\Models;

use CodeIgniter\Model;

class GameModel extends Model
{
    protected $table = "game";
    protected $primaryKey = "id";
    protected $allowedFields = ["mdate", "stadium", "team1", "team2"];
}
