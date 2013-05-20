<?php

/**

 * Elgg diagnostics language pack.

 *

 * @package ElggDiagnostics

 */



$port = array(

	'admin:administer_utilities:diagnostics' => 'Diagnóstico do Sistema',

	'diagnostics' => 'Diagnósticos do sistema',

	'diagnostics:report' => 'Relatório de Diagnósticos',

	'diagnostics:description' => 'O seguinte relatório de diagnóstico pode ser útil para diagnosticar problemas com o Elgg. Os desenvolvedores do Elgg podem pedir que você o anexe a um relatório de bug.',

	'diagnostics:download' => 'Download',

	'diagnostics:header' => '========================================================================

Relatório de Diagnóstico do Elgg

Gerado %s por %s

========================================================================



',

	'diagnostics:report:basic' => '

Elgg Release %s, versão %s



------------------------------------------------------------------------',

	'diagnostics:report:php' => '

PHP informações:

%s

------------------------------------------------------------------------',

	'diagnostics:report:plugins' => '

plugins instalados e detalhes:



%s

------------------------------------------------------------------------',

	'diagnostics:report:md5' => '

Arquivos instalados e checksums:



%s

------------------------------------------------------------------------',

	'diagnostics:report:globals' => '

Variáveis globais:



%s

------------------------------------------------------------------------',

);



add_translation("pt", $port);
