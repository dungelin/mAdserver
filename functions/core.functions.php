<?php
if (!function_exists('__')) {
    function __($string , $data = null) {
        if( !isset($GLOBALS['i18n']) ) {
            $lang = $GLOBALS['_MAX']['CONF']['default_language'];
            if( strlen($lang) < 1 ) $lang = 'zh_CN';
         }
        else {
            $lang = trim($GLOBALS['i18n']);
        }

        if( !isset($GLOBALS['language'][$lang])) {
            $lang_file = MAD_PATH . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR . $lang . '.lang.php';
            if(file_exists($lang_file)) {
                include_once( $lang_file );
                $GLOBALS['i18n'] = $lang;
            }
            else {
                $GLOBALS['i18n'] = 'zh_CN';
            }
        }


        if( isset($GLOBALS['language'][$GLOBALS['i18n']][$string]))
            $to = $GLOBALS['language'][$GLOBALS['i18n']][$string];
        else
            $to = $string;

        if($data == null) {
            return $to;
        }
        else {
            if( !is_array( $data ) ) $data = array( $data );
            return vsprintf( $to , $data );
        }

    }
}