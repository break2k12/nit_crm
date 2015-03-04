<?php
namespace TYPO3\BrwKunden\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package brw_kunden
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class KundendatenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * kundendatenRepository
	 *
	 * @var \TYPO3\BrwKunden\Domain\Repository\KundendatenRepository
	 * @inject
	 */
	protected $kundendatenRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$kundendatens = $this->kundendatenRepository->findAll();
		$this->view->assign('kundendatens', $kundendatens);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten
	 * @return void
	 */
	public function showAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten) {
		$this->view->assign('kundendaten', $kundendaten);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $newKundendaten
	 * @dontvalidate $newKundendaten
	 * @return void
	 */
	public function newAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $newKundendaten = NULL) {
		$this->view->assign('newKundendaten', $newKundendaten);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $newKundendaten
	 * @return void
	 */
	public function createAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $newKundendaten) {
		$this->kundendatenRepository->add($newKundendaten);
		$this->flashMessageContainer->add('Your new Kundendaten was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten
	 * @return void
	 */
	public function editAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten) {
    $kundendaten = $this->kundendatenRepository->findByUid($kundendaten->getUid());
    $user = $GLOBALS['TSFE']->fe_user->user;
		$this->view->assign('kundendaten', $kundendaten);
    $this->view->assign('benutzer', $user);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten
	 * @return void
	 */
	public function updateAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten) {
		$this->kundendatenRepository->update($kundendaten);
		$this->flashMessageContainer->add('Your Kundendaten was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten
	 * @return void
	 */
	public function deleteAction(\TYPO3\BrwKunden\Domain\Model\Kundendaten $kundendaten) {
		$this->kundendatenRepository->remove($kundendaten);
		$this->flashMessageContainer->add('Your Kundendaten was removed.');
		$this->redirect('list');
	}

}
?>