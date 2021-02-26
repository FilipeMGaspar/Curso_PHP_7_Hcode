<?php
	$hiarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(

				//Inicio: Diretor comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'sobordinados'=>array(

						//Inicio: Gerente de Vendas
						array('nome_cargo' => 'Gerente de Vendas'
						)
					)
					//Fim: Gerente de Vendas
				),
				//Fim: Diretor Comercial 

				//Inicio: Dirictor Financeiro
				array(
					'nome_cargo' =>'Dirictor Financeiro',
					'subordinados' => array(
						
						//Inicio: Gerente de Contas a pagar
						array(
							'nome_cargo' =>'Gerente de Contas a pagar',
							'subordinados' => array(
									array(
										//Inicio: supervisor de pagamentos
										'nome_cargo' =>'Supervisor de Pagamentos'
									)
								)
						),
						//Fim: Gerente de Contas a pagar

						//Inicio: Gerente de compras
						array(
							'nome_cargo' => 'Gerente de Compras',
							'subordinados' => array(
								//Inicio: supervisor de Suprimentos
									array(
										'nome_cargo' =>'Supervisor de Suprimentos',
										'subordinados'=> array(
											array(
												'nome_cargo' => 'Funcionario'
											)
										)
									)
									//fim: supervisor de Suprimentos
								)
						)
						//Fim: Gerente de compras

					)
				)
				//Fim: Dirictor Financeiro
			)
		)
	);

	function exibe($cargos){
		$html = "<ul>";
			
			foreach ($cargos as $cargo) {
					$html .= "<li>";
					$html .= $cargo['nome_cargo'];
					
					if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
						$html .= exibe($cargo['subordinados']);
					}

					$html .= "</li>";
			}

		$html .= "</ul>";

		return $html;
	}

	echo exibe($hiarquia);

?>