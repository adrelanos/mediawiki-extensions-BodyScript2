<?php

class BodyScript2 {

	/**
	 * Code for adding the head script to the wiki
	 *
	 * @param OutputPage &$out
	 */
   #public static function onOutputPageParserOutput( OutputPage &$out, ParserOutput $parserOutput ) {
   public static function onAfterFinalPageOutput( &$output )
		global $wgBodyScript2Code;

		$output->addHTML( $wgBodyScript2Code );
	}
}
