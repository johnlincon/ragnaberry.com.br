﻿<?php
/* 
 [===========                                 ===========]
 [          =   +-+-+-+-+-+-+ +-+-+-+-+-+-+   =          ]
 [          =   |L|i|l|i|u|m| |S|a|n|c|t|a|   =          ]
 [          =   +-+-+-+-+-+-+ +-+-+-+-+-+-+   =          ]
 [          =         +-+-+-+-+-+-+-+         =          ]
 [          =         |S|c|r|i|p|t|s|         =          ]
 [          =         +-+-+-+-+-+-+-+         =          ]
 [===========                                 ===========]
 [=======================================================]
 [      Integração API PagSeguro Versão atual 2.2        ]
 [=======================================================]
 [                      Changelog:                       ]
 [1.0 Addon Criado.                                      ]
 [1.2 Correções em erro de português e rate.             ]
 [1.4 Inseridas novas configurações.                     ]
 [1.6 Corrigido erro com valores.                        ]
 [1.8 Compatibilidade com Hercules adicionada.           ]
 [2.0 Addon totalmente reformulado, diversos erros       ]
 [    corrigidos e novas funções adicionadas.            ]
 [2.2 Atualizada API de pagamentos do PagSeguro para     ]
 [    ultima versão, inserido uso do PagSeguroLightbox,  ]
 [    código reformulado para uso de OO onde possível,   ]
 [    inserido sandbox do PagSeguro, remoção de arquivos ]
 [    desnecessários, inserido uso de ajax/jQuery/Json   ]
 [    se livrando das mudanças em lib/Flux/Template.php  ]
 [    e mais um monte de coisas que nem eu mesmo sei.    ]
 [-------------------------------------------------------]
 [                       Licença:                        ]
 [ This program is free software. It comes without any   ]
 [ warranty, to the extent permitted by applicable law.  ]
 [ You can redistribute it and/or modify it under the    ]
 [ terms of the Do What The Fuck You Want To Public      ]
 [ License, Version 2, as published by Sam Hocevar.      ]
 [ See http://www.wtfpl.net/ for more details.           ]
 [=======================================================]
 [                       Suporte:                        ]
 [ Qualquer erro encontrado pode ser reportado a mim em  ]
 [ meu email pessoal ou diretamente no tópico de         ]
 [ download.                                             ]
 [=======================================================]
 [                       Contato:                        ]
 [ Vitor J. Naidek (Lilium Sancta)                       ]
 [ inu-kai@hotmail.com                                   ]
 [ forum.brathena.org/index.php?/profile/17-fallenangel~ ]
 [ https://github.com/liliumsancta                       ]
 [=======================================================]
*/

