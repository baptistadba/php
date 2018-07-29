<?php 

require_once("config.php");
echo session_save_path();
echo "</br>";
var_dump(session_status());
echo "</br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED :
		echo "as sessões estão desabilitadas";
		break;
	case PHP_SESSION_NONE :
		echo "se as sessões estão habilitadas, não existe nenhuma ativa.";
		break;

	case PHP_SESSION_ACTIVE  :
		echo "se as sessões estão habilitadas e existe uma session ativa.";
		break;

	default:
		echo "Sistema fora de normalidade.";
		break;
}

echo "</br>";
echo "</br>";

session_destroy();
var_dump(session_status());
echo "</br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED :
		echo "as sessões estão desabilitadas";
		break;
	case PHP_SESSION_NONE :
		echo "se as sessões estão habilitadas, não existe nenhuma ativa.";
		break;

	case PHP_SESSION_ACTIVE  :
		echo "se as sessões estão habilitadas e existe uma session ativa.";
		break;

	default:
		echo "Sistema fora de normalidade.";
		break;
}

 ?>