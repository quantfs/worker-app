<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {
        $workers = Worker::all();

        return response()->json([
            'data' => WorkerResource::collection($workers),
        ]);
    }

    public function show(Worker $worker) {
        return response()->json([
            WorkerResource::make($worker)->resolve(),
        ]);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $worker = Worker::create($data);

        return WorkerResource::make($worker)->resolve();
    }

    public function update(Worker $worker, UpdateRequest $request) {
        $data = $request->validated();
        $data['is_married'] = $data['is_married'] === "true";
        $worker->update($data);
        $worker->fresh();

        return WorkerResource::make($worker)->resolve();
    }

    public function destroy(Worker $worker) {
        $worker->delete();

        $workers = Worker::all();
        return response()->json([
            'data' => WorkerResource::collection($workers),
        ]);
    }
}
