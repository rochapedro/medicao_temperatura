
<?php

if (!isset($_SESSION)) {
    session_start();
}

//DEFINIÇÕES DE VARIÁVEIS GLOBAIS
define('DS', DIRECTORY_SEPARATOR);

unset($_SESSION['MEDICAO_URL_PROTOCOL']);

if (!isset($_SESSION['MEDICAO_URL_PROTOCOL'])) {

    /* URL BASE DO SISTEMA */
    $root = $_SERVER['DOCUMENT_ROOT'];
    $root = str_replace(trim(' \ '), DS, $root);
    $root = str_replace(trim(' / '), DS, $root);
    $_SESSION['MEDICAO_URL_HTTP_BASE'] = 'http://'.$_SERVER['HTTP_HOST'].'/projeto_novo/';
    $_SESSION['MEDICAO_URL_BASE'] = $root . '/projeto_novo/';
    $_SESSION['MEDICAO_URL_APP']  = $_SESSION['MEDICAO_URL_BASE'] . 'app' . DS;
    $_SESSION['MEDICAO_URL_MODELS'] = $_SESSION['MEDICAO_URL_APP'] .'models'. DS;
    $_SESSION['MEDICAO_URL_CONTROLLERS'] = $_SESSION['MEDICAO_URL_APP'] . 'controllers' . DS;
	$_SESSION['MEDICAO_URL_CSS']  = $_SESSION['MEDICAO_URL_BASE'] . 'css' . DS;
	$_SESSION['MEDICAO_URL_JS']  = $_SESSION['MEDICAO_URL_BASE'] . 'js' . DS;
	$_SESSION['MEDICAO_URL_ASSETS']  = $_SESSION['MEDICAO_URL_BASE'] . 'assets' . DS;
	$_SESSION['MEDICAO_URL_JQUERY']  = $_SESSION['MEDICAO_URL_BASE'] . 'jquery' . DS;
	$_SESSION['MEDICAO_URL_MODALS']  = $_SESSION['MEDICAO_URL_BASE'] . 'modals' . DS;

    /* INCLUDE */
	$_SESSION['MEDICAO_URL_INCLUDES'] = $_SESSION['MEDICAO_URL_BASE'] . 'includes' . DS;
	
	/* QR Code */
	$_SESSION['MEDICAO_URL_QR_CODE'] = $_SESSION['MEDICAO_URL_BASE'] . 'code_qr' . DS;

    /* LOCATION DOS DIRETORIOS */
    $_SESSION['MEDICAO_URL_LOCATION_WEB'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'web';
    $_SESSION['MEDICAO_URL_LOCATION_DIST'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'dist';
    $_SESSION['MEDICAO_URL_LOCATION_APP'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'app';
    $_SESSION['MEDICAO_URL_LOCATION_MODELS'] =$_SESSION['MEDICAO_URL_LOCATION_APP'] . 'models';
    $_SESSION['MEDICAO_URL_LOCATION_CONTROLLERS'] = $_SESSION['MEDICAO_URL_LOCATION_APP'] .'/'. 'controllers';
	$_SESSION['MEDICAO_URL_LOCATION_CSS'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'css';
	$_SESSION['MEDICAO_URL_LOCATION_JS'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'js';
	$_SESSION['MEDICAO_URL_LOCATION_ASSETS'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'assets';
	$_SESSION['MEDICAO_URL_LOCATION_JQUERY'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'jquery';
	$_SESSION['MEDICAO_URL_LOCATION_MODALS'] = $_SESSION['MEDICAO_URL_HTTP_BASE'] . 'modals';
}

function getAppName(){
	echo 'Medição';
}

function getIcon(){
	echo '<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />';
}


function getMeta(){
	echo '
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	';
}


function getCSSCommonFiles(){
	echo '
	 
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/css.css" rel="stylesheet" type="text/css" />
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/css2.css" rel="stylesheet" type="text/css" />
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/styles.css" rel="stylesheet" />
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/fontawesome-free/css/all.min.css" rel="stylesheet" />
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" />
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/dataTables.bootstrap4.min.css" rel="stylesheet">
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/responsive.bootstrap4.min.css"rel="stylesheet">
	  <link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/bootstrap-select.min.css" rel="stylesheet" >
	  
	';
}


function getCSSDataTables(){
	echo '
	<link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/dataTables.bootstrap4.min.css" rel="stylesheet" >
	<link href="'.$_SESSION['MEDICAO_URL_LOCATION_CSS'].'/buttons.bootstrap4.css" rel="stylesheet" >
	';
}


function getJsCommonFiles(){
	echo '
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/jquery.min.js"></script>
    <script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/bootstrap.bundle.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/jquery.easing.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/scripts.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/bootstrap-select.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/responsive.bootstrap4.min.js"></script>
    <script src="'.$_SESSION['MEDICAO_URL_LOCATION_ASSETS'].'/mail/jqBootstrapValidation.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_ASSETS'].'/mail/contact_me.js"></script>
	';
}  

function getJsDataTables(){
	echo '
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/jquery.dataTables.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/dataTables.bootstrap4.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/dataTables.buttons.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/buttons.flash.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/jszip.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/pdfmake.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/vfs_fonts.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/buttons.html5.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/buttons.print.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/buttons.bootstrap4.min.js"></script>
	<script src="'.$_SESSION['MEDICAO_URL_LOCATION_JS'].'/datatables/dataTables.responsive.min.js"></script>
	';
}

function getJqueryMask(){
	echo '
    <script src="'.$_SESSION['MEDICAO_URL_LOCATION_JQUERY'].'/jquery.maskedinput.min.js"></script>
	';
}

	