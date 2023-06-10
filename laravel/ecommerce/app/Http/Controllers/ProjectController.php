<?php

namespace App\Http\Controllers;

use App\DataTransferObject\ProjectDTO;
use App\Models\Project;
use App\Services\V1\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(private ProjectService $service)
    {}

    public function index()
    {
        return response()->json([
            'status' => 'SUCCESS',
            'data' => Project::all()
        ]);
    }

    public function store()
    {
        // validate
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        // execution
        // $project = $this->service->add(request(['title', 'description']));
        $dto = new ProjectDTO(
            title: request('title'),
            description: request('description')
        );

        // $project = $this->service->add(request(['title', 'description']));
        $project = $this->service->add($dto);

        // response
        return response()->json([
            'data' => $project,
            'status' => 'SUCCESS'
        ], 201);
    }
}
