<?php
/**
 * Elgg diagnostics language pack.
 *
 * @package ElggDiagnostics
 */

$spanish = array(
	'admin:administer_utilities:diagnostics' => 'Diagnóstico del sistema',
	'diagnostics' => 'Diagnóstico del sistema',
	'diagnostics:report' => 'Reporte del diagnóstico',
	'diagnostics:description' => 'El siguiente reporte puede ser útil para encontrar problemas con Elgg. Los desarrolladores puedes solicitarle este reporte y adjuntarlo con su informe de problemas.',
	'diagnostics:download' => 'Descargar',
	'diagnostics:header' => '========================================================================
Reporte de diagnóstico
Generado %s por %s
========================================================================

',
	'diagnostics:report:basic' => '
Elgg Release %s, version %s

------------------------------------------------------------------------',
	'diagnostics:report:php' => '
PHP info:
%s
------------------------------------------------------------------------',
	'diagnostics:report:plugins' => '
Plugins y detalles:

%s
------------------------------------------------------------------------',
	'diagnostics:report:md5' => '
Archivos y checksums:

%s
------------------------------------------------------------------------',
	'diagnostics:report:globals' => '
Global variables:

%s
------------------------------------------------------------------------',
);

add_translation("es", $spanish);
