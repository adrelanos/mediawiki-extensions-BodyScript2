<?php

class BodyScript2 {

	/**
	 * Code for adding the head script to the wiki
	 *
	 * @param OutputPage &$out
	 * @param Skin &$skin
	 */
   public static function onAfterFinalPageOutput( $out ) {
      return true;
   }
}
