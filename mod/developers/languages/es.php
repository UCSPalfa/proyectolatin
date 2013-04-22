<?php
/**
 * Elgg developer tools Spanish language file.
 *
 */

$spanish = array(
	// menu
	'admin:develop_tools' => 'Herramientas',
	'admin:develop_tools:preview' => 'Sandbox de temas',
	'admin:develop_tools:inspect' => 'Inspeccionar',
	'admin:develop_tools:unit_tests' => 'Pruebas de Unidad',
	'admin:developers' => 'Desarrolladores',
	'admin:developers:settings' => 'Configuraciones',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Controle sus configuraciones de desarrollo y depuración a continuación. Algunas de estas configuraciones están también disponibles en otras páginas de administración.',
	'developers:label:simple_cache' => 'Usar caché simple',
	'developers:help:simple_cache' => 'Desactive esta caché cuando se esté desarrolando. De otro modo, los cambios en sus archivos CSS y JavaScript serán ignorados.',
	'developers:label:system_cache' => 'User la caché del sistema',
	'developers:help:system_cache' => 'Desactive esta característica cuando se esté desarrolando. De otro modo, los cambios en sus plugins no serán registrados.',
	'developers:label:debug_level' => "Nivel de depuración",
	'developers:help:debug_level' => "Este parámetro controla la cantidad de información que es almacenada en los archivos de log. Mire los detalles de la función elgg_log() para mayor información.",
	'developers:label:display_errors' => 'Mostrar los errores \"fatal PHP\"',
	'developers:help:display_errors' => "Por defecto, el archivo .htaccess de Elgg oculta los errores fatales de PHP.",
	'developers:label:screen_log' => "Mostrar los resultados de la operación de log en la pantalla",
	'developers:help:screen_log' => "Esta característica muestra la salida de las funciones elgg_log() y elgg_dump() en la página web.",
	'developers:label:show_strings' => "Mostrar las cadenas definidas para el soporte multi-idioma",
	'developers:help:show_strings' => "Esta opción mustra las cadenas utilizadas por la función elgg_echo() para la traducción de los mensajes en función del idioma seleccionado por el usuario.",
	'developers:label:wrap_views' => "Envolver vistas",
	'developers:help:wrap_views' => "Esta opción \"envuelve\" casi cada vista con comentarios HTML. Puede resultar útil para encontrar dónde se genera una vista en particular.",
	'developers:label:log_events' => "Registrar los logs de los eventos y plugin hooks",
	'developers:help:log_events' => "Esta característica escribe los eventos y plugin hooks en el log. Advertencia: se crearán muchos de estos registros por página.",

	'developers:debug:off' => 'Desabilitado',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Advertencia',
	'developers:debug:notice' => 'Note',
	
	// inspection
	'developers:inspect:help' => 'Inspeccionar la configuración del framework Elgg.',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' en %s",

	// theme preview
	'theme_preview:general' => 'Introducción',
	'theme_preview:breakout' => 'Línea de corte del iframe',
	'theme_preview:buttons' => 'Botones',
	'theme_preview:components' => 'Components',
	'theme_preview:forms' => 'Formularios',
	'theme_preview:grid' => 'Grids',
	'theme_preview:icons' => 'Íconos',
	'theme_preview:modules' => 'Módulos',
	'theme_preview:navigation' => 'Navegación',
	'theme_preview:typography' => 'Tipografía',
	'theme_preview:miscellaneous' => 'Miscelánea',

	// unit tests
	'developers:unit_tests:description' => 'Elgg tiene pruebas de unidad e integración para detectar bugs en sus clases y funciones.',
	'developers:unit_tests:warning' => 'Advertencia: No ejecute estas pruebas cuando su sitio se encuentre en etapa de producción. Su base de datos podría resultar corrupta.',
	'developers:unit_tests:run' => 'Ejecutar',

	// status messages
	'developers:settings:success' => 'Configuraciones guardadas',
);

add_translation('es', $spanish);
