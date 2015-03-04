<?php

namespace TYPO3\BrwKunden\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TYPO3\BrwKunden\Domain\Model\Kundendaten.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage berewa_kundendaten
 *
 */
class KundendatenTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\BrwKunden\Domain\Model\Kundendaten
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\BrwKunden\Domain\Model\Kundendaten();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getErstelltReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setErstelltForStringSetsErstellt() { 
		$this->fixture->setErstellt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getErstellt()
		);
	}
	
	/**
	 * @test
	 */
	public function getProjektReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setProjektForStringSetsProjekt() { 
		$this->fixture->setProjekt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getProjekt()
		);
	}
	
	/**
	 * @test
	 */
	public function getBauartReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBauartForStringSetsBauart() { 
		$this->fixture->setBauart('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBauart()
		);
	}
	
	/**
	 * @test
	 */
	public function getGebaeudeartReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGebaeudeartForStringSetsGebaeudeart() { 
		$this->fixture->setGebaeudeart('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGebaeudeart()
		);
	}
	
	/**
	 * @test
	 */
	public function getKategorieReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKategorieForStringSetsKategorie() { 
		$this->fixture->setKategorie('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKategorie()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlzbauReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPlzbauForStringSetsPlzbau() { 
		$this->fixture->setPlzbau('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPlzbau()
		);
	}
	
	/**
	 * @test
	 */
	public function getLkzbauReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLkzbauForStringSetsLkzbau() { 
		$this->fixture->setLkzbau('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLkzbau()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrtbauReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrtbauForStringSetsOrtbau() { 
		$this->fixture->setOrtbau('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrtbau()
		);
	}
	
	/**
	 * @test
	 */
	public function getStrbauReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStrbauForStringSetsStrbau() { 
		$this->fixture->setStrbau('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStrbau()
		);
	}
	
	/**
	 * @test
	 */
	public function getBlReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBlForStringSetsBl() { 
		$this->fixture->setBl('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBl()
		);
	}
	
	/**
	 * @test
	 */
	public function getLkrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLkrForStringSetsLkr() { 
		$this->fixture->setLkr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLkr()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlanstandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPlanstandForStringSetsPlanstand() { 
		$this->fixture->setPlanstand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPlanstand()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeplBauBegReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGeplBauBegForStringSetsGeplBauBeg() { 
		$this->fixture->setGeplBauBeg('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGeplBauBeg()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeplBauzeitReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGeplBauzeitForStringSetsGeplBauzeit() { 
		$this->fixture->setGeplBauzeit('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGeplBauzeit()
		);
	}
	
	/**
	 * @test
	 */
	public function getMauerwerkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMauerwerkForStringSetsMauerwerk() { 
		$this->fixture->setMauerwerk('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMauerwerk()
		);
	}
	
	/**
	 * @test
	 */
	public function getDachkonstrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDachkonstrForStringSetsDachkonstr() { 
		$this->fixture->setDachkonstr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDachkonstr()
		);
	}
	
	/**
	 * @test
	 */
	public function getDacheindReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDacheindForStringSetsDacheind() { 
		$this->fixture->setDacheind('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDacheind()
		);
	}
	
	/**
	 * @test
	 */
	public function getFassadeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFassadeForStringSetsFassade() { 
		$this->fixture->setFassade('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFassade()
		);
	}
	
	/**
	 * @test
	 */
	public function getSonstBaudetReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSonstBaudetForStringSetsSonstBaudet() { 
		$this->fixture->setSonstBaudet('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSonstBaudet()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusstattAussenReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAusstattAussenForStringSetsAusstattAussen() { 
		$this->fixture->setAusstattAussen('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAusstattAussen()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusstattInnenReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAusstattInnenForStringSetsAusstattInnen() { 
		$this->fixture->setAusstattInnen('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAusstattInnen()
		);
	}
	
	/**
	 * @test
	 */
	public function getGewerkVorberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGewerkVorberForStringSetsGewerkVorber() { 
		$this->fixture->setGewerkVorber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGewerkVorber()
		);
	}
	
	/**
	 * @test
	 */
	public function getGewerkAussenanlageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGewerkAussenanlageForStringSetsGewerkAussenanlage() { 
		$this->fixture->setGewerkAussenanlage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGewerkAussenanlage()
		);
	}
	
	/**
	 * @test
	 */
	public function getAllgGewerkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAllgGewerkForStringSetsAllgGewerk() { 
		$this->fixture->setAllgGewerk('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAllgGewerk()
		);
	}
	
	/**
	 * @test
	 */
	public function getDlGewerkeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDlGewerkeForStringSetsDlGewerke() { 
		$this->fixture->setDlGewerke('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDlGewerke()
		);
	}
	
	/**
	 * @test
	 */
	public function getVergabeKzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVergabeKzForStringSetsVergabeKz() { 
		$this->fixture->setVergabeKz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVergabeKz()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhFunktionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhFunktionForStringSetsBhFunktion() { 
		$this->fixture->setBhFunktion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhFunktion()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhAdressnrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhAdressnrForStringSetsBhAdressnr() { 
		$this->fixture->setBhAdressnr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhAdressnr()
		);
	}
	
	/**
	 * @test
	 */
	public function getBHNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBHNameForStringSetsBHName() { 
		$this->fixture->setBHName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBHName()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhlkzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhlkzForStringSetsBhlkz() { 
		$this->fixture->setBhlkz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhlkz()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhPlzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhPlzForStringSetsBhPlz() { 
		$this->fixture->setBhPlz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhPlz()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhOrtForStringSetsBhOrt() { 
		$this->fixture->setBhOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhStrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhStrForStringSetsBhStr() { 
		$this->fixture->setBhStr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhStr()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhTelForStringSetsBhTel() { 
		$this->fixture->setBhTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhFaxForStringSetsBhFax() { 
		$this->fixture->setBhFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhMailForStringSetsBhMail() { 
		$this->fixture->setBhMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhZustReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhZustForStringSetsBhZust() { 
		$this->fixture->setBhZust('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhZust()
		);
	}
	
	/**
	 * @test
	 */
	public function getDirektTelbhReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDirektTelbhForStringSetsDirektTelbh() { 
		$this->fixture->setDirektTelbh('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDirektTelbh()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhDirektFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhDirektFaxForStringSetsBhDirektFax() { 
		$this->fixture->setBhDirektFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhDirektFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhDirektMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhDirektMailForStringSetsBhDirektMail() { 
		$this->fixture->setBhDirektMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhDirektMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhHomepageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhHomepageForStringSetsBhHomepage() { 
		$this->fixture->setBhHomepage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhHomepage()
		);
	}
	
	/**
	 * @test
	 */
	public function getBhHandyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBhHandyForStringSetsBhHandy() { 
		$this->fixture->setBhHandy('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBhHandy()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuFunktionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuFunktionForStringSetsBuFunktion() { 
		$this->fixture->setBuFunktion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuFunktion()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuAdressNrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuAdressNrForStringSetsBuAdressNr() { 
		$this->fixture->setBuAdressNr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuAdressNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuNameForStringSetsBuName() { 
		$this->fixture->setBuName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuName()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuPlzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuPlzForStringSetsBuPlz() { 
		$this->fixture->setBuPlz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuPlz()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuOrtForStringSetsBuOrt() { 
		$this->fixture->setBuOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuStrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuStrForStringSetsBuStr() { 
		$this->fixture->setBuStr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuStr()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuTelForStringSetsBuTel() { 
		$this->fixture->setBuTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuFaxForStringSetsBuFax() { 
		$this->fixture->setBuFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuMailForStringSetsBuMail() { 
		$this->fixture->setBuMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuzustAPReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuzustAPForStringSetsBuzustAP() { 
		$this->fixture->setBuzustAP('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuzustAP()
		);
	}
	
	/**
	 * @test
	 */
	public function getBudirektTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBudirektTelForStringSetsBudirektTel() { 
		$this->fixture->setBudirektTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBudirektTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuDirektFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuDirektFaxForStringSetsBuDirektFax() { 
		$this->fixture->setBuDirektFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuDirektFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getBudirektMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBudirektMailForStringSetsBudirektMail() { 
		$this->fixture->setBudirektMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBudirektMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuwebsiteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuwebsiteForStringSetsBuwebsite() { 
		$this->fixture->setBuwebsite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuwebsite()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuHandyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBuHandyForStringSetsBuHandy() { 
		$this->fixture->setBuHandy('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBuHandy()
		);
	}
	
	/**
	 * @test
	 */
	public function getArFunktionArchReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArFunktionArchForStringSetsArFunktionArch() { 
		$this->fixture->setArFunktionArch('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArFunktionArch()
		);
	}
	
	/**
	 * @test
	 */
	public function getArAdressnrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArAdressnrForStringSetsArAdressnr() { 
		$this->fixture->setArAdressnr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArAdressnr()
		);
	}
	
	/**
	 * @test
	 */
	public function getArNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArNameForStringSetsArName() { 
		$this->fixture->setArName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArName()
		);
	}
	
	/**
	 * @test
	 */
	public function getArPLZReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArPLZForStringSetsArPLZ() { 
		$this->fixture->setArPLZ('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArPLZ()
		);
	}
	
	/**
	 * @test
	 */
	public function getArOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArOrtForStringSetsArOrt() { 
		$this->fixture->setArOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getArStrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArStrForStringSetsArStr() { 
		$this->fixture->setArStr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArStr()
		);
	}
	
	/**
	 * @test
	 */
	public function getArTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArTelForStringSetsArTel() { 
		$this->fixture->setArTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getArFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArFaxForStringSetsArFax() { 
		$this->fixture->setArFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getArMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArMailForStringSetsArMail() { 
		$this->fixture->setArMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getArzustAPReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArzustAPForStringSetsArzustAP() { 
		$this->fixture->setArzustAP('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArzustAP()
		);
	}
	
	/**
	 * @test
	 */
	public function getArDirektTelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArDirektTelForStringSetsArDirektTel() { 
		$this->fixture->setArDirektTel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArDirektTel()
		);
	}
	
	/**
	 * @test
	 */
	public function getArdirektFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArdirektFaxForStringSetsArdirektFax() { 
		$this->fixture->setArdirektFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArdirektFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getArdirektMailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArdirektMailForStringSetsArdirektMail() { 
		$this->fixture->setArdirektMail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArdirektMail()
		);
	}
	
	/**
	 * @test
	 */
	public function getArWebsiteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArWebsiteForStringSetsArWebsite() { 
		$this->fixture->setArWebsite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArWebsite()
		);
	}
	
	/**
	 * @test
	 */
	public function getArHandyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArHandyForStringSetsArHandy() { 
		$this->fixture->setArHandy('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArHandy()
		);
	}
	
	/**
	 * @test
	 */
	public function getCalledOnReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCalledOnForStringSetsCalledOn() { 
		$this->fixture->setCalledOn('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCalledOn()
		);
	}
	
	/**
	 * @test
	 */
	public function getRecallReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setRecallForStringSetsRecall() { 
		$this->fixture->setRecall('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getRecall()
		);
	}
	
	/**
	 * @test
	 */
	public function getNoticeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNoticeForStringSetsNotice() { 
		$this->fixture->setNotice('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNotice()
		);
	}
	
	/**
	 * @test
	 */
	public function getProirityReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getProirity()
		);
	}

	/**
	 * @test
	 */
	public function setProirityForIntegerSetsProirity() { 
		$this->fixture->setProirity(12);

		$this->assertSame(
			12,
			$this->fixture->getProirity()
		);
	}
	
}
?>