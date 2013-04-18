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
		'profile_manager:admin:output_as_tags' => 'Mostrar en el perfil como tags',
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
		'profile_manager:actions:new:success' => 'Succesfully added new custom profile field',	
		'profile_manager:actions:new:error:metadata_name_missing' => 'No metadata name provided',	
		'profile_manager:actions:new:error:metadata_name_invalid' => 'Metadata name is an invalid name',	
		'profile_manager:actions:new:error:metadata_options' => 'You need to enter options when using this type',	
		'profile_manager:actions:new:error:unknown' => 'Unknown error occurred when saving a new custom profile field',
		'profile_manager:action:new:error:type' => 'Wrong profile field type (group or profile)',
		
		// edit
		'profile_manager:actions:edit:error:unknown' => 'Error fetching profile field data',
	
		//delete
		'profile_manager:actions:delete:confirm' => 'Are you sure you wish to delete this field?',
		'profile_manager:actions:delete:error:unknown' => 'Unknown error occurred while deleting',

		// toggle option
		'profile_manager:actions:toggle_option:error:unknown' => 'Unknown error occurred while changing the option',
	
		// category to field
		'profile_manager:actions:change_category:error:unknown' => "An unknown error occured while changing the category",
	
		// add category
		'profile_manager:action:category:add:error:name' => "No name or an invalid name provided for the category",
		'profile_manager:action:category:add:error:object' => "Error while creating the category object",
		'profile_manager:action:category:add:error:save' => "Error while saving the category object",
		'profile_manager:action:category:add:succes' => "The category was created succesfully",
	
		// delete category
		'profile_manager:action:category:delete:error:guid' => "No GUID provided",
		'profile_manager:action:category:delete:error:type' => "The provided GUID is not a custom profile field category",
		'profile_manager:action:category:delete:error:delete' => "An error occured while deleting the category",
		'profile_manager:action:category:delete:succes' => "The category was deleted succesfully",
	
		// add profile type
		'profile_manager:action:profile_types:add:error:name' => "No name or an invalid name provided for the Custom Profile Type",
		'profile_manager:action:profile_types:add:error:object' => "Error while creating the Custom Profile Type",
		'profile_manager:action:profile_types:add:error:save' => "Error while saving the Custom Profile Type",
		'profile_manager:action:profile_types:add:succes' => "The Custom profile Type was created succesfully",
		
		// delete profile type
		'profile_manager:action:profile_types:delete:error:guid' => "No GUID provided",
		'profile_manager:action:profile_types:delete:error:type' => "The provided GUID is not an Custom Profile Type",
		'profile_manager:action:profile_types:delete:error:delete' => "An unknown error occured while deleting the Custom Profile Type",
		'profile_manager:action:profile_types:delete:succes' => "The Custom Profile Type was deleted succesfully",
		
		// change username action
		'profile_manager:action:username:change:succes' => "Successfully changed your username",
	
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
		'widgets:profile_completeness:title' => 'Profile Completeness',
		'widgets:profile_completeness:description' => 'Show the profile completeness',
		'widgets:profile_completeness:view:tips' => 'Tip! Update your %s to improve the Profile Completeness.',
		'widgets:profile_completeness:view:complete' => 'Congratulations! Your profile is 100% complete!',
		
		'widgets:register:title' => "Register",
		'widgets:register:description' => "Show a register box",
		'widgets:register:loggedout' => "You need to be logged out to use this widget",
	
		// datepicker		
		'profile_manager:datepicker:trigger' => 'Select a date',
		'profile_manager:datepicker:output:dateformat' => '%a %d %b %Y', // For available notations see http://nl.php.net/manual/en/function.strftime.php
		'profile_manager:datepicker:input:localisation' => '', // change it to the available localized js files in custom_profile_fields/vendors/jquery.datepick.package-3.5.2 (e.g. jquery.datepick-nl.js), leave blank for default 
		'profile_manager:datepicker:input:dateformat' => '%m/%d/%Y', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format
		'profile_manager:datepicker:input:dateformat_js' => 'mm/dd/yyyy', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format

		'profile_manager:input:multi_select:empty_text' => 'Please select ...',
	
		// Edit profile => profile type selector
		'profile_manager:profile:edit:custom_profile_type:label' => "Select your profile type",
		'profile_manager:profile:edit:custom_profile_type:description' => "Description of selected profile type",
		'profile_manager:profile:edit:custom_profile_type:default' => "Default",
	
		// non_editable
		'profile_manager:non_editable:info' => 'This field can not be edited',
		
		// register form mandatory notice
		'profile_manager:register:mandatory' => "Items marked with a * are mandatory",
		
		// register profile icon
		'profile_manager:register:profile_icon' => 'This site requires you to upload a profile icon',
		
		// register accept terms
		'profile_manager:registration:accept_terms' => "I have read and accept the %sTerms of Service%s",
	
		// simple access control
		'profile_manager:simple_access_control' => 'Select who can view your profile information',
	
		// register pre check
		'profile_manager:register_pre_check:missing' => 'The next field must be filled: %s',
		'profile_manager:register_pre_check:terms' => 'You need to accept the terms to complete the registration',
		'profile_manager:register_pre_check:profile_icon:error' => 'Error uploading your profile icon (probably related to the file size)',
		'profile_manager:register_pre_check:profile_icon:nosupportedimage' => 'Uploaded profile icon is not the right type (jpg, gif, png)',
	
		// Admin add user form
		'profile_manager:admin:adduser:notify' => "Notify user",
		'profile_manager:admin:adduser:use_default_access' => "Extra metadata created based on site default access level",
		'profile_manager:admin:adduser:extra_metadata' => "Add extra profile data",
		
		// change username form
		'profile_manager:account:username:button' => "Click to change your username",
		'profile_manager:account:username:info' => "Change your username. An icon will tell you if the username entered is valid and available.",
		
		// river events
		'river:join:site:default' => '%s joined the site',
	
		// login history
		'profile_manager:account:login_history' => "Login History",
		'profile_manager:account:login_history:date' => "Date",
		'profile_manager:account:login_history:ip' => "IP Address",
		'profile_manager:profile:communities' => "Communities",
		'profile_manager:profile:groups' => "Writing Groups",
		'profile_manager:profile:no_groups' => "No groups found",
		'profile_manager:profile:no_communities' => "No communities found",
	
	);
	
	add_translation("es", $spanish);
	