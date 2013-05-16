<?php

/**

 * Core English Language

 *

 * @package Elgg.Core

 * @subpackage Languages.English

 */



$port = array(

    

    

    	'search:communities' => 'Procurar por comunidades',

        'view:all' => "Ver todas",

        'popular:communities' => "Populares",

        'latin:communities' => "Comunidades LATIn",

        'latin:invitation' => "Você gostaria de colaborar e compartilhar suas ideias com pessoas do mundo todo?",

        'latin:login_reister' => "Efetue login ou cadastre-se",

        'latin:login' => "Login",

        'latin:or' => "ou",

        'latin:register' => "Cadastre-se",

        'latin:now' => "agora",

    

    

    

/**

 * Sites

 */



	'item:site' => 'Sites',



/**

 * Sessions

 */



	'login' => "Log in",

	'loginok' => "Você está logado.",

	'loginerror' => "Nós não pudemos efetuar seu login. Por favor, verifique suas credenciais e tente novamente.",

	'login:empty' => "Nome de usuário/email e senha são necessários.",

	'login:baduser' => "Não foi possível carregar sua conta de usuário.",

	'auth:nopams' => "Erro interno. Nenhum método de autenticação de usuário instalado.",



	'logout' => "Sair",

	'logoutok' => "Você foi desconectado.",

	'logouterror' => "Nós não pudemos efetuar o logout. Por favor, tente novamente.",



	'loggedinrequired' => "Você deve estar logado para visualizar esta página.",

	'adminrequired' => "Você deve ser administrador para visualizar esta página.",

	'membershiprequired' => "Você deve ser um membro deste grupo para visualizar esta página.",





/**

 * Errors

 */

	'exception:title' => "Erro fatal.",

	'exception:contact_admin' => 'Um erro irecuperável ocorreu e foi registrado. Contate o administrador do site com a seguinte informação:',



	'actionundefined' => "A ação solicitada (%s) não foi definida no sistema.",

	'actionnotfound' => "O arquivo da ação para %s não foi encontrado.",

	'actionloggedout' => "Desculpe, você não pode realizar esta ação se não estiver logado.",

	'actionunauthorized' => 'Você não está autorizado a realizar esta ação',



	'InstallationException:SiteNotInstalled' => 'Não foi possível tratar esta solicitação. Este site '

		. ' não está configurado ou o banco de dados caiu.',

	'InstallationException:MissingLibrary' => 'Não foi possível carregar %s',

	'InstallationException:CannotLoadSettings' => 'O Elgg não pôde carregar o arquivo de configurações. Ele não existe ou há um problma com a permissão do arquivo.',



	'SecurityException:Codeblock' => "Acesso negado para executar este bloco de código",

	'DatabaseException:WrongCredentials' => "O Elgg não pôde se conectar ao banco de dados usando as credenciais dadas. Verifique o arquivo de configurações.",

	'DatabaseException:NoConnect' => "O Elgg não pode selecionar o banco de dados '%s', por favor, verifique se o banco de dados foi criado e se você tem acesso à ele.",

	'SecurityException:FunctionDenied' => "Acesso à função privilegiada '%s' foi negado.",

	'DatabaseException:DBSetupIssues' => "Houveram alguns problemas: ",

	'DatabaseException:ScriptNotFound' => "O Elgg não pôde encontrar o script de banco de dados solicitado em %s.",

	'DatabaseException:InvalidQuery' => "Query inválida",

	'DatabaseException:InvalidDBLink' => "A conexão com o banco de dados foi perdida.",



	'IOException:FailedToLoadGUID' => "Falha ao carregar novo %s a partir de GUID:%d",

	'InvalidParameterException:NonElggObject' => "Passando um não ElggObject para um construtor ElggObject!",

	'InvalidParameterException:UnrecognisedValue' => "Valor não reconhecido passado para o construtor.",



	'InvalidClassException:NotValidElggStar' => "GUID:%d não é um válido %s",



	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) é um plugin mal configurado. Ele foi desabiitado. Por favor, procure na Elgg wiki por possíveis causas (http://docs.elgg.org/wiki/).",

	'PluginException:CannotStart' => '%s (guid: %s) Não pôde ser iniciado e foi desativado. Razão: %s',

	'PluginException:InvalidID' => "%s é um ID de plugin inválido.",

	'PluginException:InvalidPath' => "%s é um caminho de plugin inválido.",

	'PluginException:InvalidManifest' => 'Arquivo de manifesto inválido para o plugin %s',

	'PluginException:InvalidPlugin' => '%s não é um plugin válido.',

	'PluginException:InvalidPlugin:Details' => '%s não é um plugin válido: %s',

	'PluginException:NullInstantiated' => 'ElggPlugin não pôde ser instanciado. Você deve passar um GUID, um ID de plugin, ou um caminho completo.',



	'ElggPlugin:MissingID' => 'Faltando ID do plugin (guid %s)',

	'ElggPlugin:NoPluginPackagePackage' => 'Faltando ElggPluginPackage Para o ID do plugin %s (guid %s)',



	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'O arquivo solicitado "%s" está faltando.',

	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Seu manifesto contém um tipo inválido de dependência "%s".',

	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Seu manifesto contém um tipo inválido de provedor "%s".',

	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Há uma dependência %s inválida "%s" no plugin %s.  Plugins não podem entrar em conflito ou solicitar algo que eles mesmos fornecem!',



	'ElggPlugin:Exception:CannotIncludeFile' => 'Não é possível incluir %s para o plugin %s (guid: %s) em %s.',

	'ElggPlugin:Exception:CannotRegisterViews' => 'Não é possível abrir as visualizações de diretório para plugin %s (guid: %s) at %s.',

	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Não é possível cadastrar idiomas para o plugin %s (guid: %s) at %s.',

	'ElggPlugin:Exception:NoID' => 'Nenhum ID para o plugin guid %s!',



	'PluginException:ParserError' => 'Erro durante conversão do manifesto com a versão da API %s no plugin %s.',

	'PluginException:NoAvailableParser' => 'Não foi possível encontrar um parser para o manifesto desta versão da API %s no plugin %s.',

	'PluginException:ParserErrorMissingRequiredAttribute' => "Falta atributo necessário '%s' no manifesto para o %s.",



	'ElggPlugin:Dependencies:Requires' => 'Solicita',

	'ElggPlugin:Dependencies:Suggests' => 'Sugere',

	'ElggPlugin:Dependencies:Conflicts' => 'Conflita',

	'ElggPlugin:Dependencies:Conflicted' => 'Em Conflito',

	'ElggPlugin:Dependencies:Provides' => 'Fornece',

	'ElggPlugin:Dependencies:Priority' => 'Prioridade',



	'ElggPlugin:Dependencies:Elgg' => 'Versão do Elgg',

	'ElggPlugin:Dependencies:PhpExtension' => 'Extensão PHP: %s',

	'ElggPlugin:Dependencies:PhpIni' => 'configuração ini PHP: %s',

	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',

	'ElggPlugin:Dependencies:Priority:After' => 'Depois %s',

	'ElggPlugin:Dependencies:Priority:Before' => 'Antes %s',

	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s não está instalado',

	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Faltando',



	'ElggPlugin:InvalidAndDeactivated' => '%s é um plugin inválido e foi desativado.',



	'InvalidParameterException:NonElggUser' => "Passando um não ElggUser para um construtor ElggUser!",



	'InvalidParameterException:NonElggSite' => "Passando um não ElggSite para um contrutor ElggSite!",



	'InvalidParameterException:NonElggGroup' => "Passando um não ElggGroup para um contrutor ElggGroup!",



	'IOException:UnableToSaveNew' => "Não foi possível salvar novo %s",



	'InvalidParameterException:GUIDNotForExport' => "GUID não foi especificado durante exportação, isto não deveria acontecer.",

	'InvalidParameterException:NonArrayReturnValue' => "Função de serialização da entidade passou um parâmetro de retorno não-array",



	'ConfigurationException:NoCachePath' => "Caminho do cache definido como nenhum!",

	'IOException:NotDirectory' => "%s não é um diretório.",



	'IOException:BaseEntitySaveFailed' => "Não foi possível salvar informações da entidade de base do novo objeto!",

	'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",

	'InvalidParameterException:EntityTypeNotSet' => "O tipo de entidade deve ser definido.",



	'ClassException:ClassnameNotClass' => "%s não é um %s.",

	'ClassNotFoundException:MissingClass' => "A classe '%s' não foi encontrada, está faltando plugin?",

	'InstallationException:TypeNotSupported' => "O tipo %s não é suportado. Isto indica um erro na sua instalação, provavlmente causado por uma atualização incompleta.",



	'ImportException:ImportFailed' => "Não foi possível importar elemento %d",

	'ImportException:ProblemSaving' => "Houve um problema enquanto %s era salvo",

	'ImportException:NoGUID' => "A nova entidade criada não tem GUID, isto não deveria acontecer.",



	'ImportException:GUIDNotFound' => "Entidade '%d' não pôde ser encontrada.",

	'ImportException:ProblemUpdatingMeta' => "Houve um problema durante atualização '%s' na entidade '%d'",



	'ExportException:NoSuchEntity' => "Nenhuma entidade GUID:%d",



	'ImportException:NoODDElements' => "Nenhum elemento OpenDD encontrados na importação de dados, a importação falhou.",

	'ImportException:NotAllImported' => "Nem todos os elementos foram importados.",



	'InvalidParameterException:UnrecognisedFileMode' => "Modo de arquivo não reconhecido '%s'",

	'InvalidParameterException:MissingOwner' => "O Arquivo %s (file guid:%d) (owner guid:%d) está sem proprietário!",

	'IOException:CouldNotMake' => "Não foi possível fazer %s",

	'IOException:MissingFileName' => "Você deve especificar um nome antes de abrir um arquivo.",

	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Não foi possível carregar classe %s para o arquivo %u",

	'NotificationException:NoNotificationMethod' => "Nenhum método de notificação especificado.",

	'NotificationException:NoHandlerFound' => "Nenhum tratador encontrado para '%s' ou não era possível chamá-lo.",

	'NotificationException:ErrorNotifyingGuid' => "Houve um erro durante notificação para %d",

	'NotificationException:NoEmailAddress' => "Não foi possível obter os endereços de email para GUID:%d",

	'NotificationException:MissingParameter' => "Parâmetro necessário está faltando, '%s'",



	'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",

	'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",

	'DatabaseException:UnspecifiedQueryType' => "Tipo de query não especificado ou não reconhecido.",

	'DatabaseException:NoTablesSpecified' => "Nenhuma tabela especificada para esta query.",

	'DatabaseException:NoACL' => "Nenhum controle de acesso foi forncecido na query",



	'InvalidParameterException:NoEntityFound' => "Nenhuma entidade encontrada, ela não exister ou você não possui acesso à ela.",



	'InvalidParameterException:GUIDNotFound' => "GUID:%s não pôde ser encontrada, ou você não pode acessá-la.",

	'InvalidParameterException:IdNotExistForGUID' => "Desculpe, '%s' não existe para guid:%d",

	'InvalidParameterException:CanNotExportType' => "Desculpe, Eu não sei como exportar '%s'",

	'InvalidParameterException:NoDataFound' => "Não foi possível encontrar nenhum dado.",

	'InvalidParameterException:DoesNotBelong' => "Não pertence à entidade.",

	'InvalidParameterException:DoesNotBelongOrRefer' => "Não pertence ou se refere à entidade.",

	'InvalidParameterException:MissingParameter' => "Parâmetro faltando, você precisa fornecer um.",

	'InvalidParameterException:LibraryNotRegistered' => '%s não é uma biblioteca registrada',

	'InvalidParameterException:LibraryNotFound' => 'Nao foi possível carregar a biblioteca %s de %s',



	'APIException:ApiResultUnknown' => "O Resultado da API é de um tipo desconhecido, isto não deveria acontecer.",

	'ConfigurationException:NoSiteID' => "Nenhum ID de site foi especificado.",

	'SecurityException:APIAccessDenied' => "Desculpe, o acesso à API foi desabilitado pelo administrador.",

	'SecurityException:NoAuthMethods' => "Nenhum método de autenticação que possa autenticar esta solicitação da API foi encontrado.",

	'SecurityException:ForwardFailedToRedirect' => 'O redirecionamento não pôde ser feito porque os cabeçalhos já foram enviados. Redirect could not be issued due to headers already being sent. Retendo execução por segurança. Procure http://docs.elgg.org/ para mais informações.',

	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Método ou função não definidos na chamada de expose_method()",

	'InvalidParameterException:APIParametersArrayStructure' => "Parameters array structure is incorrect for call to expose method '%s'",

	'InvalidParameterException:UnrecognisedHttpMethod' => "Método http não reconhecido %s para o método da API '%s'",

	'APIException:MissingParameterInMethod' => "Parâmetro %s  faltando no método %s",

	'APIException:ParameterNotArray' => "%s não parece ser um array.",

	'APIException:UnrecognisedTypeCast' => "Tipo não reconhecido no cast %s para variável '%s' no método '%s'",

	'APIException:InvalidParameter' => "Parâmetro inválido enocntrado para '%s' no método '%s'.",

	'APIException:FunctionParseError' => "%s(%s) tem um erro de conversão.",

	'APIException:FunctionNoReturn' => "%s(%s) não retornou nenhum valor.",

	'APIException:APIAuthenticationFailed' => "Chamada do método falhou na Autenticação da API",

	'APIException:UserAuthenticationFailed' => "Chamada do método falhou na Autenticação de Usuário",

	'SecurityException:AuthTokenExpired' => "Token de autenticação faltando, inválido ou expirou.",

	'CallException:InvalidCallMethod' => "%s deve ser chamado usando '%s'",

	'APIException:MethodCallNotImplemented' => "Chamada do método '%s' não foi implementada.",

	'APIException:FunctionDoesNotExist' => "Função para o método '%s' não pode ser chamada",

	'APIException:AlgorithmNotSupported' => "Algoritimo '%s' não é suportado ou foi desabilitado.",

	'ConfigurationException:CacheDirNotSet' => "Diretório do cache 'cache_path' não definido.",

	'APIException:NotGetOrPost' => "Método de solicitação deve ser GET ou POST",

	'APIException:MissingAPIKey' => "Chave da API faltando",

	'APIException:BadAPIKey' => "Chave da API inválida",

	'APIException:MissingHmac' => "Cabeçalho X-Elgg-hmac faltando",

	'APIException:MissingHmacAlgo' => "Cabeçalho X-Elgg-hmac-algo faltando",

	'APIException:MissingTime' => "Cabeçalho X-Elgg-time faltando",

	'APIException:MissingNonce' => "Cabeçalho X-Elgg-nonce faltando",

	'APIException:TemporalDrift' => "X-Elgg-time está muito longe no passado ou futuro. Falha de época.",

	'APIException:NoQueryString' => "Nenhum dado na string da query",

	'APIException:MissingPOSTHash' => "Cabeçalho X-Elgg-posthash faltando",

	'APIException:MissingPOSTAlgo' => "Cabeçalho X-Elgg-posthash_algo faltand",

	'APIException:MissingContentType' => "Tipo de conteúdo faltando para postar dados",

	'SecurityException:InvalidPostHash' => "Hash de dados POST é inválido - Esperado %s mas tem %s.",

	'SecurityException:DupePacket' => "Assinatura do pacote já vista.",

	'SecurityException:InvalidAPIKey' => "Chave da API faltando ou inválida.",

	'NotImplementedException:CallMethodNotImplemented' => "Método de chamada '%s' não é suportado atualmente.",



	'NotImplementedException:XMLRPCMethodNotImplemented' => "Chamada do método XML-RPC '%s' não implementada.",

	'InvalidParameterException:UnexpectedReturnFormat' => "Chamada ao método '%s' retornou um resultado inesperado.",

	'CallException:NotRPCCall' => "A chamada não parece ser uma chamada XML-RPC válida",



	'PluginException:NoPluginName' => "O nome do plugin não pôde ser encontrado",



	'SecurityException:authenticationfailed' => "O usuário não pôde ser autenticado",



	'CronException:unknownperiod' => '%s não é um período reconhecido.',



	'SecurityException:deletedisablecurrentsite' => 'Você não pode excluir ou desabilitar o site que você está atualmente visulizando!',



	'RegistrationException:EmptyPassword' => 'Os campos de senha não podem ficar vazios',

	'RegistrationException:PasswordMismatch' => 'As senhas devem corresponder uma à outra',

	'LoginException:BannedUser' => 'Você foi banido deste site e não pode efetuar login',

	'LoginException:UsernameFailure' => 'Nós não pudemos efetuar seu login. Por favor, verifique seu nome de usuário/email e senha.',

	'LoginException:PasswordFailure' => 'Nós não pudemos efetuar seu login. Por favor, verifique seu nome de usuário/email e senha.',

	'LoginException:AccountLocked' => 'Sua conta foi trancada por possuir muitos registros de.',

	'LoginException:ChangePasswordFailure' => 'Falha na verificação da senha atual.',

	'LoginException:Unknown' => 'Nós não pudemos efetuar seu login devido a um erro desconhecido.',



	'deprecatedfunction' => 'Aviso: Este código utiliza a função obsoleta \'%s\' e não é compatível com esta versão do Elgg',



	'pageownerunavailable' => 'Aviso: O proprietário da página %d não é acessível!',

	'viewfailure' => 'Houve uma fala interna na visualização %s',

	'changebookmark' => 'Por favor, mude sua bookmark para esta página',

	'noaccess' => 'Você precisa estar logado para visualizar este conteúdo, o conteúdo foi excluído ou você não tem permissão para vê-lo.',

	'error:missing_data' => 'Houve alguns dados faltando na sua solicitação',



	'error:default' => 'Ops...algo deu errado.',

	'error:404' => 'Desculpe. Nós não pudemos encontrar a página que você solicitou.',



/**

 * API

 */

	'system.api.list' => "Listar todas as chamadas de API disponíveis no sistema.",

	'auth.gettoken' => "Esta chamada de API permite que um usuátio obtenha um token de identificação de usuário que pode ser usado para autenticar futuras chamadas de API. Passe-a como o parâmetro auth_token",



/**

 * User details

 */



	'name' => "Mostrar nome",

	'email' => "Endereço de email",

	'username' => "Nome de usuário",

	'loginusername' => "Nome de usuário ou email",

	'password' => "Senha",

	'passwordagain' => "Senha (novamente para verificação)",

	'admin_option' => "Fazer deste usuário administrador?",



/**

 * Access

 */



	'PRIVATE' => "Particular",

	'LOGGED_IN' => "Usuários logados",

	'PUBLIC' => "Público",

	'access:friends:label' => "Amigos",

	'access' => "Accesso",

	'access:limited:label' => "Limitado",

	'access:help' => "O nível de acesso",



/**

 * Dashboard and widgets

 */



	'dashboard' => "Dashboard",

	'dashboard:nowidgets' => "Sua dashboard permite que você localize atividades e conteúdo que te interessam neste site .",



	'widgets:add' => 'Adicionar widgets',

	'widgets:add:description' => "Clique em qualquer botão de widget abaxo para adicioná-lo à página.",

	'widgets:position:fixed' => '(Posição fixa na página)',

	'widget:unavailable' => 'Você já adicinou este widget',

	'widget:numbertodisplay' => 'Número de itens para exibir',



	'widget:delete' => 'Excluir %s',

	'widget:edit' => 'Personalizar este widget',



	'widgets' => "Widgets",

	'widget' => "Widget",

	'item:object:widget' => "Widgets",

	'widgets:save:success' => "O widget foi salvo com sucesso.",

	'widgets:save:failure' => "Não pudemos salvar o seu widget.",

	'widgets:add:success' => "O widget foi adicionado com sucesso.",

	'widgets:add:failure' => "Não pudemos adicionar o seuwidget.",

	'widgets:move:failure' => "Não pudemos armazenar a nova posição do widget.",

	'widgets:remove:failure' => "Não foi possível excluir este widget",



/**

 * Groups

 */



	'group' => "Grupp",

	'item:group' => "Grupos",



/**

 * Users

 */



	'user' => "Usuário",

	'item:user' => "Usários",



/**

 * Friends

 */



	'friends' => "Amigos",

	'friends:yours' => "Seus amigos",

	'friends:owned' => "Amigos de%s",

	'friend:add' => "Adicionar amigo",

	'friend:remove' => "Excluir amigo",



	'friends:add:successful' => "Você adicionou %s como amigo com sucesso.",

	'friends:add:failure' => "Não pudemos adicionar %s como amigo.",



	'friends:remove:successful' => "Você excluiu %s de seus amigos com sucesso.",

	'friends:remove:failure' => "Não pudemos excluir %s de seua amigos.",



	'friends:none' => "Nenhum amigo ainda.",

	'friends:none:you' => "Você ainda não tem amigos.",



	'friends:none:found' => "Nenhum amigos encontrado.",



	'friends:of:none' => "Ninguém adicionou este usuário como amigo ainda.",

	'friends:of:none:you' => "Ninguém te adicionou como amigo ainda. Comece adicionando conteúdo e preencha seu perfil para permitir que as pessoas te encontrem!",



	'friends:of:owned' => "Pessoas que adicionaram %s como amigo",



	'friends:of' => "Amigos de",

	'friends:collections' => "Coleções de amigos",

	'collections:add' => "Nova coleção",

	'friends:collections:add' => "Nova coleção de amigos",

	'friends:addfriends' => "Selecionar amigos",

	'friends:collectionname' => "Nome da coleção",

	'friends:collectionfriends' => "Amigos na coleção",

	'friends:collectionedit' => "Editar esta coleção",

	'friends:nocollections' => "Você ainda não tem coleções.",

	'friends:collectiondeleted' => "Sua coleção foi excluída.",

	'friends:collectiondeletefailed' => "Não foi possível excluir a coleção. Você não tem permissão para isso ou algum outro problema ocorreu.",

	'friends:collectionadded' => "Sua coleção foi criada com sucesso",

	'friends:nocollectionname' => "Você precisa nomear sua coleçao antes que ela possa ser criada.",

	'friends:collections:members' => "Membros da coleção",

	'friends:collections:edit' => "Editar coleção",

	'friends:collections:edited' => "Coleção salva",

	'friends:collection:edit_failed' => 'Não foi possível salvar a coleção.',



	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',



	'avatar' => 'Avatar',

	'avatar:create' => 'Crie o seu avatar',

	'avatar:edit' => 'Editar avatar',

	'avatar:preview' => 'Prévia',

	'avatar:upload' => 'Fazer upload de novo avatar',

	'avatar:current' => 'Avatar atual',

	'avatar:remove' => 'Excluir seu avatar e defini-lo como ícone padrão',

	'avatar:crop:title' => 'Ferramenta para cortar avatar',

	'avatar:upload:instructions' => "Seu avatar é mostrado por todo o site. Você pode mudá-lo quando quiser. (Formato de aquivos aceitos: GIF, JPG or PNG)",

	'avatar:create:instructions' => 'Clique e arraste um quadrado abaixo para selecionar como você quer que seu avatar seja cortado. Uma prévia aparecerá na caixa à direita. Quando você estiver satisfeito(a) com a prévia, clique  \'Criar seu avatar\'. Esta versão cortada será usada por todo o site como seu avatar.',

	'avatar:upload:success' => 'Upload do avatar concluído com sucesso',

	'avatar:upload:fail' => 'Upload do avatar falhou',

	'avatar:resize:fail' => 'Redimensionamento do avatar falhou',

	'avatar:crop:success' => 'Recorte do avatar concluído com sucesso',

	'avatar:crop:fail' => 'Recorte do avatar falhou',

	'avatar:remove:success' => 'Exclusão do avatar concluída com sucesso',

	'avatar:remove:fail' => 'Exclusão do avatar falhou',



	'profile:edit' => 'Editar perfil',

	'profile:aboutme' => "Sobre mim",

	'profile:description' => "Sobre mim",

	'profile:briefdescription' => "Breve descrição",

	'profile:location' => "Localização",

	'profile:skills' => "Habilidades",

	'profile:interests' => "Interesses",

	'profile:contactemail' => "Email para contato",

	'profile:phone' => "Telefone",

	'profile:mobile' => "Celular",

	'profile:website' => "Website",

	'profile:twitter' => "Nome de usuário do Twitter",

	'profile:saved' => "Seu perfil foi salvo com sucesso.",



	'profile:field:text' => 'Pequeno texto',

	'profile:field:longtext' => 'Área de texto grande',

	'profile:field:tags' => 'Tags',

	'profile:field:url' => 'Endereço web',

	'profile:field:file' => 'Fazer upload de arquivo',		//po5i

	'profile:field:email' => 'Endereço de email',

	'profile:field:location' => 'Localização',

	'profile:field:date' => 'Data',



	'admin:appearance:profile_fields' => 'Editar Campos de Perfil',

	'profile:edit:default' => 'Editar campos de perfil',

	'profile:label' => "Legenda de Perfil",

	'profile:type' => "Tipo de Perfil",

	'profile:editdefault:delete:fail' => 'Falha na exclusão de campo de item de perfil padrão',

	'profile:editdefault:delete:success' => 'Campo de perfil excluído',

	'profile:defaultprofile:reset' => 'Campos de perfil resetados para o padrão do sistema',

	'profile:resetdefault' => 'Resetar perfil padrão',

	'profile:explainchangefields' => "Você pode substituir os campos de perfil existentes pelos seus próprios utilizando o formulário abaixo. \n\n Dê ao novo perfil uma legenda, por exemplo, 'Time favorito', e então selecione o tipo de campo (por exemplo: texto, url, tags), e clique no botão'Adicionar'. Para reorganizar os campos arraste a alça para perto da legenda do campo. Para editar uma legenda de campo - clique no texto da legenda para torná-lo editável. \n\n A qualquer hora você pode mudar de volta ao perfil padrão, mas você perderá qualquer informação já inserida nos campos personalizados nas páginas de perfil.",

	'profile:editdefault:success' => 'Novo campo de perfil adicionado',

	'profile:editdefault:fail' => 'Perfil padrão não pôde ser salvo',

	'profile:field_too_long' => 'Não foi possível salvar sua informação de perfil porque a "%s" seção é muito longa.',

	'profile:noaccess' => "Você não tem permissão para editar este perfil.",





/**

 * Feeds

 */

	'feed:rss' => 'RSS feed para esta página',

/**

 * Links

 */

	'link:view' => 'Visualizar link',

	'link:view:all' => 'Ver todos',





/**

 * River

 */

	'river' => "River",

	'river:friend:user:default' => "%s é agora amigo de %s",

	'river:update:user:avatar' => '%s tem um novo avatar',

	'river:update:user:profile' => '%s atualizou seu perfil',

	'river:noaccess' => 'Você não tem permissão para visualizar este item.',

	'river:posted:generic' => '%s postou',

	'riveritem:single:user' => 'um usuário',

	'riveritem:plural:user' => 'alguns usuários',

	'river:ingroup' => 'no grupo %s',

	'river:none' => 'Nenhuma atividade',

	'river:update' => 'Atualizar para %s',

	'river:delete:success' => 'O item River foi excluído',

	'river:delete:fail' => 'O item River não pôde ser excluído',



	'river:widget:title' => "Atividade",

	'river:widget:description' => "Mostrar últimas atividades",

	'river:widget:type' => "Tipo de atividade",

	'river:widgets:friends' => 'Atividades de amigos',

	'river:widgets:all' => 'Todas as atividades do site',



/**

 * Notifications

 */

	'notifications:usersettings' => "Configuração de notificação",

	'notifications:methods' => "Selecione seus métodos de notificação.",

	'notification:method:email' => 'Email',



	'notifications:usersettings:save:ok' => "Suas configurações de notificação foram salvas com sucesso.",

	'notifications:usersettings:save:fail' => "Houve um problema enquanto suas configurações de notificação estavam sendo salva.",



	'user.notification.get' => 'Retornar as configurações de notificação para um dado usuário.',

	'user.notification.set' => 'Definir as configurações de notificação para um dado usuário.',

/**

 * Search

 */



	'search' => "Buscar",

	'searchtitle' => "Buscar: %s",

	'users:searchtitle' => "Procurando por usuários: %s",

	'groups:searchtitle' => "Procurando por grupos: %s",

	'advancedsearchtitle' => "%s com resultados correspondentes a %s",

	'notfound' => "Nenhum resultado encontrado.",

	'next' => "Próximo",

	'previous' => "Anterior",



	'viewtype:change' => "Mudar o tipo da lista",

	'viewtype:list' => "Visualização de lista",

	'viewtype:gallery' => "Galeria",



	'tag:search:startblurb' => "Itens com tags correspondentes a '%s':",



	'user:search:startblurb' => "Usuários correspondentes a '%s':",

	'user:search:finishblurb' => "Para ver mais, clique aqui.",



	'group:search:startblurb' => "Grupos correspondentes a '%s':",

	'group:search:finishblurb' => "Para ver mais, clique aqui.",

	'search:go' => 'Ir',

	'userpicker:only_friends' => 'Apenas amigos',



/**

 * Account

 */



	'account' => "Conta",

	'settings' => "Configurações",

	'tools' => "Ferramentas",

	'settings:edit' => 'Editar configurações',



	'register' => "Cadastro",

	'registerok' => "Você se cadastrou com sucesso em %s.",

	'registerbad' => "Não foi possível concluir seu cadastro por causa de um erro desconhecido.",

	'registerdisabled' => "O cadastro foi desabilitado pelo administrador do sistema",

	'register:fields' => 'Todos os campos são obrigatórios',



	'registration:notemail' => 'O endereço de email que você informou parece não ser válido.',

	'registration:userexists' => 'Este nome de usuário já existe',

	'registration:usernametooshort' => 'Seu nome de usuário deve ter no mínimo %u carcateres.',

	'registration:usernametoolong' => 'Seu nome de usuário é muito longo. Ele pode ter no máximo %u caracteres.',

	'registration:passwordtooshort' => 'A senha deve ter no mínimo %u caracteres.',

	'registration:dupeemail' => 'Este endereço de email já está cadastrado.',

	'registration:invalidchars' => 'Desculpe, seu nome de usuário contém o caractere %s, que é inválido. Os seguintes caracteres são inválidos: %s',

	'registration:emailnotvalid' => 'Desculpe, o endereço de email que você informou é inválido neste sistema',

	'registration:passwordnotvalid' => 'Desculpe, a senha que você informou é inválida neste sistema',

	'registration:usernamenotvalid' => 'Desculpe, o nome de usuário que você informou é inválido neste sistema',



	'adduser' => "Adicionar usuário",

	'adduser:ok' => "Você adicionou um novo usuário com sucesso.",

	'adduser:bad' => "Não foi possível criar um novo usuário.",



	'user:set:name' => "Configurações de nome da conta",

	'user:name:label' => "Meu nome de exibição",

	'user:name:success' => "Você mudou seu nome com sucesso no sistema.",

	'user:name:fail' => "Não foi possível mudar seu nome no sistema. Por favor, tenha certeza de que seu nome não é muito longo e tente novamente.",



	'user:set:password' => "Senha da conta",

	'user:current_password:label' => 'Senha atual',

	'user:password:label' => "Sua nova senha",

	'user:password2:label' => "Sua nova senha novamente",

	'user:password:success' => "Senha modificada",

	'user:password:fail' => "Não foi possível mudar a senha no sistema.",

	'user:password:fail:notsame' => "As duas senhas não correspondem!",

	'user:password:fail:tooshort' => "A senha é muito curta!",

	'user:password:fail:incorrect_current_password' => 'A senha inserida está incorreta.',

	'user:resetpassword:unknown_user' => 'Usuário inválido.',

	'user:resetpassword:reset_password_confirm' => 'Resetar sua senha fará com que um email seja enviado à você com uma nova senha, no endereço de email do seu cadastro.',



	'user:set:language' => "Configuraçõs de idioma",

	'user:language:label' => "Seu idioma",

	'user:language:success' => "Suas configurações de idioma foram salvas.",

	'user:language:fail' => "Suas configurações de idioma não puderam ser salvas.",



	'user:username:notfound' => 'Nome de usuário %s não encontrado.',



	'user:password:lost' => 'Esqueci minha senha',

	'user:password:resetreq:success' => 'Solicitação de nova senha efetuada com sucesso, email enviado',

	'user:password:resetreq:fail' => 'Não foi possível solicitar uma nova senha.',



	'user:password:text' => 'Para solicitar uma nova senha, insira seu nome de usuário ou endereço de email abaixo e clique no botão Enviar.',



	'user:persistent' => 'Lembrar-me',



	'walled_garden:welcome' => 'Bem-vindo(a) a',



/**

 * Administration

 */

	'menu:page:header:administer' => 'Administrar',

	'menu:page:header:configure' => 'Configurar',

	'menu:page:header:develop' => 'Desenvolver',

	'menu:page:header:default' => 'Outros',



	'admin:view_site' => 'Visualizar site',

	'admin:loggedin' => 'Logado(a) como %s',

	'admin:menu' => 'Menu',



	'admin:configuration:success' => "Suas configurações foram salvas.",

	'admin:configuration:fail' => "Suas configurações não puderam ser salvas.",

	'admin:configuration:dataroot:relative_path' => 'Não foi possível definir "%s" como dataroot porque ele não é um caminho absoluto.',



	'admin:unknown_section' => 'Seção de Aministração Inválida.',



	'admin' => "Administração",

	'admin:description' => "O painel de administrador permite que você controle todos os aspectos do sistema, desde gerencimanto do usuário até comportamento dos plugins. Escolha uma opção abaixo para começar.",



	'admin:statistics' => "Estatísticas",

	'admin:statistics:overview' => 'Geral',

	'admin:statistics:server' => 'Informação do Servidor',



	'admin:appearance' => 'Aparência',

	'admin:administer_utilities' => 'Utilitários',

	'admin:develop_utilities' => 'Utilitários',



	'admin:users' => "Usuários",

	'admin:users:online' => 'Atualmente Online',

	'admin:users:newest' => 'Novos',

	'admin:users:admins' => 'Administradores',

	'admin:users:add' => 'Adicionar novo usuário',

	'admin:users:description' => "Este painel de administrador permite que você controle configurações de usuário para o seu site. Escolha uma opção abaixo para começar.",

	'admin:users:adduser:label' => "Clique aqui para adicionar um novo usuário...",

	'admin:users:opt:linktext' => "Configurar usuários...",

	'admin:users:opt:description' => "Configurar usuários e informações de conta.",

	'admin:users:find' => 'Encontrar',



	'admin:settings' => 'Configurações',

	'admin:settings:basic' => 'Configurações Básicas',

	'admin:settings:advanced' => 'Configurações Avançadas',

	'admin:site:description' => "Este painel de administrador permite que você controle configurações globais do seu site. Escolha uma opção abaixo para começar.",

	'admin:site:opt:linktext' => "Configurar site...",

	'admin:site:access:warning' => "Mudar a configuração de acesso apenas afeta as permissões de conteúdo criado no futuro.",



	'admin:dashboard' => 'Dashboard',

	'admin:widget:online_users' => 'Usuários Online',

	'admin:widget:online_users:help' => 'Lista os usuários que estão no site atualmente',

	'admin:widget:new_users' => 'Novos usuários',

	'admin:widget:new_users:help' => 'Lista os usuários mais novos',

	'admin:widget:content_stats' => 'Estatísticas de conteúdo',

	'admin:widget:content_stats:help' => 'Mantenha o controle do conteúdo criado por seus usuários',

	'widget:content_stats:type' => 'Tipo de Conteúdo',

	'widget:content_stats:number' => 'Número',



	'admin:widget:admin_welcome' => 'Bem-vindo',

	'admin:widget:admin_welcome:help' => "Uma pequena introdução à area de administração do Elgg",

	'admin:widget:admin_welcome:intro' =>

'Bem-Vindo ao Elgg! Agora você está visualizando a dashboard de administração. Ela\ é útil para controlar o que \está acontecendo no site.',



	'admin:widget:admin_welcome:admin_overview' =>

"A navegação da área de administração se encontra no menu da direita. É organizada em"

. " três seções:

	<dl>

		<dt>Administer</dt><dd>Tarefas diárias como monitorar conteúdo reportado, verificar quem está online e visualizar estatísticas.</dd>

		<dt>Configure</dt><dd>Tarefas ocasionais como definir o nome do site ou ativar um plugin.</dd>

		<dt>Develop</dt><dd>Para desenvolvedores que estão produzindo plugins ou o design de temas.)</dd>

	</dl>

	",



	// argh, this is ugly

	'admin:widget:admin_welcome:outro' => '<br />Certifique-se de verificar os recursos disponíveis através dos links de rodapé, e obrigada por usar o Elgg!',



	'admin:widget:control_panel' => 'Painel de Controle',

	'admin:widget:control_panel:help' => "Fornece fácil acesso aos controles mais comuns",



	'admin:cache:flush' => 'Limpar os caches',

	'admin:cache:flushed' => "Os caches do site foram limpos",



	'admin:footer:faq' => 'FAQ da Administração',

	'admin:footer:manual' => 'Manual da Administração',

	'admin:footer:community_forums' => 'Fóruns da comunidade Elgg',

	'admin:footer:blog' => 'Blog do Elgg',



	'admin:plugins:category:all' => 'Todos os plugins',

	'admin:plugins:category:active' => 'Plugins ativos',

	'admin:plugins:category:inactive' => 'Plugins inativos',

	'admin:plugins:category:admin' => 'Administrador',

	'admin:plugins:category:bundled' => 'Software Incluiído',

	'admin:plugins:category:nonbundled' => 'Software Não-Incluído',

	'admin:plugins:category:content' => 'Conteúdo',

	'admin:plugins:category:development' => 'Desenvolvimento',

	'admin:plugins:category:enhancement' => 'Melhorias',

	'admin:plugins:category:api' => 'Serviços/API',

	'admin:plugins:category:communication' => 'Comunicação',

	'admin:plugins:category:security' => 'Segurança e Spam',

	'admin:plugins:category:social' => 'Social',

	'admin:plugins:category:multimedia' => 'Multimídia',

	'admin:plugins:category:theme' => 'Temas',

	'admin:plugins:category:widget' => 'Widgets',

	'admin:plugins:category:utility' => 'Utilitários',



	'admin:plugins:sort:priority' => 'Prioridade',

	'admin:plugins:sort:alpha' => 'Ordem alfabética',

	'admin:plugins:sort:date' => 'Novos',



	'admin:plugins:markdown:unknown_plugin' => 'Plugin Desconhecido.',

	'admin:plugins:markdown:unknown_file' => 'Arquivo desconhecido.',





	'admin:notices:could_not_delete' => 'Não foi possível excluir o aviso.',



	'admin:options' => 'Opções do administrador',





