<?php

namespace SetBased\Abc\Obfuscator;

/**
 * An interface for defining factories for Obfuscator objects.
 *
 * Beside creating objects the interface specifies that the factory must be able to obfuscate and de-obfuscate database
 * ID by itself too.
 */
interface ObfuscatorFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * De-obfuscates an obfuscated database ID.
   *
   * @param string|null $code  The obfuscated database ID.
   * @param string      $alias The alias for table from which the ID originates.
   *
   * @return int The (de-obfuscated) database ID.
   */
  public static function decode(?string $code, string $alias): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Obfuscates a database ID.
   *
   * @param int|null $id    The database ID.
   * @param string   $alias The alias for table from which the ID originates.
   *
   * @return string The obfuscated database ID.
   */
  public static function encode(?int $id, string $alias): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns an Obfuscator for obfuscating and de-obfuscating database IDs.
   *
   * @param string $alias The alias for table for which the Obfuscator must obfuscate and de-obfuscate IDs.
   *
   * @return Obfuscator
   */
  public static function getObfuscator(string $alias): Obfuscator;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
