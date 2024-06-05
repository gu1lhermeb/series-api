<?php

namespace App\Services\Serie;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Repositories\Serie\SerieRepository;

class SerieService
{
    protected $serieRepository;

    public function __construct(SerieRepository $serieRepository)
    {
        $this->serieRepository = $serieRepository;
    }

    public function index()
    {
        try {
            $series = $this->serieRepository->all();
            return $series;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function store(array $data)
    {
        try {
            $serie = $this->serieRepository->store($data);
            return $serie;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function update(int $id, array $data)
    {
        try {
            $serie = $this->serieRepository->updateById($data, $id);
            return $serie;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}
