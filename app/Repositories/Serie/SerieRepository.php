<?php

namespace App\Repositories\Serie;

use App\Models\Serie;
use App\Repositories\BaseRepository;

class SerieRepository extends BaseRepository
{
    protected $model; 

    public function __construct(Serie $serieModel)
    {
        $this->model = $serieModel;
    }

}
