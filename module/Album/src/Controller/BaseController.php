<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class BaseController extends AbstractActionController {
	protected $entityManager;
	public function onDispatch(\Zend\Mvc\MvcEvent $e) {
		$this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\entityManager'));
		return parent::onDispatch($e);
	}
	public function setEntityManager(\Doctrine\ORM\EntityManager $EM) {
		$this->entityManager = $EM;
	}
	public function getEntityManager() {
		return $this->entityManager;
	}
}