/**

 * Plugins

 */

	'plugins:disabled' => 'Os plugins não estão sendo carregados porque um arquivo chamado "disabled"(desabilitado, desativado) está no diretório mod.',

	'plugins:settings:save:ok' => "Configurações para o plugin %s foram salvas com sucesso.",

	'plugins:settings:save:fail' => "Houve um problema enquanto as configurações do plugin %s eram salvas.",

	'plugins:usersettings:save:ok' => "Configurações de usuário para o plugin %s foram salvas com sucesso.",

	'plugins:usersettings:save:fail' => "Houve um problemas enquanto as configurações de usuário para o plugin %s eram salvas.",

	'item:object:plugin' => 'Plugins',



	'admin:plugins' => "Plugins",

	'admin:plugins:activate_all' => 'Ativar todos',

	'admin:plugins:deactivate_all' => 'Desativar todos',

	'admin:plugins:activate' => 'Ativar',

	'admin:plugins:deactivate' => 'Desativar',

	'admin:plugins:description' => "Este painel de administrador permite que você controle e configure ferramentas instaladas no seu site.",

	'admin:plugins:opt:linktext' => "Configurar ferramentas...",

	'admin:plugins:opt:description' => "Configurar as ferramentas instaladas no site. ",

	'admin:plugins:label:author' => "Autor",

	'admin:plugins:label:copyright' => "Copyright (Direitos autorais)",

	'admin:plugins:label:categories' => 'Categorias',

	'admin:plugins:label:licence' => "Licença",

	'admin:plugins:label:website' => "URL",

	'admin:plugins:label:repository' => "Código",

	'admin:plugins:label:bugtracker' => "Reportar problema",

	'admin:plugins:label:donate' => "Doar",

	'admin:plugins:label:moreinfo' => 'mais informações',

	'admin:plugins:label:version' => 'Versão',

	'admin:plugins:label:location' => 'Localização',

	'admin:plugins:label:dependencies' => 'Dependências',



	'admin:plugins:warning:elgg_version_unknown' => 'Este plugin utiliza um arquivo antigo de manifesto e não especifica uma versão compatível do Elgg. Ele provavelmente não funcionará!',

	'admin:plugins:warning:unmet_dependencies' => 'Este plugin This plugin tem dependências não satisfeitas e não pode ser ativado. Verifique dependências em mais informações.',

	'admin:plugins:warning:invalid' => 'Este plugin é inválido: %s',

	'admin:plugins:warning:invalid:check_docs' => 'Verifique <a href="http://docs.elgg.org/Invalid_Plugin">a documentação do Elgg</a> para dicas de como solucionar problemas.',

	'admin:plugins:cannot_activate' => 'Não é possível ativar',



	'admin:plugins:set_priority:yes' => "%s reordenado.",

	'admin:plugins:set_priority:no' => "Não foi possível reordenar %s.",

	'admin:plugins:set_priority:no_with_msg' => "Não foi possível reordenar %s. Erro: %s",

	'admin:plugins:deactivate:yes' => "%s Desativado.",

	'admin:plugins:deactivate:no' => "Não foi possível desativar %s.",

	'admin:plugins:deactivate:no_with_msg' => "Não foi possível desativar %s. Erro: %s",

	'admin:plugins:activate:yes' => "%s ativado.",

	'admin:plugins:activate:no' => "Não foi possível ativar %s.",

	'admin:plugins:activate:no_with_msg' => "Não foi possível ativar %s. Erro: %s",

	'admin:plugins:categories:all' => 'Todas as categorias',

	'admin:plugins:plugin_website' => 'Plugin de website',

	'admin:plugins:author' => '%s',

	'admin:plugins:version' => 'Versão %s',

	'admin:plugin_settings' => 'Configurações de plugin',

	'admin:plugins:warning:unmet_dependencies_active' => 'Este plugin está ativo, mas há dependências não satisfeitas. Você pode encontrar problemas. Consulte a seção "Mais informações" abaixo para mais detalhes.',



	'admin:plugins:dependencies:type' => 'Tipo',

	'admin:plugins:dependencies:name' => 'Nome',

	'admin:plugins:dependencies:expected_value' => 'Valor esperado',

	'admin:plugins:dependencies:local_value' => 'Valor real',

	'admin:plugins:dependencies:comment' => 'Comentar',



	'admin:statistics:description' => "Esta é uma visão geral das estatísticas do seu site. Se você precisar de estatísticas mais detalhadas, uma ferramenta de aministração profissional está disponível.",

	'admin:statistics:opt:description' => "Visualizar estatísticas sobre usuários e objetos em seu site.",

	'admin:statistics:opt:linktext' => "Ver estatísticas...",

	'admin:statistics:label:basic' => "Estatísticas básicas do site",

	'admin:statistics:label:numentities' => "Entidades no site",

	'admin:statistics:label:numusers' => "Número de usuários",

	'admin:statistics:label:numonline' => "Número de usuários online",

	'admin:statistics:label:onlineusers' => "Usuários online agora",

	'admin:statistics:label:admins'=>"Administradores",

	'admin:statistics:label:version' => "Versão do Elgg",

	'admin:statistics:label:version:release' => "Lançamento",

	'admin:statistics:label:version:version' => "Versão",



	'admin:server:label:php' => 'PHP',

	'admin:server:label:web_server' => 'Servidor Web',

	'admin:server:label:server' => 'Servidor',

	'admin:server:label:log_location' => 'Localização de Log',

	'admin:server:label:php_version' => 'Versão do PHP',

	'admin:server:label:php_ini' => 'Localização do aqrqiovo ini PHP',

	'admin:server:label:php_log' => 'Log do PHP',

	'admin:server:label:mem_avail' => 'Memória disponível',

	'admin:server:label:mem_used' => 'Memória utilizada',

	'admin:server:error_log' => "Erro de log no servidor web",

	'admin:server:label:post_max_size' => 'tamanho máximo do POST',

	'admin:server:label:upload_max_filesize' => 'Tamanho máximo de Upload',

	'admin:server:warning:post_max_too_small' => '(Obs: post_max_size (tamanho_maximo_do_post)deve ser maior que este valor para suportar uploads deste tamanho)',



	'admin:user:label:search' => "Encontrar usuário:",

	'admin:user:label:searchbutton' => "Busca",



	'admin:user:ban:no' => "Não é possível banir usuário",

	'admin:user:ban:yes' => "Usuário banido.",

	'admin:user:self:ban:no' => "Você não pode banir a si mesmo",

	'admin:user:unban:no' => "Não é possível desfazer a ação de banir usuário",

	'admin:user:unban:yes' => "Ação de banir usuário desfeita.",

	'admin:user:delete:no' => "Não é possível excluir usuário",

	'admin:user:delete:yes' => "O usuário %s foi excluído",

	'admin:user:self:delete:no' => "Você não pode excluir a si mesmo",



	'admin:user:resetpassword:yes' => "Senha resetada, usuário notificado.",

	'admin:user:resetpassword:no' => "A senha não pôde ser resetada.",



	'admin:user:makeadmin:yes' => "Este usuário é agora um administrador.",

	'admin:user:makeadmin:no' => "Não foi possível tornar este usuário um administrador.",



	'admin:user:removeadmin:yes' => "Este usuário não é mais um administrador.",

	'admin:user:removeadmin:no' => "Não foi possível excluir os privilégios de administrador deste usuário.",

	'admin:user:self:removeadmin:no' => "Você não pode excluir seus próprios privilégios de administrador.",



	'admin:appearance:menu_items' => 'Itens do menu',

	'admin:menu_items:configure' => 'Configurar principais itens do menu',

	'admin:menu_items:description' => 'Selecionar quais itens de menu você quer que apareçam como links de destaque. Itens não utilizados serão adicionados como "Mais" no fim da lista.',

	'admin:menu_items:hide_toolbar_entries' => 'Excluir links da barra de menu?',

	'admin:menu_items:saved' => 'Itens de menu salvos.',

	'admin:add_menu_item' => 'Adicionar um item de menu personalizado',

	'admin:add_menu_item:description' => 'Preencher o nome de exibição e URL para adiconar itens personalizados ao seu menu de navegação.',



	'admin:appearance:default_widgets' => 'Widgets padrão',

	'admin:default_widgets:unknown_type' => 'Tipo de Widget desconhecido',

	'admin:default_widgets:instructions' => 'Adicionar, ecluir, posicionar, e configurar widgets padrão para a página de widget selecionada.'

		. '  Estas mudanças afetarão somente novos usuários do site.',



