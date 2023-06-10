<?php

namespace App\Services\V1;

use App\DataTransferObject\ProjectDTO;
use App\Models\Project;

class ProjectService
{
    public function __construct(private Project $project)
    {}

    public function add(ProjectDTO $dto): Project
    {
        return $this->project->create($dto->toArray());
    }
}
