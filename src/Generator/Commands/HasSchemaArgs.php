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

        $availableSchemaCodes = [];
        $apiData = json_decode(file_get_contents(Schema::API_DATA_FILE), true);
        foreach ($apiData as $code) {
            $availableSchemaCodes[] = $code;
        }
        $availableSchemaCodes = array_unique($availableSchemaCodes);

        $this->setDefinition([
            new InputOption(
                'schema',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the schemas to generate, based on the schema codes in resources/apis.json. If this option is not passed, all schemas will be generated.',
                suggestedValues: $availableSchemaCodes,
            ),
            new InputOption(
                'version',
                mode: InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                description: 'A list of the versions of the schema(s to generate, based on the schema version codes in resources/apis.json. If this option is not passed, all schemas versions will be generated.',
            ),
        ]);
    }

    /**
     * Retrieve metadata about the schemas matching the given input options.
     *
     * @return array The filtered categories and names.
     */
    protected static function filterSchemas(InputInterface $input): array
    {
        $categories = $input->getOption('category');
        $schemas = $input->getOption('schema');

        return Schema::where(
            is_string($categories) ? [$categories] : $categories,
            is_string($schemas) ? [$schemas] : $schemas,
        );
    }
}
