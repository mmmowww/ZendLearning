<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

//use Album\Controller\BaseController as BC;
use Doctrine\Persistence\ObjectManager;
use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\View\Model\ViewModel;

/*
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
 */

class IndexController extends AbstractActionController implements FactoryInterface {

	public function __construct(ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
	}
	/**
	 * Entity manager.
	 * @var Doctrine\ORM\EntityManager
	 */
	public function __invoke(ContainerInterface $container,
		$requestedName, array $options = null) {
		$entityManager = $container->get('doctrine.entitymanager.orm_default');

		// Instantiate the controller and inject dependencies
		return new IndexController($entityManager);
	}

	public function indexAction() {
		//$em = $this->getEntityManager();
		//$em = $this->doctrine();
		//$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		///$query = $em->createQuery("SELECT f FROM Album\Entity\Foto");
		//$rows = $query->getResult();
		/*
		$arr = get_class_methods($this);
		foreach ($arr as $key => $value) {
			echo "</br>";
			var_dump($value);
		}*/
		$em = $this->getPluginManager('Doctrine\ORM\EntityManager');
		$em = $em->get('Doctrine\ORM\EntityManager');
		var_dump(get_class_methods($em));
		//$arr = get_class_methods($em);
		//foreach ($arr as $key => $value) {
		//	echo "</br>";
		//		var_dump($value);
		//}

		//$rows = $query->getResult();
		//var_dump($rows);

		die("67867887");
		var_dump(get_class_methods($this));

		return new ViewModel();
	}
	public function testAction() {
		die("TEST");
		return new ViewModel();
	}
}
