<?php



$port = array(

    /**

     * Comments

     */

    'hj:alive:comments:likebutton' => 'Curtir',

    'hj:alive:comments:unlikebutton' => 'Não curti',

    'hj:alive:comments:commentsbutton' => 'Comentar',

    'hj:alive:comments:sharebutton' => 'Compartilhar',

    'hj:alive:comments:viewall' => 'Ver todos os comentários de %s',

    'hj:alive:comments:remainder' => 'Ver comentários restantes de %s',

    'hj:alive:comments:nocomments' => 'Seja o primeiro a comentar',

    'hj:comment:commenton' => 'Comentar em %s',

    'hj:alive:comments:valuecantbeblank' => 'O Comentário não pode ser deixado em branco',



    'hj:alive:comments:lang:you' => 'Você ',

    'hj:alive:comments:lang:and' => 'e ',

    'hj:alive:comments:lang:others' => 'outras pessoas ',

    'hj:alive:comments:lang:othersone' => 'outra pessoa ',

    'hj:alive:comments:lang:people' => 'pessoas ',

    'hj:alive:comments:lang:peopleone' => 'pessoa ',

    'hj:alive:comments:lang:likethis' => 'curtiu disso',

    'hj:alive:comments:lang:likesthis' => 'curtiu disso',





    'hj:alive:comments:count' => 'comentários',

    'hj:alive:comments:comments' => 'comentários',

    'hj:alive:comments:delete' => 'Excluir',

    'hj:alive:comments:newcomment' => 'Escreva um comentário',



    'hj:alive:comments:addtopic' => 'Adicionar um novo tópico',

    'hj:alive:comments:forumtopictitle' => 'Insira o tírulo do fórum...',

    'hj:alive:comments:forumtopicdescription' => 'Insira a mensagem do fórum...',

    'eComents:forumtopicaddbutton' => 'Adicionar',



    'hj:alive:comments:commentmissing' => 'Oh, você não comentou.',

    'hj:alive:comments:bodymissing' => 'Oh, você não digitou texto algum',

    'hj:alive:comments:topicmissing' => 'Oh, você precisa digitar um nome para o seu tópico do fórum.',



    'hj:alive:comments:commenton' => 'Comentar em %s',

    'hj:alive:comments:commentcontent' => '%s: %s',

	'hj:alive:comment_on:river' => 'Comentar numa atividade: %s',



    'hj:comments:cantfind' => 'Ops, houve um problema na publicação do seu comentário. O item deve ter sido excluído.',

    'hj:comments:savesuccess' => 'Seu comentário foi postado com sucesso',

    'hj:comments:refreshing' => 'Atualizando...',



    'hj:likes:savesuccess' => 'Agora você curte isso',

    'hj:likes:saveerror' => 'Desculpe, não pudemos processar o seu "curtir"',

    'hj:likes:likeremoved' => 'O seu "curtir" foi removido',



    /**

     * NOTIFICATIONS

     */

    'hj:comments:notify:activity_type:create' => 'Novo %s %s adicionado',

    'hj:comments:notify:activity_type:update' => 'Atualizações para %s %s',

    'hj:comments:notify:activity' => 'atividade | <br />%s',



    'hj:comments:notify:post' => 'conteúdo | %s %s',



    // Level 1

    'generic_comment:email:level1:subject' => 'Você tem um novo comentário',

    'generic_comment:email:level1:body' =>

            "Você tem um novo comentário de %s no seu %s: <br />

                <br />

                <b>%s</b><br />

                <br />



                Você pode responder aqui: <br />

                %s.

            ",



    // Level 2

    'generic_comment:email:level2:subject' => 'Novo comentário em uma thread de discussão',

    'generic_comment:email:level2:body' =>

            "Há um novo comentário de %s numa discussão em %s: <br />

                <br />

                <b>%s</b><br />

                <br />



                Você pode responder aqui: <br />

                %s.

            ",



    'group_topic_post:email:level1:subject' => 'Novo post no seu tópico do grupo',

    'group_topic_post:email:level1:body' =>

            "Você tem um novo post de %s no seu %s: <br />

                <br />

                <b>%s</b><br />

                <br />



                Você pode responder aqui: <br />

                %s.

            ",



    'group_topic_post:email:level2:subject' => 'Novo post no tópico do grupo',

    'group_topic_post:email:level2:body' =>

            "Há um novo post de %s numa discussão em %s: <br />

                <br />

                <b>%s</b><br />

                <br />



                Você pode responder aqui: <br />

                %s.

            ",



    // Level 1

    'likes:email:level1:subject' => 'Você tem um novo "curtir"',

    'likes:email:level1:body' =>

            "%s gostou do seu %s <br />

            ",



    // Level 2

    'likes:email:level2:subject' => 'Novo "curtir" numa thread de discussão',

    'likes:email:level2:body' =>

            "%s gostou de uma das respostas numa discussão em %s<br />

                <br />

            ",



    /**

     * LiveSearch

     */

    'hj:alive:search:user' => 'Usuários',

    'hj:alive:search:group' => 'Grupos',

    'hj:alive:search:blog' => 'Blogs',

    'hj:alive:search:bookmarks' => 'Bookmarks',

    'hj:alive:search:file' => 'Arquivos',



	'search_types:group_topic_posts' => 'Posts de discussão',

	'hj:alive:reply_to' => 'Responder ao tópico "%s" no grupo "%s"',

);



add_translation("pt", $port);



?>
