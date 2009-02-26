<?php
App::import('Core', 'Helper');
class AppHelper extends Helper {
	/**
	 * Rewrite strings to be URL/SEO friendly
	 * (Thanks Miles Johnson, http://www.milesj.me/blog/read/15/5-custom-php-functions-strings)
	 * @param string $text
	 * @return string
	 */
	function slugify($text) {
		$map = array(
			'/à|á|å|â/' => 'a',
			'/è|é|ê|ẽ|ë/' => 'e',
			'/ì|í|î/' => 'i',
			'/ò|ó|ô|ø/' => 'o',
			'/ù|ú|ů|û/' => 'u',
			'/ç/' => 'c',
			'/ñ/' => 'n',
			'/ä|æ/' => 'ae',
			'/ö/' => 'oe',
			'/ü/' => 'ue',
			'/Ä/' => 'Ae',
			'/Ü/' => 'Ue',
			'/Ö/' => 'Oe',
			'/ß/' => 'ss',
			'/[^-a-zA-Z0-9&\s]/i' => ''
		);

		$text = preg_replace(array_keys($map), array_values($map), $text);
		$text = trim(strtolower($text));
		$text = str_replace(array('-', ' ', '&'), array('_', '-', 'and'), $text);
		$text = urlencode($text);

		return $text;
	}
}
?>
