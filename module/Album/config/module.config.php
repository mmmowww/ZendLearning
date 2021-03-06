<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'router' => [
		'routes' => [
			'home' => [
				'type' => Literal::class,
				'options' => [
					'route' => '/album/',
					'defaults' => [
						'controller' => Controller\IndexController::class,
						'action' => 'index',
					],
				],
				"may_terminate" => [
					"child_routes" => [
						"type" => Literal::class,
						"options" => [
							'route' => 'teft/',
							'defaults' => [
								'controller' => Controller\IndexController::class,
								'action' => 'test',
							],
						],
					],
				],
			],
			'album' => [
				'type' => Literal::class,
				'options' => [
					'route' => '/test/',
					'defaults' => [
						'controller' => Controller\IndexController::class,
						'action' => 'test',
					],
				],
			],
		],
	],
	'controllers' => [
		'factories' => [
			Controller\IndexController::class => InvokableFactory::class,
		],
	],
	'view_manager' => [
		'display_not_found_reason' => true,
		'display_exceptions' => true,
		'doctype' => 'HTML5',
		'not_found_template' => 'error/404',
		'exception_template' => 'error/index',
		'template_map' => [
			'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
			'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
			'error/404' => __DIR__ . '/../view/error/404.phtml',
			'error/index' => __DIR__ . '/../view/error/index.phtml',
		],
		'template_path_stack' => [
			__DIR__ . '/../view',
		],
	],
];