return array(

	'EmailPagSeguro' 		=> 'johnlincon@live.com', // Seu E-mail do PagSeguro.

	'TokenPagseguro' 		=> '62450bde-3423-4f39-8094-304a1ee7a4c21c0394e343d7b4985ea1821a49f853aa947f-6e2c-45a5-b6e4-5d7aa0f7dc9f', // Seu token do PagSeguro.

	'TokenPagseguroSandbox' => '62450bde-3423-4f39-8094-304a1ee7a4c21c0394e343d7b4985ea1821a49f853aa947f-6e2c-45a5-b6e4-5d7aa0f7dc9f', // Seu token do sandbox PagSeguro.

	'Promotion' 			=> 10, // Adicione aqui o bônus de porcentagem que deseja nas doações, exemplo caso insira 100 as doações receberão o dobro em Créditos.

	'InitPromo' 			=> 20, // Adicione aqui em R$ a partir de qual valor em doação o doador passa a receber o bônus das promoções.

	'rate' 					=> 0.001, // Adicione a rate das doações por exemplo 1.0 é equivalente a R$ 1.00 recebe 1 crédito, 0.001 a cada R$ 1.00 1000 Créditos (altere também a configuração 'CreditExchangeRate' no arquivo de configuração application.php do FluxCP para o mesmo valor).

	'emulator' 				=> 1, // Configure qual o seu emulador aqui (1 - Hercules / 2 - rAthena / 3 - brAthena / 4 - eAthena) em caso de duvidas teste todas opções caso nada de certo edite as queries em /lib/addon/Database.php.

	'PagSeguroMin' 			=> 10, // Doação minima, isto vai evitar doações de R$ 1.00 por exemplo que vão custar mais em taxas do que o valor recebido.

	'PagSeguroMax' 			=> 50, // Doação máxima, isto vai evitar doações de R$ 1000,00 usadas para quebra da economia do servidor, comprando vips e vendendo a preço de banana extornando o cartão depois.

	'PagSeguroFlux' 		=> false, // Usar sistema de créditos da loja do Flux CP? Caso insira false você vai precisar configurar uma variável abaixo.

	'PagSeguroVar' 			=> '#CASHPOINTS', // Caso a opção acima seja false adicione aqui a sua variável de cash (pode ser usada qualquer variável permanente de conta).

	'PagSeguroCoin' 		=> 'rBerry Cash', // Adicione aqui o nome da sua Moeda (ROPS, Cash Points, Kafra Points, SeuRO Points, Créditos ou seja o que for).

	'PagSeguroLock' 		=> false, // Trancar sistema de doações? Caso você esteja realizando testes configure como true e somente GMs com lvl acima de 20 terão acesso.

	'PagSeguroLightBox' 	=> true, // Utilizar a lightbox do pagseguro? (Padrão true), caso resolva não utilizar a lightbox irá redirecionar o cliente para uma página do PagSeguro para completar a transação.

	'PagSeguroCurrency' 	=> 'BRL', // Moeda utilizada, é claro aqui é Brasil PORRA!

	'PagSeguroAddress' 		=> 'true', // Requisitar o endereço do comprador? (Padrão true) OBS: precisa ser passado como string e por algum motivo setando como false o nome do comprador não é enviado ao PagSeguro '-' vai entender.

	'PagSeguroEnviroment' 	=> 'production', // Usar o sandbox do Pagseguro? (Padrão production) production ou sandbox.

	'PagSeguroSandBoxUrl' 	=> 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js', // URL do SandBox do PagSeguro.

	'PagSeguroUrl' 			=> 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js', // URL para checkouts reais do PagSeguro.
	
	'MenuItems' => array(
		'Doação'   => array(
			'PagSeguro'      => array('module' => 'pagseguro'),
		),
	),
	
	'SubMenuItems' => array(
		'pagseguro' => array(
			'index'   => 'Doar com PagSeguro',
			'history' => 'Histórico do PagSeguro',
		),
		'cplog' => array(
			'log'       => 'Transações PagSeguro',
			'statistics' => 'Estatísticas Pagseguro',
			'about'           => 'Sobre o Addon PagSeguro',
		),
	),

	//NÃO TOQUE EM NADA DAQUI PARA BAIXO
	'FluxTables' => array(
		'PaymentTable' => 'cp_donate',
	),
	'PagSeguroLib' => dirname(dirname(__FILE__)).'/lib/vendor/autoload.php',

	'PagSeguroStatus' => array (
		0 => 'Sem Continuidade',
		1 => 'Aguardando Pagamento',
		2 => 'Análise do Cartão',
		3 => 'Paga',
		4 => 'Finalizada',
		5 => 'Disputa',
		6 => 'Devolvida',
		7 => 'Cancelada',
		8 => 'Devolvida',
		9 => 'Extornada'
	),
	'PagSeguroType' => array (
		0 => 'Sem continuidade',
		1 => 'Cartão de crédito',
		2 => 'Boleto',
		3 => 'Débito online (TEF)',
		4 => 'Saldo PagSeguro',
		5 => 'Oi Paggo',
		6 => 'UNKNOW', // ????? Jamais iremos saber.
		7 => 'Depósito em conta'
	)
)
?>