/**

 * User settings

 */

	'usersettings:description' => "O painel de configurações do usuário permite que você controle todas as suas configurações pessoais, desde gerenciamento de usuário até comportamento dos plugins. Escolha uma opção abaixo para começar.",



	'usersettings:statistics' => "Suas estatísticas",

	'usersettings:statistics:opt:description' => "Visualizar estatísticas sobre usuários e objetos do seu site.",

	'usersettings:statistics:opt:linktext' => "Estatísticas da conta",



	'usersettings:user' => "Suas configurações",

	'usersettings:user:opt:description' => "Isto permite que você controle as configurações de usuário.",

	'usersettings:user:opt:linktext' => "Modifique suas configurações",



	'usersettings:plugins' => "Ferramentas",

	'usersettings:plugins:opt:description' => "Configurar definições (se houver) para suas ferramentas ativas.",

	'usersettings:plugins:opt:linktext' => "Configurar suas ferramentas",



	'usersettings:plugins:description' => "Este painel permite que você controle e configure as configurações pessoais para as ferramentas instaladas pelo administrador do seu sistema.",

	'usersettings:statistics:label:numentities' => "Seu conteúdo",



	'usersettings:statistics:yourdetails' => "Seus detalhes",

	'usersettings:statistics:label:name' => "Nome completo",

	'usersettings:statistics:label:email' => "Email",

	'usersettings:statistics:label:membersince' => "Membro desde",

	'usersettings:statistics:label:lastlogin' => "Último login",



