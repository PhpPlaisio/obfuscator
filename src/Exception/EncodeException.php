<?php
declare(strict_types=1);

namespace Plaisio\Obfuscator\Exception;

/**
 * Exception thrown when a database ID can not be obfuscated. I.e. the given value to encode is not a valid database ID.
 */
class EncodeException extends \RuntimeException
{
  // Nothing to implement.
}

//----------------------------------------------------------------------------------------------------------------------
