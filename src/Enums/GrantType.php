<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Enums;

enum GrantType: string
{
    case CLIENT_CREDENTIALS = 'client_credentials';
    case CHILD_CREDENTIALS = 'csp_credentials';
    case PROPRIETARY_CHILD_CREDENTIALS = 'client_pc_credentials';
}
