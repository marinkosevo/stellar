<?php

foreach ( glob( get_theme_file_path() . '/inc/*.php' ) as $file ) {

require_once $file;
}
?>