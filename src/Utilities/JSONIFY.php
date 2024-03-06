<?php

namespace BK\JSONIFY\Utilities;

class JSONIFY {
	private static array $jsonify = [];

	public static function init () {
		//@fmt:off
		add_action('admin_head', fn () => self::renderHeadContent());
		add_action('wp_head',    fn () => self::renderHeadContent());

		add_action('admin_footer', fn () => self::renderFooterContent());
		add_action('wp_footer',    fn () => self::renderFooterContent());
		//@fmt:on
	}

	/**
	 * @param string $what Helpful descriptor.
	 * @param mixed $data Whatever needs to be JSON-encoded.
	 * @param bool $encoded Is the data already JSON-encoded?
	 */
	public static function jsonify (string $what, mixed $data, bool $encoded = false) {
		if (empty($what) || empty($data)) {
			// TODO - Warn "insufficient data"
			return;
		}

		if (array_key_exists($what, self::$jsonify)) {
			// TODO - Warn "duplicate key"
			return;
		}

		$what = str_replace(' ', '-', $what);
		$what = str_replace('-', '_', $what);

		self::$jsonify[$what] = $encoded
			? $data
			: json_encode($data);
	}

	protected static function renderHeadContent () {
		?>
		<script id="JSONIFY_head">
			window.JSONIFY ??= {};
		</script>
		<?php
	}

	protected static function renderFooterContent () {
		?>
		<script id="JSONIFY_footer">
			<?php if (in_array(wp_get_environment_type(), ['development', 'local'], true)) : ?>
			//@fmt:off
			JSONIFY['Env']     = <?= json_encode($_ENV);     ?>;
			JSONIFY['Server']  = <?= json_encode($_SERVER);  ?>;
			JSONIFY['Request'] = <?= json_encode($_REQUEST); ?>;
			//@fmt:on
			<?php endif; ?>

			<?php foreach (self::$jsonify as $what => $data) : ?>
			JSONIFY['<?= $what ?>'] = <?= $data ?>;
			<?php endforeach; ?>

			console.log(JSONIFY);
		</script>
		<?php
	}
}