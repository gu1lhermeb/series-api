<?php

namespace App\Http\Controllers\Serie;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Serie\PostStoreSerieRequest;
use App\Http\Requests\Serie\PutUpdateSerieRequest;
use App\Services\Serie\SerieService;

class SerieController extends Controller
{
    protected $serieService;

    public function __construct(SerieService $serieService)
    {
        $this->serieService = $serieService;
    }
    public function index()
    {
        try {
            $series = $this->serieService->index();
            return response()->json($series, 200);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function showById(int $id)
    {
        try {
            $serie = $this->serieService->getById($id);
            return response()->json($serie, 200);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function store(PostStoreSerieRequest $request)
    {
        try {
            $data = $request->validated();
            $serie = $this->serieService->store($data);
            return response()->json($serie, 201);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function update(int $id, PutUpdateSerieRequest $request)
    {
        try {
            $data = $request->validated();
            $serie = $this->serieService->update($id, $data);
            return response()->json($serie, 200);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy(int $id)
    {
        try {
            $serie = $this->serieService->destroy($id);
            return response()->json($serie, 200);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
