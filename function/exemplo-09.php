<?php 

//funçoes recursivas
// de preferencia usar um foreach ou while.

$hierarquia = array(
		array(
			'nome_cargo' =>'CEO', 
			'subordinados' => array(
				//Inicio: Diretor Comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//Inicio: Gerente de Vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Termino: Gerente de Vendas
					)
				),
				//Termino: Diretor Comercial
				//Inicio:Diretor Financeiro
				array(
					 'nome_cargo'=>'Diretor Financeiro',
					 'subordinados'=>array(
					 	//Inicio: Gerente de contas a pagar
					 	array(
					 		'nome_cargo'=>'Gerente de contas a pagar',
					 		'subordinados'=>array(
					 			//Inicio: Supervisor
					 			array(
					 				'nome_cargo'=>'Supervisor'
					 			)
					 			//Termino: Supervisor

					 		)
					 	),
					 	//Termino: Gerente de contas a pagar
					 	//Inicio: Gerente de compras
					 	array(
					 		'nome_cargo'=>'Gerente de Compras',
					 		'subordinados'=>array(
					 			//inicio Supervisor Suprimentos
					 			array(
					 				'nome_cargo' =>'Supervisor Suprimentos'
					 			)
					 			//Termino: Supervisor Suprimentos


					 		)

					 	)
					 	//Termino: Gerente de compras	
					 )

				)
				//Termino:Diretor Financeiro
		)

	)

);

function exibe($cargos){
	$html = '<ul>';
	
	foreach ($cargos as $cargo) {
	
		$html .="<li>";
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']>0)) {
			
			$html .=exibe($cargo['subordinados']);
		}

		$html .="</li>";
	}

	$html .= '</ul>';
	
	return $html;
}

echo exibe($hierarquia);

 ?>