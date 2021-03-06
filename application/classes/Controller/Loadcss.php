<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Loadcss extends Controller {

    public function action_index() {

        error_reporting(0);

        $load = preg_replace('/[^a-z0-9,_-]+/i', '', $_GET['load']);
        $load = explode(',', $load);

        if (empty($load))
            exit;

        $compress = ( isset($_GET['c']) && $_GET['c'] );
        $force_gzip = ( $compress && 'gzip' == $_GET['c'] );
        $rtl = ( isset($_GET['dir']) && 'rtl' == $_GET['dir'] );
        $test = ( isset($_GET['c']) AND $_GET['c'] == 'test');
        $expires_offset = 31536000;
        $out = '';
        $pathlist = '';

        $config = Kohana::$config->load('wp-js-css')->css;

        foreach ($load as $handle) {
            if (!$config[$handle]) {
                $pathlist .= '*** ' . $handle . " is not defined! ***\n";
                continue;
            }

            $path = $_SERVER['DOCUMENT_ROOT'] . $config[$handle];
            $pathlist .= $path . "\n";
            $content = file_get_contents($path) . "\n";

            if ($rtl) {
                $dir = dirname($config[$handle]);
                $content = str_replace('../images/', $dir . '/../images/', $content);
                $content = str_replace('url(images/', 'url('.$dir . '/images/', $content);
            }

            $out .= $content;
        }

        if ($test) {
            header('Content-Type: text/plain; charset=UTF-8');
            header('Expires: ' . gmdate("D, d M Y H:i:s", time() + $expires_offset) . ' GMT');
            header("Cache-Control: public, max-age=$expires_offset");
            print $pathlist . "\n";
            echo $out;
            exit;
        } else {
            header('Content-Type: text/css');
            header('Expires: ' . gmdate("D, d M Y H:i:s", time() + $expires_offset) . ' GMT');
            header("Cache-Control: public, max-age=$expires_offset");

            if ($compress && !ini_get('zlib.output_compression') && 'ob_gzhandler' != ini_get('output_handler') && isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
                header('Vary: Accept-Encoding'); // Handle proxies
                if (false !== stripos($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate') && !$force_gzip) {
                    header('Content-Encoding: deflate');
                    $out = gzdeflate($out, 3);
                } elseif (false !== stripos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
                    header('Content-Encoding: gzip');
                    $out = gzencode($out, 3);
                }
            }

            echo $out;
            exit;
        }
    }

}