/**

 * Activity river

 */

	'river:all' => 'Todas as atividades do site',

	'river:mine' => 'Minhas atividades',

	'river:friends' => 'Atividades de amigos',

	'river:select' => 'Mostrar %s',

	'river:comments:more' => '+%u ,mais',

	'river:generic_comment' => 'comentou em %s %s',



	'friends:widget:description' => "Mostrar alguns de seus amigos.",

	'friends:num_display' => "Número de amigos para exibir",

	'friends:icon_size' => "Tamanho do ícone",

	'friends:tiny' => "minúsculo",

	'friends:small' => "pequeno",



/**

 * Generic action words

 */



	'save' => "Salvar",

	'reset' => 'Resetar',

	'publish' => "Publicar",

	'cancel' => "Cancelar",

	'saving' => "Salvando ...",

	'update' => "Atualizar",

	'preview' => "Pré-Visualização",

	'edit' => "Editar",

	'delete' => "Excluir",

	'accept' => "Aceitar",

	'load' => "Carregar",

	'upload' => "Realizar upload",

	'ban' => "Banir",

	'unban' => "Desfazer banir",

	'banned' => "Banido",

	'enable' => "Habilitado",

	'disable' => "Desabilitado",

	'request' => "Solicitar",

	'complete' => "Completar",

	'open' => 'Abrir',

	'close' => 'Fechar',

	'reply' => "Responder",

	'more' => 'Mmais',

	'comments' => 'Comentários',

	'import' => 'Importar',

	'export' => 'Exportar',

	'untitled' => 'Sem título',

	'help' => 'Ajuda',

	'send' => 'Enviar',

	'post' => 'Postar',

	'submit' => 'Submeter',

	'comment' => 'Comentar',

	'upgrade' => 'Atualizar',

	'sort' => 'Classificar',

	'filter' => 'Filtrar',

	'new' => 'Novo',

	'add' => 'Adicionar',

	'create' => 'Criar',

	'remove' => 'Excluir',

	'revert' => 'Reverter',



	'site' => 'Site',

	'activity' => 'Actividade',

	'members' => 'Membros',



	'up' => 'Cima',

	'down' => 'Baixo',

	'top' => 'Superior',

	'bottom' => 'Inferior',

	'back' => 'Voltar',



	'invite' => "Convidar",



	'resetpassword' => "Resetar senha",

	'makeadmin' => "Tornar administrador",

	'removeadmin' => "Excluir administrador",



	'option:yes' => "Sim",

	'option:no' => "Não",



	'unknown' => 'Desconhecido',



	'active' => 'Ativar',

	'total' => 'Total',



	'learnmore' => "Clique aqui para saber mais.",



	'content' => "conteúdp",

	'content:latest' => 'Últimas atividades',

	'content:latest:blurb' => 'Se preferir, clique aqui para ver o conteúdo mais recente em todo o site.',



	'link:text' => 'ver link',

