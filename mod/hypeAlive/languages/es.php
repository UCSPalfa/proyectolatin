<?php

$spanish = array(
    /**
     * Comments
     */
    'hj:alive:comments:likebutton' => 'Me gusta',
    'hj:alive:comments:unlikebutton' => 'Ya no me gusta',
    'hj:alive:comments:commentsbutton' => 'Comentar',
    'hj:alive:comments:sharebutton' => 'Compartir',
    'hj:alive:comments:viewall' => 'Ver los %s comentarios',
    'hj:alive:comments:remainder' => 'Ver los %s comentarios restantes',
    'hj:alive:comments:nocomments' => 'Comentar primero',
    'hj:comment:commenton' => 'Comentar sobre %s',
    'hj:alive:comments:valuecantbeblank' => 'El comentario no puede estar vacío',

    'hj:alive:comments:lang:you' => 'A ti ',
    'hj:alive:comments:lang:and' => 'y ',
    'hj:alive:comments:lang:others' => 'otras personas ',
    'hj:alive:comments:lang:othersone' => 'otra persona ',
    'hj:alive:comments:lang:people' => 'personas ',
    'hj:alive:comments:lang:peopleone' => 'persona ',
    'hj:alive:comments:lang:likethis' => 'les gusta esto',
    'hj:alive:comments:lang:likesthis' => 'le gusta esto',
	'hj:alive:comments:lang:likethisone' => 'te gusta esto',

    'hj:alive:comments:count' => 'comentarios',
    'hj:alive:comments:comments' => 'comentarios',
    'hj:alive:comments:delete' => 'Eliminar',
    'hj:alive:comments:newcomment' => 'Escribir un comentario',

    'hj:alive:comments:addtopic' => 'Añadir nuevo tema de discusión',
    'hj:alive:comments:forumtopictitle' => 'Escriba el título de su tema de discusión...',
    'hj:alive:comments:forumtopicdescription' => 'Escriba la descripción de su tema de discusión...',
    'eComents:forumtopicaddbutton' => 'Añadir',

    'hj:alive:comments:commentmissing' => 'No ha ingresado su comentario',
    'hj:alive:comments:bodymissing' => 'No ha ingresado ningún texto',
    'hj:alive:comments:topicmissing' => 'Debe especificar un nombre para su discusión',

    'hj:alive:comments:commenton' => 'Comentar sobre %s',
    'hj:alive:comments:commentcontent' => '%s: %s',
	'hj:alive:comment_on:river' => 'Comentar sobre la actividad: %s',

    'hj:comments:cantfind' => 'Hubo un problema al intentar añadir su comentario. El ítem debe haber sido eliminado',
    'hj:comments:savesuccess' => 'Su comentario fue añadido exitosamente',
    'hj:comments:refreshing' => 'Actualizando...',

    'hj:likes:savesuccess' => 'Ahora le gusta esto',
    'hj:likes:saveerror' => 'Ha ocurrido un error',
    'hj:likes:likeremoved' => 'Ya no le gusta',

    /**
     * NOTIFICATIONS
     */
    'hj:comments:notify:activity_type:create' => 'Nuevo %s %s añadido',
    'hj:comments:notify:activity_type:update' => 'Actualizar a %s %s',
    'hj:comments:notify:activity' => 'actividad | <br />%s',

    'hj:comments:notify:post' => 'contenido | %s %s',

    // Level 1
    'generic_comment:email:level1:subject' => 'Usted tiene un nuevo comentario',
    'generic_comment:email:level1:body' =>
            "Usted tiene un nuevo comentario de %s en su %s: <br />
                <br />
                <b>%s</b><br />
                <br />

                Puede responder aquí: <br />
                %s.
            ",

    // Level 2
    'generic_comment:email:level2:subject' => 'Nuevo comentario en un hilo de la discusión',
    'generic_comment:email:level2:body' =>
            "Hay un nuevo comentario de %s en una discusión sobre %s: <br />
                <br />
                <b>%s</b><br />
                <br />

                Puede responder aquí: <br />
                %s.
            ",

    'group_topic_post:email:level1:subject' => 'Nueva publicación en su tema de discusión de grupo',
    'group_topic_post:email:level1:body' =>
            "Usted tiene una nueva publicación de %s en su %s: <br />
                <br />
                <b>%s</b><br />
                <br />

                Puede responder aquí: <br />
                %s.
            ",

    'group_topic_post:email:level2:subject' => 'Nueva publicación en tema de grupo',
    'group_topic_post:email:level2:body' =>
            "Hay una nueva publicación de %s en una discusión sobre %s: <br />
                <br />
                <b>%s</b><br />
                <br />

                Puede responder aquí: <br />
                %s.
            ",

    // Level 1
    'likes:email:level1:subject' => 'A alguien le gusta su publicación',
    'likes:email:level1:body' =>
            "%s le gusta su %s <br />
            ",

    // Level 2
    'likes:email:level2:subject' => 'A alguien le gusta el hilo de una discusión',
    'likes:email:level2:body' =>
            "%s le gusta una de las respuestas en una discusión sobre %s<br />
                <br />
            ",

    /**
     * LiveSearch
     */
    'hj:alive:search:user' => 'Usuarios',
    'hj:alive:search:group' => 'Grupos',
    'hj:alive:search:blog' => 'Blogs',
    'hj:alive:search:bookmarks' => 'Favoritos',
    'hj:alive:search:file' => 'Archivos',

	'search_types:group_topic_posts' => 'Publicaciones en la discusión',
	'hj:alive:reply_to' => 'Responder al tema "%s" en grupo "%s"',
);

add_translation("es", $spanish);

?>
