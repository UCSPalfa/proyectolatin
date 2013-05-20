<?php



$port = array(

    /**

     *  Admin menu elements

     */

    'admin:hj' => 'Gerenciar hJ',

    'admin:hj:approve' => 'Aprovar',

    'admin:hj:categories' => 'Categorias',

    'admin:hj:comments' => 'Comentários',

    'admin:hj:companies' => 'Companias',

    'admin:hj:connections' => 'Conexões',

    'admin:hj:formbuilder' => 'Construtor de Formulários',

    'admin:hj:framework' => 'Framework',

    'admin:hj:jobs' => 'Trabalhos',

    'admin:hj:linkedinservice' => 'LinkedInService',

    'admin:hj:livesearch' => 'LiveSearch',

    'admin:hj:portfolio' => 'Portfolio',

    'admin:hj:styler' => 'Estilizador',

    /**

     * Subtype names

     */

    'item:object:hjform' => 'Formulário',

	'items:object:hjform' => 'Formulários',



    'item:object:hjfield' => 'Campo de formulário',

	'items:object:hjfield' => 'Campos de formulários',



    'item:object:hjformsubmission' => 'Submissão de formulário',

	'items:object:hjformsubmission' => 'Submissão de formulário',



    'item:object:hjfile' => 'Arquivo',

	'items:object:hjfile' => 'Arquivos',



	'item:object:hjfilefolder' => 'Pasta de Arquivos',

	'items:object:hjfilefolder' => 'File Folders',



    'item:object:hjportfolio' => 'Portfolio',

	'items:object:hjportfolio' => 'Portfolios',



    'item:object:hjexperience' => 'Experiência de trabalho',

	'items:object:hjexperience' => 'Experiências de trabalho',



    'item:object:hjeducation' => 'Educação',

	'items:object:hjeducation' => 'Educação',



    'item:object:hjskill' => 'Habilidade',

	'items:object:hjskill' => 'Habilidades',



    'item:object:hjlanguage' => 'Linguagem',

	'items:object:hjlanguage' => 'Linguagens',



	'item:object:hjannotation' => 'Interação',

	'items:object:hjannotation' => 'Interações',

    /**

     * River Items

     */

    'river:create:object:hjfile' => '%s adicionou um novo arquivo %s',

    'river:update:object:hjfile' => '%s fez um upload de um arquivo %s',

    /**

     * Form Builder Actions

     */

    'hj:formbuilder:form:savesuccess' => 'Seu formulário foi salvo com sucesso',

    'hj:formbuilder:form:saveerror' => 'Seu formulário não pode ser salvo',

    'hj:formbuilder:form:delete:success' => 'Formulário foi deletado com sucesso',

    'hj:formbuilder:form:delete:error' => 'Formulário não pode ser deletado',

    'hf:formcheck:fieldmissing' => 'Um ou mais arquivos pricipais estão faltando',

    'hj:formbuilder:field:savesuccess' => 'Campo foi salvo com sucesso',

    'hj:formbuilder:field:delete:success' => 'Campo foi salvo com sucesso',

    'hj:formbuilder:field:delete:error' => 'Ocorreu um problema ao deletar este formulário',

    'hj:formbuilder:field:save:success' => 'Campo foi deletado com sucesso',

    'hj:formbuilder:field:save:error' => 'Campo não pode ser salvo',

    'hj:formbuilder:submit:success' => 'Mudanças submetidas',

    'hj:formbuilder:submit:error' => 'Este formulário não pode ser submetido',

    'hj:formbuilder:formsubmission:subject' => 'Nova submissão de formulário: %s',

    'hj:formbuilder:formsubmission:body' => 'Esta submissão contém os seguintes detalhes: <br /><br /> %s <br /><br />Visualizar todas as submissões para este formulário em: %s',

    'hj:formbuilder:field:protected' => 'Este campo está protegido e não pode ser deletado',

    'hj:framework:formcheck:fieldmissing' => 'Ao menos um arquivo obrigatório está faltando. Por favor complete todos os campos requiridos marcados com uma estrela vermelha',

    /**

     * AJAX interface

     */

    'hj:framework:denied' => 'Acesso negado',

    'hj:framework:ajax:noentity' => 'Atualmente não há nada a ser mostrado',

    'hj:framework:ajax:empty' => 'Desculpe, não podemos encontrar a informação que você está procurando',

    /**

     * Actions

     */

    'hj:framework:entity:delete:success' => 'Completado com sucesso',

    'hj:framework:entity:delete:error' => 'Ocorreu um erro ao deletar esta instancia',

    'hj:framework:widget:add:success' => 'Seleção adicionada. Por favor atualize os arquivos de seleção',

    'hj:framework:widget:add:failure' => "Não podemos adicionar a seleção",



    /**

     * UI

     */

    'hj:framework:fullview' => 'Veja mais',

    'hj:framework:download' => 'Download',

    'hj:framework:addnew' => 'Adicionar',

    'hj:framework:refresh' => 'Atualizar',

    'hj:framework:gallery' => 'Visualizar galeria',

    'hj:framework:gallerytitle' => "Detalhes para %s",

    'hj:framework:addwidget' => 'Adicionar Seção',

    'hj:framework:download' => 'Download',

    'hj:framework:edit' => 'Editar',

    'hj:framework:delete' => 'Deletar',

    'hj:framework:email' => 'Enviar por email',

    'hj:framework:print' => 'Versão para impressão',

    'hj:framework:pdf' => 'Salvar como PDF',

    /**

     * Page Handlers

     */

    'hj:framework:denied' => 'Desculpe, não podemos te mostrar esta página',

    'hj:framework:print:title' => 'Imprimir: %s',

    'hj:framework:pdf:title' => 'PDF exportar de %s',

    /**

     * Files

     */

    'hj:framework:newfolder' => 'Nova pasta',

    'hj:framework:filefolder' => '<b>Pasta:</b> %s',

    'hj:framework:filename' => '<b>Nome do arquivo:</b>  %s',

    'hj:framework:simpletype' => '<b>Tipo:</b> %s',

    'hj:framework:filesize' => '<b>Tamanho:</b> %s',



    /**

     * hypeJunction

     */

    'hj:framework:disabled' => '%s foi desabilitado para evitar inconscistencias nas operações do site. Por favor habilite hypeFramework antes de ativar %s',



    /**

     * Forms

     */

    'hj:label:hjportfoliofile:title' => 'Título',

    'hj:label:hjportfoliofile:description' => 'Descrição',

    'hj:label:hjportfoliofile:tags' => 'Tags',

    'hj:label:hjportfoliofile:filefolder' => 'Pasta de arquivos',

    'hj:label:hjportfoliofile:newfilefolder' => 'Nova pasta',

    'hj:label:hjportfoliofile:fileupload' => 'Arquivo',

    'hj:label:hjportfoliofile:access_id' => 'Visibilitade',



    'hj:label:hjlanguage:language' => 'Linguagem',

    'hj:label:hjlanguage:proficiency' => 'Profiencia de Linguagem',

    'hj:label:hjlanguage:access_id' => 'Visibilidade',



    'hj:label:hjskill:title' => 'Habilidade',

    'hj:label:hjskill:access_id' => 'Visibilidade',



    'hj:label:hjeducation:title' => 'Graduação',

    'hj:label:hjeducation:schoolname' => 'Escola',

    'hj:label:hjeducation:fieldofstudy' => 'Campo de estudo',

    'hj:label:hjeducation:startdate' => 'Data de inscrição',

    'hj:label:hjeducation:enddate' => 'Data de graduação',

    'hj:label:hjeducation:activities' => 'Atividade/Clubes',

    'hj:label:hjeducation:description' => 'Notas adicionais',

    'hj:label:hjeducation:access_id' => 'Visibilidade',



    'hj:label:hjexperience:title' => 'Cargo',

    'hj:label:hjexperience:companyname' => 'Nome da empresa',

    'hj:label:hjexperience:industries' => 'Industria(s)',

    'hj:label:hjexperience:location' => 'Cidade',

    'hj:label:hjexperience:startdate' => 'Data de início',

    'hj:label:hjexperience:enddate' => 'Data de fim',

    'hj:label:hjexperience:description' => 'Descrição do cargo',

    'hj:label:hjexperience:access_id' => 'Visibilidade',



    'hj:label:hjsegment:title' => 'Título',

    'hj:label:hjsegment:description' => 'Descrição',

    'hj:label:hjsegment:access_id' => 'Visibilidade',



    'hj:framework:embed:options' => 'Adicionar opções',

    'hj:framework:embed:type' => 'Tipo:  ',

    'hj:framework:embed:float' => 'Float:  ',

    'hj:framework:embed:float' => 'Link para anexar: ',

    'hj:framework:embed:url' => 'Link para seguir:  ',



    'hj:embed:link' => 'Link',

    'hj:embed:small' => 'Pequeno',

    'hj:embed:medium' => 'Médio',

    'hj:embed:large' => 'Grande',



    'hj:embed:none' => 'Nenhum',

    'hj:embed:right' => 'Direito',

    'hj:embed:left' => 'Esquerdo',



    /**

     * AJAX / JS

     */

    'hj:framework:processing' => 'Processando...',

    'hj:framework:success' => 'Completado com sucesso',

    'hj:framework:error' => 'Alguma coisa deu errado',



    /* AO: Abril 16, añadidas traducciones*/

    'hj:framework:deleted' => "O comentário foi deletado com sucesso.",

    'hj:framework:notdeleted' => "Desculpe. Nós não podemos deletar este comentário.",

    'hj:framework:deletequestion' => "Você tem trabalho?",

    /* AO*/



	'hj:framework:pagination:loadmore' => 'Mostrar mais',

);





add_translation("pt", $port);

?>
