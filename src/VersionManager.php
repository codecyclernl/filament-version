<?php

namespace Codecycler\FilamentVersion;

class VersionManager
{
    private ?string $version = null;

    public function __construct()
    {
        $this->version = config('app.version', '?');
    }

    public function set(?string $version)
    {
        $this->version = $version;

        return $this;
    }

    public function current(): ?string
    {
        return $this->version;
    }
}