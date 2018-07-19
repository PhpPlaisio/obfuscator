<?php
declare(strict_types=1);

namespace SetBased\Abc\Obfuscator;

/**
 * Interface for defining classes for obfuscating and un-obfuscating database IDs.
 */
interface Obfuscator
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the original ID of an obfuscated database ID.
   *
   * @param string|null $code The obfuscated database ID.
   *
   * @return int|null The database ID.
   */
  public function decode(?string $code): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the obfuscated value of a database ID.
   *
   * @param int|null $id The database ID.
   *
   * @return string|null The obfuscated database ID.
   */
  public function encode(?int $id): ?string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
