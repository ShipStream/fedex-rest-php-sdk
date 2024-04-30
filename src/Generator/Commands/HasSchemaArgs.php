<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Commands;

use ShipStream\FedEx\Generator\Schema;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

trait HasSchemaArgs
{
    /**
     * The schema definitions matching the input options given to the command.
     */
    protected array $schemas = [];

    /**
     * Parse the command line options for a Symfony command that can operate on
     * a subset of schemas, filtered by category or schema name.
     */
    protected function configure(): void
    {
        parent::configure();

        $apiData = json_decode(file_get_contents(Schema::API_DATA_FILE), true);
        $availableSchemaCodes = array_unique(array_keys($apiData));

        $this->setDefinition([
            new InputOption(
                'schema',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the schemas to generate, based on the schema codes in resources/apis.json. If this option is not passed, all schemas will be generated.',
                suggestedValues: $availableSchemaCodes,
            ),
            new InputOption(
                'schema-version',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the versions of the schema(s to generate, based on the schema version codes in resources/apis.json. If this option is not passed, all schemas versions will be generated.',
            ),
        ]);
    }

    /**
     * Retrieve metadata about the schemas matching the given input options.
     *
     * @return array The filtered API names and versions.
     */
    protected static function filterSchemas(InputInterface $input): array
    {
        $schemas = $input->getOption('schema');
        $versions = $input->getOption('schema-version');

        return Schema::where(
            is_string($schemas) ? [$schemas] : $schemas,
            is_string($versions) ? [$versions] : $versions,
        );
    }
}
