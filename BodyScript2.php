<?php

public static function onAfterFinalPageOutput( &$out ) {
   global $wgBodyScript2Code;
   $out->addHTML( $wgBodyScript2Code );
   return true;
}
