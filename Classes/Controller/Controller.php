<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 07.07.2016
 * Time: 11:00
 */
class Tx_Escort_Session_Controller
    extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    public function showAction() {
        $productRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Tx_Escort_Login_Repository');
        //$account = $productRepository->findAll();
        //$query = $productRepository->createQuery();
        //$query->matching($query->contains('regions', $region));
        $this->view->assign('account', $productRepository->findByUid(1));
    }
}
?>