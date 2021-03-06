<?php

$spanish = array(
   
    
    'latin:close' => 'Cerrar',
    'Books' => 'Libros',
    'Members' => 'Miembros',
    'Institutions:participating' => 'Instituciones participantes',
    'Institutions:collaborating' => 'Instituciones colaborando',
    
    'writingGroups:members' => 'Colaboradores del grupo',
    'discussion:writinggroup' => 'Discussiones del grupo',
    'file:writinggroup' => 'Archivos del grupo',
    'pages:writinggroup' => 'Paginas del grupo',
    'bookmarks:writinggroup' => 'Marcadores del grupo',
    'blog:writinggroup' => 'Blogs del grupo',
    'writingGroups:member' => 'colaboradores',
    'writingGroups:Members' => 'Colaboradores',
    
    
    'au_subgroups:name' => "Nombre del grupo de escritura",
    'au_subgroups:icon' => "Icono del grupo de escritura (deje en blanco si no desea modificar)",
        
    'au_subgroups' => "Grupos de Escritura",
    'au_subgroups:subgroup' => "Grupos de Escritur",
    'au_subgroups:subgroups' => "Grupos de Escritura",
    'au_subgroups:parent' => "Comunidad padre",
    'au_subgroups:add:subgroup' => 'Crear un Grupo de Escritura',
    'au_subgroups:edit:subgroup' => 'Editar Grupo de Escritura', //po5i
    'au_subgroups:delete:subgroup' => 'Eliminar Grupo de Escritura', //po5i
    'au_subgroups:invite:subgroup' => 'Añadir usuarios al Grupo de Escritura', //po5i
    'au_subgroups:policies:title' => 'Políticas', //po5i
    'au_subgroups:policies:link' => 'http://www.google.com', //po5i TODO: Que onda con esta cadena
    'au_subgroups:nogroups' => 'Ningún Grupo de Escritura ha sido creado',
    'au_subgroups:error:notparentmember' => "Los usuarios no pueden unirse a un Grupo de Escritura si no son miembros de la Comunidad padre",
    'au_subtypes:error:create:disabled' => "La creación de Grupos de Escritura ha sido desabilitada para esta Comunidad",
    'au_subgroups:noedit' => "No puede editar este Grupo de Escritura",
    'au_subgroups:subgroups:delete' => "Eliminar Grupo de Escritura",
    'au_subgroups:delete:label' => "¿Qué debería pasar con el contenido de este Grupo de Escritura? Cualquier opción seleccionada será también aplicada cualquier Grupo de Escritura que será eliminado.",
    'au_subgroups:deleteoption:delete' => 'Eliminar todo el contenido de este Grupo de Escritura',
    'au_subgroups:deleteoption:owner' => 'Transferir todo el contenido a los creadores originales',
    'au_subgroups:deleteoption:parent' => 'Transferir todo el contenido a la Comunidad padre',
    'au_subgroups:subgroup:of' => "Grupo de Escritura de %s",
    'au_subgroups:setting:display_alphabetically' => "¿Mostrar Grupos de Escritura personales listados alfabéticamente?",
    'au_subgroups:setting:display_subgroups' => '¿Mostrara Grupos de Escritura en listado estándar?',
    'au_subgroups:setting:display_featured' => '¿Mostrar Grupos de Escritura destacados en la barra lateral del listado de Grupos personales?',
    'au_subgroups:error:invite' => "Acción cancelada - Los siguientes Usuarios no son miembros de la Comunidad padre y, por tanto, no puede ser invitados o añadidos a este Grupo de Escritura.",
    'au_subgroups:option:parent:members' => "Miembros de la Comunidad padre",
    'au_subgroups:subgroups:more' => "Ver todos los Grupos de Escritura",
    
    /***
     *Modification UCSP
     */
    'au_subgroups:download:postulation_proposal' => "Descargar Propuesta de Postulación",
    'au_subgroups:postulation_proposal' => "Propuesta de Postulación",
    
    // group options
    'au_subgroups:group:enable' => "Grupos de Escritura: ¿Habilitar Grupos de Escritura para esta Comunidad?",
    'au_subgroups:group:memberspermissions' => "Grupos de Escritura: ¿Permitir a cualquier miembro de la Comunidad crear Grupos de Escritura? (si no, únicamente los administradores de la Comunidad podrán cerar Grupos de Escritura)",
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Ordenar resultados por',
    'au_subgroups:option:default' => 'Creado',
    'au_subgroups:option:alpha' => 'Alfabético',
    'au_subgroups:widget:numdisplay' => 'Número de Grupos de Escritura a mostrar',
    'au_subgroups:widget:description' => 'Lista de Grupos de Escritura de esta Comunidad',
    /*
     * Move group
     */
    'au_subgroups:move:edit:title' => "Hacer de esta Comunidad un Grupo de Escritura de otra Comunidad",
    'au_subgroups:transfer:help' => "Puede definir esta Comunidad como un Grupo de Escritura de cualquier comunidad sobre la cual usted tenga permisos de edición. Si los usuarios no son miembros de la Comunidad padre, serán removidos de este Grupo de Escritura se les enviará una invitacion para unirse a la nueva Comunidad padre y a los Grupos de Escritura de ésta. <b>Esta operación tambien trasnferirá cualquier Grupo de Escritura de esta Comunidad</b>",
    'au_subgroups:search:text' => "Buscar Comunidades",
    'au_subgroups:search:noresults' => "No se encontraron Comunidades",
    'au_subgroups:error:timeout' => "Tiempo de búsqueda agotado",
    'au_subgroups:error:generic' => "Un error ha ocurrido con esta búsqueda",
    'au_subgroups:move:confirm' => "Está seguro que desea mover este Grupo de Escritura a otra Comunidad?",
    'au_subgroups:error:permissions' => "Usted debe tener permisos de edición para el Grupo de Escritura y para cada Comunidad padre hasta el nivel más alto.  Adicionalmente, una Comunidad no puede ser movida como Grupo de Escritura de sí misma.",
    'au_subgroups:move:success' => "Grupo de Escritura movido exitosamente",
    'au_subgroups:error:invalid:group' => "Identificador de Comunidad inválido",
    'au_subgroups:invite:body' => "Hola %s,

El Grupo de Escritura %s ha sido movido a la Comunidad %s.
Como actualmente usted no es miembro de la nueva Comunidad padre, ha sido removido
del mencionado Grupo de Escritura.  Usted ha sido invitado nuevamente a dicho Grupo. Al aceptar la invitación,
automáticamente se unirá como miembro de la nueva Comunidad padre.

Haga clic a continuación para ver sus invitaciones:

%s",
		'au_subgroups:invitations' => 'Invitaciones a Grupos de Escritura',
		'au_subgroups:invitations:pending' => 'Invitaciones a Grupos de Escritura (%s)',
		'au_subgroups:invitations:selecttoinvite' => "Para encontrar una persona, escriba una o más palabras. Si desea agregar a alguien que no es miembro de la red, escriba su dirección de correo electrónico y luego presione la tecla TAB.",
		'wgroups:invite:body' => "Hola %s,
		
%s le ha invitado a unirse al Grupo de Escritura '%s'. Haga clic a continuación para ver sus invitaciones:
		
%s",
		'wgroups:invitec:body' => "Hola %s,
		
%s le ha invitado a unirse al Grupo de Escritura '%s. Para aceptar, primero debe aceptar la invitación para unirse a la Comunidad  %s.

		Haga clic a continuación para ver sus invitaciones:
		
%s
\n
%s",
		
		'wgroups:invite:nouser:body' => "Hola,
		
Usted ha sido invitado por %s para unirse al Grupo de Escritura %s.  

Para acceder a la información y a todos los recursos de este Grupo, primero debe registrarse en %s

%s

ir a la Comunidad %s y dar clic en el boton de \"Unirse\":

%s

y, finalmente, solicitar unirse al Grupo de Escritura %s

%s",
		
		'groups:invite:nouser:body' => "Hola,
		
Usted ha sido invitado por %s para unirse a la Comunidad %s.  

Para acceder a la información y a todos los recursos disponibles, primero debe registrarse en %s

%s

y luego ir a la pagina de la Comunidad y hacer clic en el boton \"Unirse\":

%s
		",
		
		'groups:delete:subject:operator' => "Notificación de Eliminación de Comunidad",
		'groups:delete:body:operator' => "He eliminado la Comunidad %s.
		
		Mensaje enviado automáticamente a todos los moderadores",
		
		'au_subgroups:invitations:note' => "Use las teclas de derecha e izquierda, retroceso y suprimir para navegar o remover cajas, y arriba/abajo para navegar y añadir sugerencias.",
		
		/**
		 * Form fields
		 */
		"groups:members:new" => 'Añadir otro miembro',
		"groups:members:new:button" => 'Añadir miembro',
		"groups:members:selectone" => 'seleccione uno...',
		
		/**
		 * System messages
		 */
		"groups:members:added" => '%s exitosamente añadido como miembro del Grupo de Escritura',
		"groups:members:add:error" => 'No fue posible añadir a %s como miembro del Grupo de Escritura',
		"groups:members:owner_changed" => '%s es el nuevo propietario',
		"groups:members:change_owner:error" => 'Solo el propietario del Grupo de Escritura o Comunidad puede asignar un nuevo propietario',
		"groups:members:removed" => 'Miembro removido exitosamente',
		"wgroups:removeuser" => 'Remover del Grupo de Escritura',
		"wgroups:members" => 'Colaboradores del Grupo de Escritura',
		"wgroups:invite:title" => "Invitar personas a este Grupo de Escritura",
		
);

add_translation("es", $spanish);
