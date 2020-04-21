<?php
declare(strict_types=1);

namespace Plaisio\Obfuscator\Exception;

/**
 * Exception thrown when an obfuscated database ID can not be de-obfuscated. I.e. the given value to decode is not a
 * valid obfuscated database ID.
 */
class DecodeException extends \RuntimeException
{
  // Nothing to implement.
}

//----------------------------------------------------------------------------------------------------------------------
