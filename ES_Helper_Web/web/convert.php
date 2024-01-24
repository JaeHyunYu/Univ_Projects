<?php
function base64_to_jpeg($base64_string, $output_file) {
	$base64_string = str_replace('%2F', '/', $base64_string);
	$ifp2 = fopen( '/var/www/html/tmp/base64', 'wb' );
	fwrite($ifp2, $base64_string);
	fclose($ifp2);
    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
	// we could add validation here with ensuring count( $data ) > 1

    fwrite( $ifp, base64_decode( $base64_string ) );
    // clean up the file resource
    fclose( $ifp ); 

    return $output_file; 
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// create base64 image at tmp/
$base64_ing_img = urlencode($_POST['base64_ing_img']);
$name = generateRandomString();
$img = base64_to_jpeg($base64_ing_img, '/var/www/html/tmp/'.$name);
// extract text
$output = shell_exec("python3 detect.py /var/www/html/tmp/".$name." 2>&1");
echo $output;

// remove image at tmp/
unlink( '/var/www/html/tmp/'.$name );

?>
