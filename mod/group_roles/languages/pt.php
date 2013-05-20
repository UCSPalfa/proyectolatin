<?php

/**

 * Group Operators languages

 *

 * @package ElggGroupOperators

 */



$port = array(



	/**

	 * Titles

	 */

	"group_roles:title" => 'Membros de %s',

	"group_roles:manage" => 'Gerenciar funções dos membros',

	"group_roles:operators" => 'Funções',

	"group_roles:members" => 'Membros',

	

	/**

	 * Menus

	 */

	"group_roles:member:drop" => 'Excluir membro',

	"group_roles:owner" => 'É o proprietário',

	"group_roles:owner:make" => 'Tornar proprietário',

	

	/**

	 * Form fields

	 */

	"group_roles:new" => 'Adicionar outro membro',

	"group_roles:new:button" => 'Adicionar membro',

	"group_roles:selectone" => 'selecionar um...',

	

	/**

	 * System messages

	 */

	"group_roles:added" => '%s foi adicionado com sucesso como membro do grupo',

	"group_operatros:add:error" => 'Foi impossível adicionar %s como membro do grupo',

	"group_roles:owner_changed" => '%s é o novo proprietário',

	"group_roles:change_owner:error" => 'Apenas o proprietário da comunidade pode nomear outro proprietário',

	"group_roles:removed" => 'Membro excluído com sucesso',



);



add_translation("pt", $port);
