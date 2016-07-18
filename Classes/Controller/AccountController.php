<?php
namespace MaximKashapov\EscortLogin\Controller;
    /***************************************************************
     *  Copyright notice
     *
     *  (c) 2015 Dmitry Dulepov (dmitry.dulepov@gmail.com)
     *  All rights reserved
     *
     *  You may not remove or change the name of the author above. See:
     *  http://www.gnu.org/licenses/gpl-faq.html#IWantCredit
     *
     *  This script is part of the Typo3 project. The Typo3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 2 of the License, or
     *  (at your option) any later version.
     *
     *  The GNU General Public License can be found at
     *  http://www.gnu.org/copyleft/gpl.html.
     *  A copy is found in the textfile GPL.txt and important notices to the license
     *  from the author is found in LICENSE.txt distributed with these scripts.
     *
     *
     *  This script is distributed in the hope that it will be useful,
     *  but WITHOUT ANY WARRANTY; without even the implied warranty of
     *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *  GNU General Public License for more details.
     *
     *  This copyright notice MUST APPEAR in all copies of the script!
     ***************************************************************/
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * This class provides a controller for aliases Backend function of RealURL.
 *
 * @author Dmitry Dulepov <dmitry.dulepov@gmail.com>
 */
class AccountController extends BackendModuleController {

    /** @var string[] */
    protected $excludedArgments = array('uid', 'user', 'pass', 'submit');

    /**
     * @var \MaximKashapov\EscortLogin\Domain\Repository\AccountRepository
     * @inject
     */
    protected $repository;

    /**
     * Shows the overview of functions.
     */
    public function indexAction() {
        $account = $this->repository->findByUid(1);
        $this->view->assignMultiple(array(
            'account' => $account
        ));
    }

    /**
     * Shows the edit form for the selected alias.
     *
     * @param int $uid
     * @param string $passValue
     */
    public function saveAction($uid, $passValue) {
        //$userValue = $this->request->getArgument('userValue');
        //$account = $this->repository->findByUid((int)$this->request->getArgument('uid'));
        $account = $this->repository->findByUid($uid);
        //$passValue = $this->request->getArgument('pass');

        $account->setPass($passValue);
        $this->repository->update($account);


        $this->forward('index', null, null, array('account' => $account));
    }

}
