<?php
	$hiarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(

				//Inicio: Diretor comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'sobordinado'=>array(

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
						
					)
				)
				//Fim: Dirictor Financeiro
			)
		)
	);
?>