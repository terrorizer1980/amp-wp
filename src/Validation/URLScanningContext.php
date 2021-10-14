<?php
/**
 * Provides settings to be used in site scanning.
 *
 * @package AMP
 * @since 2.1
 */

namespace AmpProject\AmpWP\Validation;

/**
 * URLScanningContext class.
 *
 * @since 2.1
 *
 * @internal
 */
final class URLScanningContext {

	/**
	 * The default number of URLs per type to return.
	 *
	 * @var int
	 */
	const DEFAULT_LIMIT_PER_TYPE = 1;

	/**
	 * An allowlist of conditionals to use for querying URLs.
	 *
	 * Usually, this class will query all of the templates that don't have AMP disabled. This allows inclusion based on only these conditionals.
	 *
	 * @var string[]
	 */
	private $include_conditionals;

	/**
	 * The maximum number of URLs to provide for each content type.
	 *
	 * Templates are each a separate type, like those for is_category() and is_tag(), and each post type is a type.
	 *
	 * @var int
	 */
	private $limit_per_type;

	/**
	 * Class constructor.
	 *
	 * @param int   $limit_per_type       The maximum number of URLs to validate for each type.
	 * @param array $include_conditionals An allowlist of conditionals to use for validation.
	 */
	public function __construct(
		$limit_per_type = self::DEFAULT_LIMIT_PER_TYPE,
		$include_conditionals = []
	) {
		$this->limit_per_type       = $limit_per_type;
		$this->include_conditionals = $include_conditionals;
	}

	/**
	 * Provides the limit_per_type setting.
	 *
	 * @return int
	 */
	public function get_limit_per_type() {
		return $this->limit_per_type;
	}

	/**
	 * Provides the include_conditionals setting.
	 *
	 * @return string[]
	 */
	public function get_include_conditionals() {
		return $this->include_conditionals;
	}
}
