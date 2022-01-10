<?php

class BodyScript2 {

	/**
	 * Code for adding the head script to the wiki
	 *
	 * @param OutputPage &$out
	 */
   public static function onOutputPageParserOutput( OutputPage &$out, ParserOutput $parserOutput ) {
		global $wgBodyScript2Code;

		$out->addHTML( $wgBodyScript2Code );
	}
}
