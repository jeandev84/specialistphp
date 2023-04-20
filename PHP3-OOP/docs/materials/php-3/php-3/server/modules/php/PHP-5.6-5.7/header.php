<?php
function println(){
	print( implode(" ", func_get_args())."\n" );
}
function prints(){
	print( implode(" ", func_get_args()) );
}
function assert_failure($file, $line, $code, $message=''){
	println('');
	if($message)
		println("----- Assert failure: $message ------");
	else
		println('----- Assert failure ------');
	if($file == __FILE__){
		println($line, '=>', $code);
	}else{
		preg_match( '/([a-zA-Z_-]+(\.class|\.inc)?\.[a-zA-Z_-]+)$/', $file, $f);
		println($f[1].':'.$line);
	}
	println('');
}
assert_options(ASSERT_WARNING, false);
assert_options(ASSERT_QUIET_EVAL, true);
assert_options(ASSERT_CALLBACK, 'assert_failure');


if (php_sapi_name() != 'cli-server') {
	if( !function_exists( 'readline' ) ){
		function readline( $prompt='' ){
			if( $prompt ) fputs( STDOUT, $prompt . ': ' );
			return trim( fgets( STDIN ) );	
		}
	}

	if($_SERVER['argv'][0]==='-'){
		$fh = fopen('php://stdin', 'r');
		$cmd = '';
		$bcLvl = 0;
		echo "php > ";
		while (true)
		{
				$line = rtrim(fgets($fh));
				$bcLvl += substr_count($line, '{') - substr_count($line, '}');
				$cmd.= $line;
				if ($bcLvl > 0 or substr($cmd, -1) !== ';')
				continue;
				eval($cmd);
				echo "\nphp > ";
				$cmd = '';
		}
	}
}