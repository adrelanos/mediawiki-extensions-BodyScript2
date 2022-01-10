public static function onAfterFinalPageOutput( $out ) {
   $out = ob_get_clean();
   ob_start();
   $out .= $wgBodyScript2Code;
   echo $out;
   return true;
}