/**

 * Generic questions

 */



	'question:areyousure' => 'Você tem certeza?',



/**

 * Generic data words

 */



	'title' => "Título",

	'description' => "Descrição",

	'tags' => "Tags",

	'spotlight' => "Holofote",

	'all' => "Todos",

	'mine' => "Meu",



	'by' => 'por',

	'none' => 'nenhum',



	'annotations' => "Anotações",

	'relationships' => "Relacionamentos",

	'metadata' => "Metadados",

	'tagcloud' => "Tag cloud",

	'tagcloud:allsitetags' => "Todas as tags do site",



	'on' => 'Ligado',

	'off' => 'Desligado',



/**

 * Entity actions

 */

	'edit:this' => 'Editar isto',

	'delete:this' => 'Excluir isto',

	'comment:this' => 'Comentar nisto',



/**

 * Input / output strings

 */



	'deleteconfirm' => "Você tem certeza que quer excluir este item?",

	'deleteconfirm:plural' => "Você tem certeza que quer excluir estes itens??",

	'fileexists' => "Você já realizou o upload de um arquivo. Para substituí-lo, selecione-o abaixo:",



/**

 * User add

 */



	'useradd:subject' => 'Conta de usuário criada',

	'useradd:body' => '

%s,



Uma conta de usuário foi criada para você em %s. Para logar, visite:



