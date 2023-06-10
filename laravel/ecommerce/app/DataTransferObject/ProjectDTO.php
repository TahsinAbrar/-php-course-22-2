<?php

namespace App\DataTransferObject;

class ProjectDTO
{
    public function __construct(
        public string $title,
        public string $description
    )
    {
        //
    }

    public function toArray()
    {
        return (array) $this;
    }
}