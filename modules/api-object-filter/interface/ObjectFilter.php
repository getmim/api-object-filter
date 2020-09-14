<?php
/**
 * ObjectFilter
 * @package api-object-filter
 * @version 0.0.1
 */

namespace ApiObjectFilter\Iface;


interface ObjectFilter
{
	static function filter(array $cond): ?array;
	static function lastError(): ?string;
}