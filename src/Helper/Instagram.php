<?php

namespace Template\Helper;

// error_reporting(0);

class Instagram {

    public function getImage($data)
    {
        $url = $data['url'];

        // Read image path, convert to base64 encoding
        $imageData = base64_encode($this->my_file_get_contents($url));

        // Format the image SRC:  data:{mime};base64,{data};
        $src = 'data:image/jpeg;base64,'.$imageData;

        // Echo out a sample image
        echo $src;
    }

    private function my_file_get_contents($site_url){
        $ch = curl_init();
        $timeout = 5; // set to zero for no timeout
        curl_setopt ($ch, CURLOPT_URL, $site_url);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        ob_start();
        curl_exec($ch);
        curl_close($ch);
        $file_contents = ob_get_contents();
        ob_end_clean();
        return $file_contents;
    }

}