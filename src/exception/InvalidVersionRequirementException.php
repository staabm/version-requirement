<?php declare(strict_types=1);
/*
 * This file is part of sebastian/version-string.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\VersionString;

use RuntimeException;

/**
 * @no-named-arguments
 */
final class InvalidVersionRequirementException extends RuntimeException implements Exception
{
}
