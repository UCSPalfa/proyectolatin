<?php 
	/**
	* Profile Manager
	* 
	* English language
	* 
	* @package profile_manager
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/

	$spanish = array(
					
		// LATIn field names:
		'latin:field:bio' => 'Bio',
		'latin:field:institution' => 'Institución',
		'latin:field:country' => 'País',
		'latin:field:city' => 'Ciudad',
		'latin:field:interests' => 'Intereses',
		'latin:field:curriculum' => 'Curriculum',
		'latin:field:languages' => 'Lenguajes',
		'latin:field:email_visibility' => 'Visibilidad de Email',
		'latin:field:areas' => 'Áreas de interés',
		'latin:field:proposal' => 'Propuesta del contenido',
		'latin:field:booktitle' => 'Título del Libro',
		'latin:field:description' => 'Descripción del grupo',
		'latin:field:policies' => '¿Acepta usted las reglas del concurso?',
		'latin:field:policies:title' => 'Reglas del concurso',
		'latin:field:policies:link' => 'profile_manager/contestrules',
		'latin:field:policies:linkdesc1' => 'Al aceptar las ',
		'latin:field:policies:linkdesc2' => 'reglas del concurso ',
		'latin:field:policies:linkdesc3' => 'usted está de acuerdo con nuestras condiciones y automáticamente participa en la convocatoria de la creación colaborativa de libros de texto abierto.',

		// entity names
		'item:object:custom_profile_field' => 'Campo de perfil personalizado',
		'item:object:custom_profile_field_category' => 'Categoria de campo de perfil personalizado',
		'item:object:custom_profile_type' => 'Tipo de perfil personalizado',
		'item:object:custom_group_field' => 'Campo de grupo personalizado',
	
		'profile:custom_profile_type' => 'Tipo de perfil personalizado',
		
		// admin menu 
		'admin:appearance:group_fields' => "Editar campos de grupo",
		'admin:appearance:export_fields' => "Exportar datos del perfil",
		'admin:appearance:user_summary_control' => "Resumen de control del usuario",

		'admin:groups' => "Grupos",
		'admin:groups:export' => "Exportar grupos",
		
		'admin:users:export' => "Exportar usuario",
		'admin:users:inactive' => "Listar usuarios inactivos",
	
		// plugin settings
		'profile_manager:settings:registration' => 'Registro',
		'profile_manager:settings:edit_profile' => 'Editar perfil',
		'profile_manager:settings:view_profile' => 'Ver perfil',
		'profile_manager:settings:other' => 'Otro',
	
		'profile_manager:settings:profile_icon_on_register' => 'Añadir ícono de perfil obligatorio en el campo de ingreso del formulario',
		'profile_manager:settings:simple_access_control' => 'Mostrar solo un selector para el control de acceso en el formulario de editar perfil',
		'profile_manager:settings:default_profile_type' => "Tipo de perfil predeterminado en el formulario de registro",
		'profile_manager:settings:hide_profile_type_default' => "Ocultar el tipo de perfil 'Predeterminado' en el formulario de registro",
	
		'profile_manager:settings:hide_non_editables' => 'Ocultar los campos no editables del formulario de editar perfil',
	
		'profile_manager:settings:edit_profile_mode' => "Cómo mostrar la pantalla de 'editar perfil'",
		'profile_manager:settings:edit_profile_mode:list' => "En Lista",
		'profile_manager:settings:edit_profile_mode:tabbed' => "En Pestañas",
	
		'profile_manager:settings:show_profile_type_on_profile' => "Mostrar el tipo de perfil del usuario en su perfil",
	
		'profile_manager:settings:display_categories' => 'Seleccionar cómo las diferentes categorias serán mostradas en el perfil',
		'profile_manager:settings:display_categories:option:plain' => 'Plano',
		'profile_manager:settings:display_categories:option:accordion' => 'Acordeón',
	
		'profile_manager:settings:display_system_category' => 'Mostrar una categoria adicional en el perfil con systemdata (sólo para admins)',
	
		'profile_manager:settings:profile_type_selection' => 'Quién puede cambiar el tipo de perfil?',
		'profile_manager:settings:profile_type_selection:option:user' => 'Usuario',
		'profile_manager:settings:profile_type_selection:option:admin' => 'Sólo Administrador',

		'profile_manager:settings:description_position' => 'Dónde posicionar el campo de descripción ("Acerca de mí")',
		'profile_manager:settings:user_summary_control' => 'Permitir al Profile Manager controlar el resumen / listado del usuario',
		
		'profile_manager:settings:enable_profile_completeness_widget' => "Habilitar el widget de completitud del perfil",
		'profile_manager:settings:enable_username_change' => "Permitir a los usuario cambiar el nombre de usuario en las configuraciones.",
		'profile_manager:settings:enable_username_change:option:admin' => "Sólo administrador",
		'profile_manager:settings:enable_site_join_river_event' => "Agregar un evento al river cuando usuarios se unan a este sitio",
		
		'profile_manager:settings:registration:terms' => "Para mostrar un campo de 'Aceptar términos' en la página de registro, por favor ingrese la URL de los términos y condiciones a continuación",
		'profile_manager:settings:registration:extra_fields' => "Dónde mostrar los campos extras en el formulario de registro",
		'profile_manager:settings:registration:extra_fields:extend' => "Bajo el formulario",
		'profile_manager:settings:registration:extra_fields:beside' => "Junto al formulario",
		'profile_manager:settings:registration:free_text' => "Escriba un texto que desee agregar en la página de registro",
		
		// Field Configuration
		'profile_manager:admin:metadata_name' => 'Nombre',	
		'profile_manager:admin:metadata_label' => 'Etiqueta',
		'profile_manager:admin:metadata_hint' => 'Ayuda',
		'profile_manager:admin:metadata_description' => 'Descripción',
		'profile_manager:admin:metadata_label_translated' => 'Etiqueta (Traducida)',
		'profile_manager:admin:metadata_label_untranslated' => 'Etiqueda (Sin traducir)',
		'profile_manager:admin:metadata_options' => 'Opciones (separadas por coma)',
		'profile_manager:admin:field_type' => "Tipo de campo",
		'profile_manager:admin:options:datepicker' => 'Calendario',
		'profile_manager:admin:options:pm_datepicker' => 'Calendario (Estilo del Profile Manager)',
		'profile_manager:admin:options:dropdown' => 'Combo',
		'profile_manager:admin:options:radio' => 'Radio',
		'profile_manager:admin:options:multiselect' => 'Selector múltiple',
		'profile_manager:admin:options:file' => 'Archivo',
		'profile_manager:admin:options:pm_rating' => 'Valoración',
		
		'profile_manager:admin:additional_options' => 'Opciones adicionales',
		'profile_manager:admin:show_on_register' => 'Mostrar en el registro',	
		'profile_manager:admin:mandatory' => 'Obligatorio',
		'profile_manager:admin:user_editable' => 'El usuario puede editar este campo',
		'profile_manager:admin:output_as_tags' => 'Mostrar en el perfil como etiquetas',
		'profile_manager:admin:admin_only' => 'Campo solo para administración',
		'profile_manager:admin:count_for_completeness' => 'Contabilizar este campo en el widget de completitud del perfil',
		'profile_manager:admin:blank_available' => 'Agregar una opción en blanco',		
		'profile_manager:admin:option_unavailable' => 'Opción no disponible',
		'profile_manager:admin:subgroups_only' => 'Sólo para grupos de escritura',	//po5i

		// po5i: para las sugerencias de nombres:
		'profile_manager:groups:similar' => 'Se han encontrado comunidades similares. ¿Quisiera considerar unirse a una de ellas?',
		'profile_manager:groups:close' => 'Cerrar',
	
		// field options additionals description
		'profile_manager:admin:show_on_register:description' => "Si desea este campo en el formulario de registro.",	
		'profile_manager:admin:mandatory:description' => "Si desea que este campo sea obligatorio (solo aplica al formulario de registro).",
		'profile_manager:admin:user_editable:description' => "Si está en NO los usuarios no podrán editar este campo (util si este campo es administrado por un sistema externo).",
		'profile_manager:admin:output_as_tags:description' => "Este campo se mostrará como etiquetas (sólo se aplica en el perfil del usuario).",
		'profile_manager:admin:admin_only:description' => "Seleccione SI para hacer de este campo sólo disponible para administradores.",
		'profile_manager:admin:blank_available:description' => "Seleccione SI si una opción en blanco debe ser agregada entre las opciones de este campo.",	
	
		// profile fields
		'profile_manager:profile_fields:list:title' => "Campos del perfil",	
	
		'profile_manager:profile_fields:no_fields' => "Actualmente no hay campos configurados para ser usados por el plugin de Profile Manager. Agregue su campo o importelos con una de las siguientes opciones.",
		
		'profile_manager:profile_fields:add' => "Agregar un nuevo campo de perfil",
		'profile_manager:profile_fields:edit' => "Editar un campo de perfil",
		'profile_manager:profile_fields:add:description' => "Aquí usted puede editar los campos que los usuarios controlan en su perfil.",
	
		// group fields
		'profile_manager:group_fields:list:title' => "Campos de grupos",	
	
		'profile_manager:group_fields:add:description' => "Aquí usted puede editar los campos que aparecen en el perfil del grupo.",
		'profile_manager:group_fields:add' => "Agregar un nuevo campo de grupo",
		'profile_manager:group_fields:edit' => "Editar un nuevo campo de grupo",
	
		// Custom fields categories
		'profile_manager:categories:add' => "Agregar una categoría",
		'profile_manager:categories:edit' => "Editar una categoría",
		'profile_manager:categories:list:title' => "Categorías",
		'profile_manager:categories:list:default' => "Predeterminado",
		'profile_manager:categories:list:system' => "Sistema (sólo para administradores)",	
		'profile_manager:categories:list:view_all' => "Ver todos los campos",
		'profile_manager:categories:list:no_categories' => "No hay categorías definidas",
		'profile_manager:categories:delete:confirm' => "Are you sure you wish to delete this category?",
		
		// Custom Profile Types
		'profile_manager:profile_types:add' => "Add a new profile type",
		'profile_manager:profile_types:edit' => "Edit a profile type",
		'profile_manager:profile_types:list:title' => "Profile Types",
		'profile_manager:profile_types:list:no_types' => "No profile types defined",
		'profile_manager:profile_types:delete:confirm' => "¿Está seguro que desea eliminar este tipo de perfil?",
		'profile_manager:user_details:profile_type' => "Tipo de perfil",
		
		// User Summary Control
		'profile_manager:user_summary_control:config' => "Configuración",
		'profile_manager:user_summary_control:info' => "Agregue campos a los diferentes contenedores y pre-vizualice el resultado de la configuración. Si está de acuerdo usted puede 'Guardar' la configuración.",
		
		'profile_manager:user_summary_control:container:title' => "Título",
		'profile_manager:user_summary_control:container:entity_menu' => "Menú de Entidad",
		'profile_manager:user_summary_control:container:subtitle' => "Subtítulo",
		'profile_manager:user_summary_control:container:content' => "Contenido",
		
		'profile_manager:user_summary_control:options:spacers' => "Espaciados",
		'profile_manager:user_summary_control:options:spacers:new_line' => "Nueva línea",
		'profile_manager:user_summary_control:options:spacers:space' => "Espacio",
		'profile_manager:user_summary_control:options:spacers:dash' => "-",
		
		// profile manager inactive users
		'profile_manager:admin:users:inactive:last_login' => "Último inicio de sesión",
		'profile_manager:admin:users:inactive:list' => "Usuarios inactivos",
		'profile_manager:admin:users:inactive:never' => "Nunca",
		'profile_manager:admin:users:inactive:download' => "Descargar",
	
		// admin actions
		'profile_manager:actions:title' => 'Acciones',
	
		// Reset
		'profile_manager:actions:reset:description' => 'Remover todos los campos personalizados',
		'profile_manager:actions:reset:confirm' => '¿Está seguro que desea resetear todos los campos del perfil?',
		'profile_manager:actions:reset:error:unknown' => 'Un error desconocido ha ocurrido mientras se reseteaban los campos del perfil',
		'profile_manager:actions:reset:error:wrong_type' => 'Tipo de campo incorrecto (perfil o grupo)',
		'profile_manager:actions:reset:success' => 'Reseteo exitoso',
	
		// import from custom
		'profile_manager:actions:import:from_custom' => 'Importar campos personalizados',
		'profile_manager:actions:import:from_custom:description' => 'Importación de campos de perfil previamente definida (con la funcionalidad predeterminada)',
		'profile_manager:actions:import:from_custom:confirm' => '¿Está seguro que desea importar estos campos personalizados?',
		'profile_manager:actions:import:from_custom:no_fields' => 'No hay campos personalizados disponibles para importar',
		'profile_manager:actions:import:from_custom:new_fields' => '<b>%s</b> campos importados exitosamente.',
	
		// import from default
		'profile_manager:actions:import:from_default' => 'Importar campos predeterminados',
		'profile_manager:actions:import:from_default:description' => "Importar campos predeterminados de Elgg",
		'profile_manager:actions:import:from_default:confirm' => '¿Está seguro que desea importar los campos predeterminados?',
		'profile_manager:actions:import:from_default:no_fields' => 'No hay campos predeterminados disponibles para importar',
		'profile_manager:actions:import:from_default:new_fields' => '<b>%s</b> nuevos campos importados exitosamente',
		'profile_manager:actions:import:from_default:error:wrong_type' => 'Tipo de campo incorrecto (perfil o grupo)',
	
		// Export
		'profile_manager:actions:export' => "Exportar",
		'profile_manager:actions:export:description' => "Exportar datos de perfil a un archivo csv",
		'profile_manager:export:title' => "Exportar datos de perfil",
		'profile_manager:export:description:custom_profile_field' => "Esta función exportará todos los metadatos de los <b>usuarios</b> basados en los campos seleccionados.",
		'profile_manager:export:description:custom_group_field' => "Esta función exportará todos los metadatos de los <b>grupos</b> basados en los campos seleccionados.",
		'profile_manager:export:list:title' => "Seleccione los campos que desee exportar",
		'profile_manager:export:nofields' => "No hay campos personalizados de perfil disponibles para su exportación",
	
		// Configuration Backup and Restore
		'profile_manager:actions:configuration:backup' => "Respaldo",
		'profile_manager:actions:configuration:backup:description' => "Respaldar la configuración de estos campos (categorías y tipos no serán respaldados)",
		'profile_manager:actions:configuration:restore' => "Restaurar",
		'profile_manager:actions:configuration:restore:description' => "Restaurar un respaldo de un archivo de configuración previamente realizado. (<b>se perderán las relaciones entre campos y categorías</b>)",
		
		'profile_manager:actions:configuration:restore:upload' => "Restaurar",
	
		'profile_manager:actions:restore:success' => "Restauración exitosa",
		'profile_manager:actions:restore:error:deleting' => "Error al restaurar: no se pudo eliminar los campos actuales",	
		'profile_manager:actions:restore:error:fieldtype' => "Error al restaurar: los tipos de campos no concuerdan",
		'profile_manager:actions:restore:error:corrupt' => "Error al restaurar: el archivo de respaldo puede estar corrompido o falta la información.",
		'profile_manager:actions:restore:error:json' => "Error al restaurar: archivo json inválido",
		'profile_manager:actions:restore:error:nofile' => "Error al restaurar: no se ha subido el archivo",
	
		// new
		'profile_manager:actions:new:success' => 'El nuevo campo del perfil se ha agregado exitosamente',	
		'profile_manager:actions:new:error:metadata_name_missing' => 'No se proporcionó un nombre de metadata',	
		'profile_manager:actions:new:error:metadata_name_invalid' => 'El nombre de metadata no es válido',	
		'profile_manager:actions:new:error:metadata_options' => 'Usted necesita ingresar opciones si desea usar este tipo de campo',	
		'profile_manager:actions:new:error:unknown' => 'Ha ocurrido un error al guardar el campo',
		'profile_manager:action:new:error:type' => 'Tipo de campo incorrecto',
		
		// edit
		'profile_manager:actions:edit:error:unknown' => 'Error al traer los datos del campo',
	
		//delete
		'profile_manager:actions:delete:confirm' => '¿Está seguro de querer eliminar este campo?',
		'profile_manager:actions:delete:error:unknown' => 'Ha ocurrido un error al eliminar',

		// toggle option
		'profile_manager:actions:toggle_option:error:unknown' => 'Ha ocurrido un error al cambiar la opción',
	
		// category to field
		'profile_manager:actions:change_category:error:unknown' => "Ha ocurrido un error al cambiar la categoría",
	
		// add category
		'profile_manager:action:category:add:error:name' => "Se ha proporcionado un nombre incorrecto a esta categoría",
		'profile_manager:action:category:add:error:object' => "Se ha producido un error al crear la categoría",
		'profile_manager:action:category:add:error:save' => "Se ha producido un error al guardar la categoría",
		'profile_manager:action:category:add:succes' => "La categoría ha sido guardada exitosamente",
	
		// delete category
		'profile_manager:action:category:delete:error:guid' => "No se ha proporcionado un GUID",
		'profile_manager:action:category:delete:error:type' => "El GUID proporcionado no es una categoría válida",
		'profile_manager:action:category:delete:error:delete' => "Un error ha ocurrido mientras se borraba la categoría",
		'profile_manager:action:category:delete:succes' => "La categoría fue borrada exitosamente",
	
		// add profile type
		'profile_manager:action:profile_types:add:error:name' => "El nombre proporcionado para el tipo de campo personalizado es incorrecto",
		'profile_manager:action:profile_types:add:error:object' => "Error al crear el tipo de campo personalizado",
		'profile_manager:action:profile_types:add:error:save' => "Error al guardar el tipo de campo personalizado",
		'profile_manager:action:profile_types:add:succes' => "El tipo de campo personalizado ha sido guardado exitosamente",
		
		// delete profile type
		'profile_manager:action:profile_types:delete:error:guid' => "No se ha proporcionado un GUID",
		'profile_manager:action:profile_types:delete:error:type' => "El GUID proporcionado no es un tipo de campo válido",
		'profile_manager:action:profile_types:delete:error:delete' => "Un error ha ocurrido al intentar eliminar el tipo de campo",
		'profile_manager:action:profile_types:delete:succes' => "El tipo de campo ha sido eliminado exitosamente",
		
		// change username action
		'profile_manager:action:username:change:succes' => "Su nombre de usuario ha sido cambiado exitosamente",
	
		// Tooltips
		'profile_manager:tooltips:profile_field' => "
			<b>Profile Field</b><br />
			Here you can add a new profile field.<br /><br />
			If you leave the label empty, you can internationalize the profile field label (<i>profile:[name]</i>).<br /><br />
			Use the hint field to supply on input forms (register and profile/group edit) a hoverable icon with a field description.
			If you leave the hint empty, you can internationalize the hint (<i>profile:hint:[name]</i>).<br /><br />
			Options are only mandatory for fieldtypes <i>Dropdown, Radio and MultiSelect</i>.
		",
		'profile_manager:tooltips:profile_field_additional' => "
			<b>Show on register</b><br />
			If you want this field to be on the register form.<br /><br />
			
			<b>Mandatory</b><br />
			If you want this field to be mandatory (only applies to the register form).<br /><br />
			
			<b>User editable</b><br />
			If set to 'No' users can't edit this field (handy when data is managed in an external system).<br /><br />
			
			<b>Show as tags</b><br />
			Data output will be handle as tags (only applies on user profile).<br /><br />
			
			<b>Admin only field</b><br />
			Select 'Yes' if field is only available for admins.
		",
		'profile_manager:tooltips:category' => "
			<b>Category</b><br />
			Here you can add a new profile category.<br /><br />
			If you leave the label empty, you can internationalize the category label (<i>profile:categories:[name]</i>).<br /><br />
			
			If Profile Types are defined you can choose on which profile type this category applies. If no profile is specified, the category applies to all profile types (even undefined).
		",
		'profile_manager:tooltips:category_list' => "
			<b>Categories</b><br />
			Shows a list of all configured categories.<br /><br />
			
			<i>Default</i> is the category that applies to all profiles.<br /><br />
			
			Add fields to these categories by dropping them on the categories.<br /><br />
			
			Click the category label to filter the visible fields. Clicking view all fields shows all fields.<br /><br />
			
			You can also change the order of the categories by dragging them (<i>Default can't be dragged</i>. <br /><br />
			
			Click the edit icon to edit the category.
		",
		'profile_manager:tooltips:profile_type' => "
			<b>Profile Type</b><br />
			Here you can add a new profile type.<br /><br />
			If you leave the label empty, you can internationalize the profile type label (<i>profile:types:[name]</i>).<br /><br />
			Enter a description which users can see when selecting this profile type or leave it empty to internationalize (<i>profile:types:[name]:description</i>).<br /><br />
			
			If Categories are defined you can choose which categories apply to this profile type.
		",
		'profile_manager:tooltips:profile_type_list' => "
			<b>Profile Types</b><br />
			Shows a list of all configured profile types.<br /><br />
			Click the edit icon to edit the profile type.
		",
		'profile_manager:tooltips:actions' => "
			<b>Actions</b><br />
			Various actions related to these profile fields.
		",
	
		// widgets
		'widgets:profile_completeness:title' => 'Completitud del perfil',
		'widgets:profile_completeness:description' => 'Mostrar la completitud del perfil',
		'widgets:profile_completeness:view:tips' => 'Consejo: actualice %s para mejorar su perfil.',
		'widgets:profile_completeness:view:complete' => 'Felicidades, Su perfil está al 100%',
		
		'widgets:register:title' => "Registrarse",
		'widgets:register:description' => "Mostrar un cuadro de registro",
		'widgets:register:loggedout' => "Necesita haber cerrado sesión para ver este widget",
	
		// datepicker		
		'profile_manager:datepicker:trigger' => 'Seleccione una fecha',
		'profile_manager:datepicker:output:dateformat' => '%a %d %b %Y', // For available notations see http://nl.php.net/manual/en/function.strftime.php
		'profile_manager:datepicker:input:localisation' => '', // change it to the available localized js files in custom_profile_fields/vendors/jquery.datepick.package-3.5.2 (e.g. jquery.datepick-nl.js), leave blank for default 
		'profile_manager:datepicker:input:dateformat' => '%m/%d/%Y', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format
		'profile_manager:datepicker:input:dateformat_js' => 'mm/dd/yyyy', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format

		'profile_manager:input:multi_select:empty_text' => 'Por favor seleccione ...',
	
		// Edit profile => profile type selector
		'profile_manager:profile:edit:custom_profile_type:label' => "Seleccione su tipo de perfil",
		'profile_manager:profile:edit:custom_profile_type:description' => "Descripción del tipo de perfil seleccionado",
		'profile_manager:profile:edit:custom_profile_type:default' => "Predeterminado",
	
		// non_editable
		'profile_manager:non_editable:info' => 'Este campo no puede ser editado',
		
		// register form mandatory notice
		'profile_manager:register:mandatory' => "Los items marcados con un * son obligatorios",
		
		// register profile icon
		'profile_manager:register:profile_icon' => 'Este sitio requiere que ingrese una imágen',
		
		// register accept terms
		'profile_manager:registration:accept_terms' => "He leído y aceptado los %sTérminos de servicio%s",
	
		// simple access control
		'profile_manager:simple_access_control' => 'Seleccione quién puede ver su información de perfil',
	
		// register pre check
		'profile_manager:register_pre_check:missing' => 'El siguiente campo debe ser ingresado: %s',
		'profile_manager:register_pre_check:terms' => 'Necesita aceptar los términos para continuar con el registro',
		'profile_manager:register_pre_check:profile_icon:error' => 'Ha ocurrido un error al subir su imagen (propablemente sea el tamaño)',
		'profile_manager:register_pre_check:profile_icon:nosupportedimage' => 'La imágen subida para su perfil no tiene el formato correcto (jpg, gif, png)',
	
		// Admin add user form
		'profile_manager:admin:adduser:notify' => "Notificar al usuario",
		'profile_manager:admin:adduser:use_default_access' => "Metadata adicional creada a partir del nivel de acceso predeterminado del sitio",
		'profile_manager:admin:adduser:extra_metadata' => "Agregar información extra al perfil",
		
		// change username form
		'profile_manager:account:username:button' => "Haga clic para cambiar su usuario",
		'profile_manager:account:username:info' => "Cambiar su nombre de usuario. Un ícono le indicará si es válido y que está disponible.",
		
		// river events
		'river:join:site:default' => '%s se acaba de unir al sitio',
	
		// login history
		'profile_manager:account:login_history' => "Bitácora de sesiones",
		'profile_manager:account:login_history:date' => "Fecha",
		'profile_manager:account:login_history:ip' => "Dirección IP",
		'profile_manager:profile:communities' => "Comunidades",
		'profile_manager:profile:groups' => "Grupos de escritura",
		'profile_manager:profile:no_groups' => "No hay grupos",
		'profile_manager:profile:no_communities' => "No hay comunidades",

                //AO: Abril 30, términos
                'profile_manager:terms' => "Condiciones",
                'profile_manager:t1' => "Términos básicos",
                'profile_manager:t2' => "Condiciones generales",
                'profile_manager:p1' => "Si utiliza el servicio comunidad.proyectolatin.org, usted acepta los siguientes términos y condiciones ('Términos de Uso') que rigen nuestra relación con todos aquellos que interactúan con comunidad.proyectolatin.org.",
		'profile_manager:l1' => "<ol><li>Usted es responsable de cualquier actividad que ocurra bajo su nombre de usuario.</li>
                <li>Usted es responsable de mantener su contraseña segura.</li>
		<li>Usted no debe abusar, acosar, amenazar, intimidar o suplantar a otros usuarios de comunidad.proyectolatin.org.</li>
		<li>Usted no puede usar el servicio comunidad.proyectolatin.org para ningún propósito ilegal o no autorizado. Los usuarios internacionales se comprometen a cumplir con todas las leyes locales sobre conducta y contenido aceptable.</li>
		<li>Usted es el único responsable de su conducta y de cualquier dato, texto, información, nombres de pantalla, gráficos, fotos, perfiles, audio y video clips, enlaces (\"Contenido\") que usted envíe, publique y muestre en el servicio communidad.proyectolatin.org.</li>
		<li>comunidad.proyectolatin.org es para uso personal, no es una solución de negocio. Los usos profesionales o empresariales de comunidad.proyectolatin.org corren se ejecutan su propio riesgo.</li>
		<li>Usted no debe cambiar, adaptar o hackear comunidad.proyectolatin.org o modificar otro sitio web para indicar falsamente que está asociado con comunidad.proyectolatin.org.</li>
		<li>Usted no debe crear o enviar correo electrónico no deseado o anuncios a comunidad.proyectolatin.org o cualquiera de sus miembros ('Spam').</li>
		<li>Usted no debe transmitir ningún gusano, virus o cualquier código de naturaleza destructiva.</li>
		<li>Usted no debe, en el uso de comunidad.proyectolatin.org, violar cualquier ley en su jurisdicción (incluyendo pero no limitado a las leyes de derechos de autor).</li>
		<li>Cualquier pérdida de datos no es responsabilidad de comunidad.latinproject.org. El uso de este servicio es bajo su propio riesgo.</li>
                </ol>",
		'profile_manager:p2' => "La violación de cualquiera de estos acuerdos tendrá como resultado la cancelación de su cuenta en comunidad.proyectolatin.org. Mientras que comunidad.proyectolatin.org prohíbe dicha conducta y contenido en su sitio, usted entiende y acepta que comunidad.proyectolatin.org no puede ser responsable por el contenido publicado en su sitio web y, a pesar de nuestros mejores esfuerzos, puede estar expuesto a tales materiales. Usted utiliza el servicio comunity.proyectolatin.org bajo su propio riesgo.",
                'profile_manager:l2' => "<ul>
		<li>Nos reservamos el derecho de modificar o terminar el servicio de comunidad.proyectolatin.org por cualquier motivo, con previo aviso.</li>
		<li>Nos reservamos el derecho de modificar estos Términos de Uso en cualquier momento. Si las modificaciones constituyen un cambio sustancial en las condiciones de uso, se lo notificaremos a través de un método apropiado. Dejamos a nuestro criterio lo que es un \"cambio sustancial\".</li>
		<li>Nos reservamos el derecho de reclamar nombres de usuario en nombre de las empresas o individuos que tienen Derecho o marca comercial sobre esos nombres de usuario.</li>
                </ul>",
                'profile_manager:t3' => "Publicidad",
                'profile_manager:l3' => "<ul>
		<li>La publicidad de bienes o servicios está prohibida en el sitio de la comunidad.</li>
		<li>Los usuarios que no cumplan con estas condiciones serán prohibidos y el contenido ofensivo será borrado a nuestra discreción, con o sin notificación.</li>
                </ul>",
		'profile_manager:t4' => "Derechos de autor (Lo que es suyo es suyo)",
		'profile_manager:p3' => "No reclamamos los derechos de propiedad intelectual sobre cualquier material que usted proporcione/suba o contribuya al servicio de comunidad.latinproject.org.<p>Si tiene alguna pregunta, escríbanos a contacto@latinproject.org</p>",
		'profile_manager:priv' => "Privacidad",
		'profile_manager:priv:p1' => "Usted es dueño de su contenido. El proyecto LATIn no es responsable del contenido publicado en este sitio por otras partes.",
	
	);
	
	add_translation("es", $spanish);
	
