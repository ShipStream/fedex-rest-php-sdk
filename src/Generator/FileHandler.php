<?php

namespace ShipStream\FedEx\Generator;

use Crescat\SaloonSdkGenerator\FileHandlers\BasicFileHandler;
use Illuminate\Support\Arr;
use Nette\PhpGenerator\PhpFile;

class FileHandler extends BasicFileHandler
{
    public function requestPath(PhpFile $file): string
    {
        $components = [
            $this->config->outputDir,
            'Requests',
            Arr::first($file->getClasses())->getName(),
        ];

        return $this->buildPath($components);
    }

    public function resourcePath(PhpFile $file): string
    {
        $components = [
            $this->config->outputDir,
            $this->config->fallbackResourceName,
        ];

        return $this->buildPath($components);
    }

    protected function baseOutputPath(PhpFile $file, ?string $subPath = ''): string
    {
        $components = [
            GENERATED_DIR,
            $subPath,
            Arr::first($file->getClasses())->getName(),
        ];

        return $this->buildPath($components);
    }
}