%s



E realize o login com estas credenciais de usuário:



Nome de usuário: %s

Senha: %s



Uma vez que esteja logado, nós recomendamos que você mude a sua senha.

',



/**

 * System messages

 **/



	'systemmessages:dismiss' => "Clique para recusar",





/**

 * Import / export

 */

	'importsuccess' => "A imposrtação de dados foi concluída com sucesso",

	'importfail' => "A importação de dados OpenDD falhou.",



/**

 * Time

 */



	'friendlytime:justnow' => "agora",

	'friendlytime:minutes' => "%s minutos atrás",

	'friendlytime:minutes:singular' => "um minuto atrás",

	'friendlytime:hours' => "%s horas atrás",

	'friendlytime:hours:singular' => "uma hora atrás",

	'friendlytime:days' => "%s dias atrás",

	'friendlytime:days:singular' => "ontem",

	'friendlytime:date_format' => 'j F Y @ g:ia',



	'date:month:01' => 'Janeiro %s',

	'date:month:02' => 'Fevereiro %s',

	'date:month:03' => 'Março %s',

	'date:month:04' => 'Abril %s',

	'date:month:05' => 'Maio %s',

	'date:month:06' => 'Junho %s',

	'date:month:07' => 'Julho %s',

	'date:month:08' => 'Augosto %s',

	'date:month:09' => 'Setembro %s',

	'date:month:10' => 'Outubro %s',

	'date:month:11' => 'Novembro %s',

	'date:month:12' => 'Dezembro %s',





