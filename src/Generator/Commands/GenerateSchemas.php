<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Commands;

use ShipStream\FedEx\Generator\Schema;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'schema:generate',
    description: 'Generate code from schemas'
)]
class GenerateSchemas extends AbstractSchemasCommand
{
    use HasSchemaArgs;

    protected function handleSchema(Schema $schema): int
    {
        $schema->generate();

        return 0;
    }
}
