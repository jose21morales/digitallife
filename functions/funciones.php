<?php

class Enlaces {

	public function enlacesPaginas() {
		if (isset($_GET['action'])) {
			$enlaces = $_GET['action'];
		} else {
			$enlaces = 'index';
		}

		if ($enlaces == 'acercade' || $enlaces == 'contacto') {
			$module = $enlaces . '.php';
		}

		else if ($enlaces == 'index') {
			$module = 'inicio.php';
		} else {
			$module = 'inicio.php';
		}
		include $module;
	}
}

?>