/**

 * System settings

 */



	'installation:sitename' => "O nome do seu site:",

	'installation:sitedescription' => "Pequena descrição do seu site (opcional):",

	'installation:wwwroot' => "A URL do site:",

	'installation:path' => "O caminho completo da instalação do Elgg:",

	'installation:dataroot' => "O caminho completo do diretório de dados:",

	'installation:dataroot:warning' => "Você deve criar este diretório manualmente. Ele deve estar num diretório diferente da instalação do Elgg.",

	'installation:sitepermissions' => "As permissões de acesso padrão:",

	'installation:language' => "O idioma padrão para o seu site:",

	'installation:debug' => "O modo Debug (depuração) forncece informações extra, que podem ser usadas para diagnosticar falhas. Entretanto, ele pode tornar seu sistema lento, então só deve ser utilizado se você estiver tendo problemas:",

	'installation:debug:none' => 'Desligar o modo debug (depuração) (recomendado)',

	'installation:debug:error' => 'Mostrar apenas erros críticos',

	'installation:debug:warning' => 'Mostrar erros e avisos',

	'installation:debug:notice' => 'Registrar todos os erros, avisos e observações',



	// Walled Garden support

	'installation:registration:description' => 'O cadastro de usuários é habilitado por padrão. Desligue isto se você não deseja que novos usuários sejam capazes de realizar cadastro sozinhos.',

	'installation:registration:label' => 'Permita que novos usuários realizem cadastros',

	'installation:walled_garden:description' => 'Permita que o site execute como uma rede privada. Isto não deixará que usuários não logados visualizem páginas do site, a menos que sejam públicas.',

	'installation:walled_garden:label' => 'Restringir páginas a usuários logados',



	'installation:httpslogin' => "Habilite este site a ter logins realizados via HTTPS. você precisará ter https habilitado no seu servidor para que funcione.",

	'installation:httpslogin:label' => "Permitir logins HTTPS",

	'installation:view' => "Insira a visualização que será usada como padrão para o seu site ou deixe em branco para visualização padrão (se estiver em dúvida, deixe como padrão):",



	'installation:siteemail' => "Endereço de email do site (usado quando emails do sistema forem enviados):",



	'installation:disableapi' => "Elgg fornece uma API para construir web services então, aplicações remotas podem interagir com seu site.",

	'installation:disableapi:label' => "Habilitar a API de web services do Elgg",



	'installation:allow_user_default_access:description' => "Se verificado, usuários individuais poderão modificar seu próprio nível padrão de acesso que pode sobrescrever o nível padrão de acesso ao sistema.",

	'installation:allow_user_default_access:label' => "Permitir acesso padrão de usuário",



	'installation:simplecache:description' => "O cache simples aumenta a performance colocando no cache conteúdo estático, incluindo alguns arquivos CSS e JavaScript. Normalmente você desejará que ele esteja ativado.",

	'installation:simplecache:label' => "Usar cache simples (recomendado)",



	'installation:systemcache:description' => "O cache do sistema diminui o tempo de carregamento da máquina do Elgg por cache de dados para arquivos.",

	'installation:systemcache:label' => "Usar cache do sistema (recomendado)",



	'upgrading' => 'Atualizando...',

	'upgrade:db' => 'Seu banco de dados foi atualizado.',

	'upgrade:core' => 'Sua instalação do Elggfoi atualizada.',

	'upgrade:unlock' => 'Destravar atualização',

	'upgrade:unlock:confirm' => "O banco de dados está trancado para outra atualização. Executar atualizações concorrentes são perigosas. Você deveria continuar apenas se souber que não há outras atualizações executando. Destravar?",

	'upgrade:locked' => "Não é possível atualizar. Outra atualização está sendo executada. Para limpar o bloqueio de atualização, visite a seção de administração.",

	'upgrade:unlock:success' => "Atualização destravada com sucesso.",

	'upgrade:unable_to_upgrade' => 'Não é possível atualizar.',

	'upgrade:unable_to_upgrade_info' =>

		'Esta instalação não pode ser atualizada porque visões de legalidade foram detectadas 

		no núcleo de visões Elgg. Essas visualizações foram reprovadas e precisam ser

		removidas para o Elgg funcionar corretamente. Se você não fez nenhuma mudança no núcleo do Elgg,

		você pode simplesmente deletar os diretórios de visualização e substitui-los com o do último pacote

		do Elgg baixado de <a href="http://elgg.org">elgg.org</a>.<br /><br />



		Se você precisar de instruções detalhadas, por favor visite a <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">

		Documentação Atualizando o  Elgg </a>.  Se você precisar de assistência, por favor, faça um post no 

		<a href="http://community.elgg.org/pg/groups/discussion/">Fórum da Comunidade de Suporte</a>.',



	'update:twitter_api:deactivated' => 'Twitter API (anteriormente Twitter Service) foi desativado durante a atualização. Por favor, ative-o manualmente se requirido.',

	'update:oauth_api:deactivated' => 'OAuth API (anteriormente OAuth Lib) foi desativado durante a atualização. Por favor, ative-o manualmente se requirido.',



	'deprecated:function' => '%s() foi reprovado por %s()',



/**

 * Welcome

 */



	'welcome' => "Bem Vindo",

	'welcome:user' => 'Bem Vindo %s',



/**

 * Emails

 */

	'email:settings' => "Configurações de email",

	'email:address:label' => "Seu endereço de email",



	'email:save:success' => "Novo endereço de email salvo.",

	'email:save:fail' => "Seu novo endereço de email não pode ser salvo.",



	'friend:newfriend:subject' => "%s fez de você um amigo!",

	'friend:newfriend:body' => "%s fez de você um amigo!



Para visualizar seu perfil, clique aqui:



%s



Você não pode responder esse email.",







	'email:resetpassword:subject' => "Senha redefinida!",

	'email:resetpassword:body' => "Olá %s,



Sua senha foi redefinido para: %s",





	'email:resetreq:subject' => "Solicitação de nova senha",

	'email:resetreq:body' => "Olá %s,



Alguém (com endereço de IP %s) requisitou uma nova senha para sua conta.



