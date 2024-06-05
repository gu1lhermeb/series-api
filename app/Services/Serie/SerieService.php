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

    public function getById(int $id)
    {
        try {
            return $this->serieRepository->getById($id);
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function store(array $data)
    {
        try {
            DB::beginTransaction();
            $serie = $this->serieRepository->store($data);
            DB::commit();
            return $serie;
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }

    public function update(int $id, array $data)
    {
        try {
            DB::beginTransaction();
            $serie = $this->serieRepository->updateById($data, $id);
            DB::commit();
            return $serie;
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }

    public function destroy(int $id)
    {
        try {
            DB::beginTransaction();
            $serie = $this->serieRepository->deleteById($id);
            DB::commit();
            return $serie;
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