Se você solicitou isso, clique no link abaixo. If you requested this, click on the link below. Caso contrário, ignore esse email.



%s

",



/**

 * user default access

 */



	'default_access:settings' => "Seu nível de acesso padrão",

	'default_access:label' => "Acesso padrão",

	'user:default_access:success' => "Seu novo nível de acesso padrão foi salvo.",

	'user:default_access:failure' => "Seu novo nível de acesso padrão não pôde ser salvo.",



/**

 * XML-RPC

 */

	'xmlrpc:noinputdata'	=>	"Dados de entrada faltando",



/**

 * Comments

 */



	'comments:count' => "%s comentários",



	'riveraction:annotation:generic_comment' => '%s comentou em %s',



	'generic_comments:add' => "Deixe um comentário",

	'generic_comments:post' => "Postar um comentário",

	'generic_comments:text' => "Comentar",

	'generic_comments:latest' => "Últimos comentários",

	'generic_comment:posted' => "Seu comentário foi postado com sucesso.",

	'generic_comment:deleted' => "O comentário foi deletado com sucesso.",

	'generic_comment:blank' => "Desculpe, você precisa colocar algo em seu comentário antes de podemos salvar isso.",

	'generic_comment:notfound' => "Desculpe, não podemos encontrar o item específico.",

	'generic_comment:notdeleted' => "Desculpe, não podemos deletar esse comentário.",

	'generic_comment:failure' => "Um erro inexperado ocorreu ao adicionar o seu comentário.",

	'generic_comment:none' => 'Nenhum comentário',

	'generic_comment:title' => 'Comentário por %s',



	'generic_comment:email:subject' => 'Você tem um novo comentário!',

	'generic_comment:email:body' => "Você tem um novo comentário no seu item \"%s\" de %s. Lê:





%s





Para responder ou visualizar o item original, clique aqui:



%s



Para visualizar o perfil de %s, clique aqui:



%s



Você não pode responder a esse email.",



/**

 * Entities

 */

	'byline' => 'Por %s',

	'entity:default:strapline' => 'Criado %s por %s',

	'entity:default:missingsupport:popup' => 'Esta entidade não pode ser exibida corretamente. Isso pode ser porque precisa do apoio fornecido por um plugin que não está mais instalado.',



	'entity:delete:success' => 'Entidade %s foi deletada',

	'entity:delete:fail' => 'Entidade %s não pode ser deletada',





/**

 * Action gatekeeper

 */

	'actiongatekeeper:missingfields' => 'Formulário faltando ___ token ou _____ts campos',

	'actiongatekeeper:tokeninvalid' => "Encontramos um erro (incompatibilidade do token). Isso provavelmente significa que a página que você estava usando expirou.",

	'actiongatekeeper:timeerror' => 'A página que você está usando expirou. Por favor atualize e tente novamente.',

	'actiongatekeeper:pluginprevents' => 'A extensão tem impedido essa forma de ser submetida.',

	'actiongatekeeper:uploadexceeded' => 'O tamanho do(s) arquivo(s) que foram upados excederamo limite configurado pelo tamanho configurado pelo seu administrador de site',





/**

 * Word blacklists

 */

	'word:blacklist' => 'e, o, em seguida, mas ela, a sua,-a,-o, uma, e não, também, cerca de, agora, por isso, no entanto, ainda, do mesmo modo, de outra forma, por conseguinte, inversamente, um pouco, por conseguinte, por outro lado, no entanto, em vez disso, por sua vez, em conformidade, isso, parece, o quê, quem, quem, quem, quem quer que seja',



/**

 * Tag labels

 */



	'tag_names:tags' => 'Tags',

	'tags:site_cloud' => 'Site Tag Cloud',



/**

 * Javascript

 */



	'js:security:token_refresh_failed' => 'Não é possível contactar %s. Você pode ter problemas ao salvar o conteúdo.',

	'js:security:token_refreshed' => 'Conexão a  %s restaurada!',



/**

 * Languages according to ISO 639-1

 */

	"aa" => "Afar",

	"ab" => "Abkhazian",

	"af" => "Afrikaans",

	"am" => "Amharic",

	"ar" => "Arabic",

	"as" => "Assamese",

	"ay" => "Aymara",

	"az" => "Azerbaijani",

	"ba" => "Bashkir",

	"be" => "Byelorussian",

	"bg" => "Bulgarian",

	"bh" => "Bihari",

	"bi" => "Bislama",

	"bn" => "Bengali; Bangla",

	"bo" => "Tibetan",

	"br" => "Breton",

	"ca" => "Catalan",

	"co" => "Corsican",

	"cs" => "Czech",

	"cy" => "Welsh",

	"da" => "Danish",

	"de" => "German",

	"dz" => "Bhutani",

	"el" => "Greek",

	"en" => "English",

	"eo" => "Esperanto",

	"es" => "Spanish",

	"et" => "Estonian",

	"eu" => "Basque",

	"fa" => "Persian",

	"fi" => "Finnish",

	"fj" => "Fiji",

	"fo" => "Faeroese",

	"fr" => "French",

	"fy" => "Frisian",

	"ga" => "Irish",

	"gd" => "Scots / Gaelic",

	"gl" => "Galician",

	"gn" => "Guarani",

	"gu" => "Gujarati",

	"he" => "Hebrew",

	"ha" => "Hausa",

	"hi" => "Hindi",

	"hr" => "Croatian",

	"hu" => "Hungarian",

	"hy" => "Armenian",

	"ia" => "Interlingua",

	"id" => "Indonesian",

	"ie" => "Interlingue",

	"ik" => "Inupiak",

	//"in" => "Indonesian",

	"is" => "Icelandic",

	"it" => "Italian",

	"iu" => "Inuktitut",

	"iw" => "Hebrew (obsolete)",

	"ja" => "Japanese",

	"ji" => "Yiddish (obsolete)",

	"jw" => "Javanese",

	"ka" => "Georgian",

	"kk" => "Kazakh",

	"kl" => "Greenlandic",

	"km" => "Cambodian",

	"kn" => "Kannada",

	"ko" => "Korean",

	"ks" => "Kashmiri",

	"ku" => "Kurdish",

	"ky" => "Kirghiz",

	"la" => "Latin",

	"ln" => "Lingala",

	"lo" => "Laothian",

	"lt" => "Lithuanian",

	"lv" => "Latvian/Lettish",

	"mg" => "Malagasy",

	"mi" => "Maori",

	"mk" => "Macedonian",

	"ml" => "Malayalam",

	"mn" => "Mongolian",

	"mo" => "Moldavian",

	"mr" => "Marathi",

	"ms" => "Malay",

	"mt" => "Maltese",

	"my" => "Burmese",

	"na" => "Nauru",

	"ne" => "Nepali",

	"nl" => "Dutch",

	"no" => "Norwegian",

	"oc" => "Occitan",

	"om" => "(Afan) Oromo",

	"or" => "Oriya",

	"pa" => "Punjabi",

	"pl" => "Polish",

	"ps" => "Pashto / Pushto",

	"pt" => "Portuguese",

	"qu" => "Quechua",

	"rm" => "Rhaeto-Romance",

	"rn" => "Kirundi",

	"ro" => "Romanian",

	"ru" => "Russian",

	"rw" => "Kinyarwanda",

	"sa" => "Sanskrit",

	"sd" => "Sindhi",

	"sg" => "Sangro",

	"sh" => "Serbo-Croatian",

	"si" => "Singhalese",

	"sk" => "Slovak",

	"sl" => "Slovenian",

	"sm" => "Samoan",

	"sn" => "Shona",

	"so" => "Somali",

	"sq" => "Albanian",

	"sr" => "Serbian",

	"ss" => "Siswati",

	"st" => "Sesotho",

	"su" => "Sundanese",

	"sv" => "Swedish",

	"sw" => "Swahili",

	"ta" => "Tamil",

	"te" => "Tegulu",

	"tg" => "Tajik",

	"th" => "Thai",

	"ti" => "Tigrinya",

	"tk" => "Turkmen",

	"tl" => "Tagalog",

	"tn" => "Setswana",

	"to" => "Tonga",

	"tr" => "Turkish",

	"ts" => "Tsonga",

	"tt" => "Tatar",

	"tw" => "Twi",

	"ug" => "Uigur",

	"uk" => "Ukrainian",

	"ur" => "Urdu",

	"uz" => "Uzbek",

	"vi" => "Vietnamese",

	"vo" => "Volapuk",

	"wo" => "Wolof",

	"xh" => "Xhosa",

	//"y" => "Yiddish",

	"yi" => "Yiddish",

	"yo" => "Yoruba",

	"za" => "Zuang",

	"zh" => "Chinese",

	"zu" => "Zulu",

);



add_translation("pt",$port);
