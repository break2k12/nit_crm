<?php
namespace TYPO3\BrwKunden\Domain\Model;

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
class Kundendaten extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Erstellt am
	 *
	 * @var \string
	 */
	protected $erstellt;

	/**
	 * Projekt
	 *
	 * @var \string
	 */
	protected $projekt;

	/**
	 * Bauart
	 *
	 * @var \string
	 */
	protected $bauart;

	/**
	 * Gebäudeart
	 *
	 * @var \string
	 */
	protected $gebaeudeart;

	/**
	 * Gebäudekategorie
	 *
	 * @var \string
	 */
	protected $kategorie;

	/**
	 * PLZ Bauplatz
	 *
	 * @var \string
	 */
	protected $plzbau;

	/**
	 * Länderkennzeichen Bauplatz
	 *
	 * @var \string
	 */
	protected $lkzbau;

	/**
	 * Ort Bauplatz
	 *
	 * @var \string
	 */
	protected $ortbau;

	/**
	 * Straße Bauplatz
	 *
	 * @var \string
	 */
	protected $strbau;

	/**
	 * Bundesland
	 *
	 * @var \string
	 */
	protected $bl;

	/**
	 * Landkreis
	 *
	 * @var \string
	 */
	protected $lkr;

	/**
	 * Planungsstand
	 *
	 * @var \string
	 */
	protected $planstand;

	/**
	 * geplanter Baubeginn
	 *
	 * @var \string
	 */
	protected $geplBauBeg;

	/**
	 * geplante Bauzeit
	 *
	 * @var \string
	 */
	protected $geplBauzeit;

	/**
	 * Mauerwerk (Konstruktion)
	 *
	 * @var \string
	 */
	protected $mauerwerk;

	/**
	 * Dachkonstruktion
	 *
	 * @var \string
	 */
	protected $dachkonstr;

	/**
	 * Dacheindeckung
	 *
	 * @var \string
	 */
	protected $dacheind;

	/**
	 * Fassade
	 *
	 * @var \string
	 */
	protected $fassade;

	/**
	 * sonstige Baudetails
	 *
	 * @var \string
	 */
	protected $sonstBaudet;

	/**
	 * Ausstattung aussen
	 *
	 * @var \string
	 */
	protected $ausstattAussen;

	/**
	 * Ausstattung innen
	 *
	 * @var \string
	 */
	protected $ausstattInnen;

	/**
	 * Gewerke Vorbereitungsarbeiten
	 *
	 * @var \string
	 */
	protected $gewerkVorber;

	/**
	 * Gewerke für Aussenanlagen
	 *
	 * @var \string
	 */
	protected $gewerkAussenanlage;

	/**
	 * allgemeine Gewerke
	 *
	 * @var \string
	 */
	protected $allgGewerk;

	/**
	 * Dienstleistungsgewerke
	 *
	 * @var \string
	 */
	protected $dlGewerke;

	/**
	 * Vergabe KZ.
	 *
	 * @var \string
	 */
	protected $vergabeKz;

	/**
	 * BH Funktion
	 *
	 * @var \string
	 */
	protected $bhFunktion;

	/**
	 * BH Adressnr
	 *
	 * @var \string
	 */
	protected $bhAdressnr;

	/**
	 * BH Name
	 *
	 * @var \string
	 */
	protected $bHName;

	/**
	 * BH LKZ
	 *
	 * @var \string
	 */
	protected $bhlkz;

	/**
	 * BH PLZ
	 *
	 * @var \string
	 */
	protected $bhPlz;

	/**
	 * BH Ort
	 *
	 * @var \string
	 */
	protected $bhOrt;

	/**
	 * BH Straße
	 *
	 * @var \string
	 */
	protected $bhStr;

	/**
	 * BH Telefon
	 *
	 * @var \string
	 */
	protected $bhTel;

	/**
	 * BH Fax
	 *
	 * @var \string
	 */
	protected $bhFax;

	/**
	 * BH E-Mail
	 *
	 * @var \string
	 */
	protected $bhMail;

	/**
	 * BH zuständig
	 *
	 * @var \string
	 */
	protected $bhZust;

	/**
	 * BH Direktwahl
	 *
	 * @var \string
	 */
	protected $direktTelbh;

	/**
	 * BH Direktfax
	 *
	 * @var \string
	 */
	protected $bhDirektFax;

	/**
	 * BH Direkt E-Mail
	 *
	 * @var \string
	 */
	protected $bhDirektMail;

	/**
	 * BH Homepage
	 *
	 * @var \string
	 */
	protected $bhHomepage;

	/**
	 * BH Handy
	 *
	 * @var \string
	 */
	protected $bhHandy;

	/**
	 * Funktion Bauunternehmer
	 *
	 * @var \string
	 */
	protected $buFunktion;

	/**
	 * Bauunternehmer Adressnummer
	 *
	 * @var \string
	 */
	protected $buAdressNr;

	/**
	 * Bauunternehmer Name
	 *
	 * @var \string
	 */
	protected $buName;

	/**
	 * Bauunternehmer PLZ
	 *
	 * @var \string
	 */
	protected $buPlz;

	/**
	 * Bauunternehmer Ort
	 *
	 * @var \string
	 */
	protected $buOrt;

	/**
	 * Bauunternehmer Strasse
	 *
	 * @var \string
	 */
	protected $buStr;

	/**
	 * Bauunternehmer Telefon
	 *
	 * @var \string
	 */
	protected $buTel;

	/**
	 * Bauunternehmer Fax
	 *
	 * @var \string
	 */
	protected $buFax;

	/**
	 * Bauunternehmer E-Mail
	 *
	 * @var \string
	 */
	protected $buMail;

	/**
	 * Bauunternehmer zuständiger AP
	 *
	 * @var \string
	 */
	protected $buzustAP;

	/**
	 * Bauunternehmer Direktwahl
	 *
	 * @var \string
	 */
	protected $budirektTel;

	/**
	 * Bauunternehmer Direkt Fax
	 *
	 * @var \string
	 */
	protected $buDirektFax;

	/**
	 * Bauunternehmer Direkt E-Mail
	 *
	 * @var \string
	 */
	protected $budirektMail;

	/**
	 * Bauunternehmer Homepage
	 *
	 * @var \string
	 */
	protected $buwebsite;

	/**
	 * Bauunternehmer Handy
	 *
	 * @var \string
	 */
	protected $buHandy;

	/**
	 * Architekt Funktion
	 *
	 * @var \string
	 */
	protected $arFunktionArch;

	/**
	 * Architekt Adressnummer
	 *
	 * @var \string
	 */
	protected $arAdressnr;

	/**
	 * Architekt Name
	 *
	 * @var \string
	 */
	protected $arName;

	/**
	 * Architekt PLZ
	 *
	 * @var \string
	 */
	protected $arPLZ;

	/**
	 * Architekt Ort
	 *
	 * @var \string
	 */
	protected $arOrt;

	/**
	 * Architekt Strasse
	 *
	 * @var \string
	 */
	protected $arStr;

	/**
	 * Architekt Telefon
	 *
	 * @var \string
	 */
	protected $arTel;

	/**
	 * Architekt FAX
	 *
	 * @var \string
	 */
	protected $arFax;

	/**
	 * Architekt E-Mail
	 *
	 * @var \string
	 */
	protected $arMail;

	/**
	 * Architekt zuständiger AP
	 *
	 * @var \string
	 */
	protected $arzustAP;

	/**
	 * Architekt Direktwahl Telefon
	 *
	 * @var \string
	 */
	protected $arDirektTel;

	/**
	 * Architekt Direktwahl Fax
	 *
	 * @var \string
	 */
	protected $ardirektFax;

	/**
	 * Architekt Direkte E-Mail
	 *
	 * @var \string
	 */
	protected $ardirektMail;

	/**
	 * Architekt Homepage
	 *
	 * @var \string
	 */
	protected $arWebsite;

	/**
	 * Architekt Handy
	 *
	 * @var \string
	 */
	protected $arHandy;

	/**
	 * Angerufen am
	 *
	 * @var \string
	 */
	protected $calledOn;

	/**
	 * Widervorlage am
	 *
	 * @var \string
	 */
	protected $recall;

	/**
	 * Notizen
	 *
	 * @var \string
	 */
	protected $notice;

	/**
	 * Priorität
	 *
	 * @var \integer
	 */
	protected $proirity;
  

  
  
  
  /**

* Record visibility

*

* @var \boolean

*/

protected $hiderecord;

/**
	 * Benutzer
	 *
	 * @var \string
	 */
	protected $user;
  
  
  
  /**

* Sets the user

*

* @param boolean 

* @return void

*/

public function setUser($user) {

$this->user = $user;

}



/**

* Returns the user

*

* @return boolean

*/

public function getUser() {

return $this->user;

}



/**

* Sets the visibility

*

* @param boolean 

* @return void

*/

public function setHiderecord($hiderecord) {

$this->hiderecord = $hiderecord;

}



/**

* Returns the visibility

*

* @return boolean

*/

public function getHiderecord() {

return $this->hiderecord;

}

	/**
	 * Returns the erstellt
	 *
	 * @return \string $erstellt
	 */
	public function getErstellt() {
		return $this->erstellt;
	}

	/**
	 * Sets the erstellt
	 *
	 * @param \string $erstellt
	 * @return void
	 */
	public function setErstellt($erstellt) {
		$this->erstellt = $erstellt;
	}
  
  
  /**
	 * Returns the tstamp
	 *
	 * @return \integer $tstamp
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Sets the tstamp
	 *
	 * @param \integer $tstamp
	 * @return void
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}
  
  
  
  

	/**
	 * Returns the projekt
	 *
	 * @return \string $projekt
	 */
	public function getProjekt() {
		return $this->projekt;
	}

	/**
	 * Sets the projekt
	 *
	 * @param \string $projekt
	 * @return void
	 */
	public function setProjekt($projekt) {
		$this->projekt = $projekt;
	}

	/**
	 * Returns the bauart
	 *
	 * @return \string $bauart
	 */
	public function getBauart() {
		return $this->bauart;
	}

	/**
	 * Sets the bauart
	 *
	 * @param \string $bauart
	 * @return void
	 */
	public function setBauart($bauart) {
		$this->bauart = $bauart;
	}

	/**
	 * Returns the gebaeudeart
	 *
	 * @return \string $gebaeudeart
	 */
	public function getGebaeudeart() {
		return $this->gebaeudeart;
	}

	/**
	 * Sets the gebaeudeart
	 *
	 * @param \string $gebaeudeart
	 * @return void
	 */
	public function setGebaeudeart($gebaeudeart) {
		$this->gebaeudeart = $gebaeudeart;
	}

	/**
	 * Returns the kategorie
	 *
	 * @return \string $kategorie
	 */
	public function getKategorie() {
		return $this->kategorie;
	}

	/**
	 * Sets the kategorie
	 *
	 * @param \string $kategorie
	 * @return void
	 */
	public function setKategorie($kategorie) {
		$this->kategorie = $kategorie;
	}

	/**
	 * Returns the plzbau
	 *
	 * @return \string $plzbau
	 */
	public function getPlzbau() {
		return $this->plzbau;
	}

	/**
	 * Sets the plzbau
	 *
	 * @param \string $plzbau
	 * @return void
	 */
	public function setPlzbau($plzbau) {
		$this->plzbau = $plzbau;
	}

	/**
	 * Returns the lkzbau
	 *
	 * @return \string $lkzbau
	 */
	public function getLkzbau() {
		return $this->lkzbau;
	}

	/**
	 * Sets the lkzbau
	 *
	 * @param \string $lkzbau
	 * @return void
	 */
	public function setLkzbau($lkzbau) {
		$this->lkzbau = $lkzbau;
	}

	/**
	 * Returns the ortbau
	 *
	 * @return \string $ortbau
	 */
	public function getOrtbau() {
		return $this->ortbau;
	}

	/**
	 * Sets the ortbau
	 *
	 * @param \string $ortbau
	 * @return void
	 */
	public function setOrtbau($ortbau) {
		$this->ortbau = $ortbau;
	}

	/**
	 * Returns the strbau
	 *
	 * @return \string $strbau
	 */
	public function getStrbau() {
		return $this->strbau;
	}

	/**
	 * Sets the strbau
	 *
	 * @param \string $strbau
	 * @return void
	 */
	public function setStrbau($strbau) {
		$this->strbau = $strbau;
	}

	/**
	 * Returns the bl
	 *
	 * @return \string $bl
	 */
	public function getBl() {
		return $this->bl;
	}

	/**
	 * Sets the bl
	 *
	 * @param \string $bl
	 * @return void
	 */
	public function setBl($bl) {
		$this->bl = $bl;
	}

	/**
	 * Returns the lkr
	 *
	 * @return \string $lkr
	 */
	public function getLkr() {
		return $this->lkr;
	}

	/**
	 * Sets the lkr
	 *
	 * @param \string $lkr
	 * @return void
	 */
	public function setLkr($lkr) {
		$this->lkr = $lkr;
	}

	/**
	 * Returns the planstand
	 *
	 * @return \string $planstand
	 */
	public function getPlanstand() {
		return $this->planstand;
	}

	/**
	 * Sets the planstand
	 *
	 * @param \string $planstand
	 * @return void
	 */
	public function setPlanstand($planstand) {
		$this->planstand = $planstand;
	}

	/**
	 * Returns the geplBauBeg
	 *
	 * @return \string $geplBauBeg
	 */
	public function getGeplBauBeg() {
		return $this->geplBauBeg;
	}

	/**
	 * Sets the geplBauBeg
	 *
	 * @param \string $geplBauBeg
	 * @return void
	 */
	public function setGeplBauBeg($geplBauBeg) {
		$this->geplBauBeg = $geplBauBeg;
	}

	/**
	 * Returns the geplBauzeit
	 *
	 * @return \string $geplBauzeit
	 */
	public function getGeplBauzeit() {
		return $this->geplBauzeit;
	}

	/**
	 * Sets the geplBauzeit
	 *
	 * @param \string $geplBauzeit
	 * @return void
	 */
	public function setGeplBauzeit($geplBauzeit) {
		$this->geplBauzeit = $geplBauzeit;
	}

	/**
	 * Returns the mauerwerk
	 *
	 * @return \string $mauerwerk
	 */
	public function getMauerwerk() {
		return $this->mauerwerk;
	}

	/**
	 * Sets the mauerwerk
	 *
	 * @param \string $mauerwerk
	 * @return void
	 */
	public function setMauerwerk($mauerwerk) {
		$this->mauerwerk = $mauerwerk;
	}

	/**
	 * Returns the dachkonstr
	 *
	 * @return \string $dachkonstr
	 */
	public function getDachkonstr() {
		return $this->dachkonstr;
	}

	/**
	 * Sets the dachkonstr
	 *
	 * @param \string $dachkonstr
	 * @return void
	 */
	public function setDachkonstr($dachkonstr) {
		$this->dachkonstr = $dachkonstr;
	}

	/**
	 * Returns the dacheind
	 *
	 * @return \string $dacheind
	 */
	public function getDacheind() {
		return $this->dacheind;
	}

	/**
	 * Sets the dacheind
	 *
	 * @param \string $dacheind
	 * @return void
	 */
	public function setDacheind($dacheind) {
		$this->dacheind = $dacheind;
	}

	/**
	 * Returns the fassade
	 *
	 * @return \string $fassade
	 */
	public function getFassade() {
		return $this->fassade;
	}

	/**
	 * Sets the fassade
	 *
	 * @param \string $fassade
	 * @return void
	 */
	public function setFassade($fassade) {
		$this->fassade = $fassade;
	}

	/**
	 * Returns the sonstBaudet
	 *
	 * @return \string $sonstBaudet
	 */
	public function getSonstBaudet() {
		return $this->sonstBaudet;
	}

	/**
	 * Sets the sonstBaudet
	 *
	 * @param \string $sonstBaudet
	 * @return void
	 */
	public function setSonstBaudet($sonstBaudet) {
		$this->sonstBaudet = $sonstBaudet;
	}

	/**
	 * Returns the ausstattAussen
	 *
	 * @return \string $ausstattAussen
	 */
	public function getAusstattAussen() {
		return $this->ausstattAussen;
	}

	/**
	 * Sets the ausstattAussen
	 *
	 * @param \string $ausstattAussen
	 * @return void
	 */
	public function setAusstattAussen($ausstattAussen) {
		$this->ausstattAussen = $ausstattAussen;
	}

	/**
	 * Returns the ausstattInnen
	 *
	 * @return \string $ausstattInnen
	 */
	public function getAusstattInnen() {
		return $this->ausstattInnen;
	}

	/**
	 * Sets the ausstattInnen
	 *
	 * @param \string $ausstattInnen
	 * @return void
	 */
	public function setAusstattInnen($ausstattInnen) {
		$this->ausstattInnen = $ausstattInnen;
	}

	/**
	 * Returns the gewerkVorber
	 *
	 * @return \string $gewerkVorber
	 */
	public function getGewerkVorber() {
		return $this->gewerkVorber;
	}

	/**
	 * Sets the gewerkVorber
	 *
	 * @param \string $gewerkVorber
	 * @return void
	 */
	public function setGewerkVorber($gewerkVorber) {
		$this->gewerkVorber = $gewerkVorber;
	}

	/**
	 * Returns the gewerkAussenanlage
	 *
	 * @return \string $gewerkAussenanlage
	 */
	public function getGewerkAussenanlage() {
		return $this->gewerkAussenanlage;
	}

	/**
	 * Sets the gewerkAussenanlage
	 *
	 * @param \string $gewerkAussenanlage
	 * @return void
	 */
	public function setGewerkAussenanlage($gewerkAussenanlage) {
		$this->gewerkAussenanlage = $gewerkAussenanlage;
	}

	/**
	 * Returns the allgGewerk
	 *
	 * @return \string $allgGewerk
	 */
	public function getAllgGewerk() {
		return $this->allgGewerk;
	}

	/**
	 * Sets the allgGewerk
	 *
	 * @param \string $allgGewerk
	 * @return void
	 */
	public function setAllgGewerk($allgGewerk) {
		$this->allgGewerk = $allgGewerk;
	}

	/**
	 * Returns the dlGewerke
	 *
	 * @return \string $dlGewerke
	 */
	public function getDlGewerke() {
		return $this->dlGewerke;
	}

	/**
	 * Sets the dlGewerke
	 *
	 * @param \string $dlGewerke
	 * @return void
	 */
	public function setDlGewerke($dlGewerke) {
		$this->dlGewerke = $dlGewerke;
	}

	/**
	 * Returns the vergabeKz
	 *
	 * @return \string $vergabeKz
	 */
	public function getVergabeKz() {
		return $this->vergabeKz;
	}

	/**
	 * Sets the vergabeKz
	 *
	 * @param \string $vergabeKz
	 * @return void
	 */
	public function setVergabeKz($vergabeKz) {
		$this->vergabeKz = $vergabeKz;
	}

	/**
	 * Returns the bhFunktion
	 *
	 * @return \string $bhFunktion
	 */
	public function getBhFunktion() {
		return $this->bhFunktion;
	}

	/**
	 * Sets the bhFunktion
	 *
	 * @param \string $bhFunktion
	 * @return void
	 */
	public function setBhFunktion($bhFunktion) {
		$this->bhFunktion = $bhFunktion;
	}

	/**
	 * Returns the bhAdressnr
	 *
	 * @return \string $bhAdressnr
	 */
	public function getBhAdressnr() {
		return $this->bhAdressnr;
	}

	/**
	 * Sets the bhAdressnr
	 *
	 * @param \string $bhAdressnr
	 * @return void
	 */
	public function setBhAdressnr($bhAdressnr) {
		$this->bhAdressnr = $bhAdressnr;
	}

	/**
	 * Returns the bHName
	 *
	 * @return \string $bHName
	 */
	public function getBHName() {
		return $this->bHName;
	}

	/**
	 * Sets the bHName
	 *
	 * @param \string $bHName
	 * @return void
	 */
	public function setBHName($bHName) {
		$this->bHName = $bHName;
	}

	/**
	 * Returns the bhlkz
	 *
	 * @return \string $bhlkz
	 */
	public function getBhlkz() {
		return $this->bhlkz;
	}

	/**
	 * Sets the bhlkz
	 *
	 * @param \string $bhlkz
	 * @return void
	 */
	public function setBhlkz($bhlkz) {
		$this->bhlkz = $bhlkz;
	}

	/**
	 * Returns the bhPlz
	 *
	 * @return \string $bhPlz
	 */
	public function getBhPlz() {
		return $this->bhPlz;
	}

	/**
	 * Sets the bhPlz
	 *
	 * @param \string $bhPlz
	 * @return void
	 */
	public function setBhPlz($bhPlz) {
		$this->bhPlz = $bhPlz;
	}

	/**
	 * Returns the bhOrt
	 *
	 * @return \string $bhOrt
	 */
	public function getBhOrt() {
		return $this->bhOrt;
	}

	/**
	 * Sets the bhOrt
	 *
	 * @param \string $bhOrt
	 * @return void
	 */
	public function setBhOrt($bhOrt) {
		$this->bhOrt = $bhOrt;
	}

	/**
	 * Returns the bhStr
	 *
	 * @return \string $bhStr
	 */
	public function getBhStr() {
		return $this->bhStr;
	}

	/**
	 * Sets the bhStr
	 *
	 * @param \string $bhStr
	 * @return void
	 */
	public function setBhStr($bhStr) {
		$this->bhStr = $bhStr;
	}

	/**
	 * Returns the bhTel
	 *
	 * @return \string $bhTel
	 */
	public function getBhTel() {
		return $this->bhTel;
	}

	/**
	 * Sets the bhTel
	 *
	 * @param \string $bhTel
	 * @return void
	 */
	public function setBhTel($bhTel) {
		$this->bhTel = $bhTel;
	}

	/**
	 * Returns the bhFax
	 *
	 * @return \string $bhFax
	 */
	public function getBhFax() {
		return $this->bhFax;
	}

	/**
	 * Sets the bhFax
	 *
	 * @param \string $bhFax
	 * @return void
	 */
	public function setBhFax($bhFax) {
		$this->bhFax = $bhFax;
	}

	/**
	 * Returns the bhMail
	 *
	 * @return \string $bhMail
	 */
	public function getBhMail() {
		return $this->bhMail;
	}

	/**
	 * Sets the bhMail
	 *
	 * @param \string $bhMail
	 * @return void
	 */
	public function setBhMail($bhMail) {
		$this->bhMail = $bhMail;
	}

	/**
	 * Returns the bhZust
	 *
	 * @return \string $bhZust
	 */
	public function getBhZust() {
		return $this->bhZust;
	}

	/**
	 * Sets the bhZust
	 *
	 * @param \string $bhZust
	 * @return void
	 */
	public function setBhZust($bhZust) {
		$this->bhZust = $bhZust;
	}

	/**
	 * Returns the direktTelbh
	 *
	 * @return \string $direktTelbh
	 */
	public function getDirektTelbh() {
		return $this->direktTelbh;
	}

	/**
	 * Sets the direktTelbh
	 *
	 * @param \string $direktTelbh
	 * @return void
	 */
	public function setDirektTelbh($direktTelbh) {
		$this->direktTelbh = $direktTelbh;
	}

	/**
	 * Returns the bhDirektFax
	 *
	 * @return \string $bhDirektFax
	 */
	public function getBhDirektFax() {
		return $this->bhDirektFax;
	}

	/**
	 * Sets the bhDirektFax
	 *
	 * @param \string $bhDirektFax
	 * @return void
	 */
	public function setBhDirektFax($bhDirektFax) {
		$this->bhDirektFax = $bhDirektFax;
	}

	/**
	 * Returns the bhDirektMail
	 *
	 * @return \string $bhDirektMail
	 */
	public function getBhDirektMail() {
		return $this->bhDirektMail;
	}

	/**
	 * Sets the bhDirektMail
	 *
	 * @param \string $bhDirektMail
	 * @return void
	 */
	public function setBhDirektMail($bhDirektMail) {
		$this->bhDirektMail = $bhDirektMail;
	}

	/**
	 * Returns the bhHomepage
	 *
	 * @return \string $bhHomepage
	 */
	public function getBhHomepage() {
		return $this->bhHomepage;
	}

	/**
	 * Sets the bhHomepage
	 *
	 * @param \string $bhHomepage
	 * @return void
	 */
	public function setBhHomepage($bhHomepage) {
		$this->bhHomepage = $bhHomepage;
	}

	/**
	 * Returns the bhHandy
	 *
	 * @return \string $bhHandy
	 */
	public function getBhHandy() {
		return $this->bhHandy;
	}

	/**
	 * Sets the bhHandy
	 *
	 * @param \string $bhHandy
	 * @return void
	 */
	public function setBhHandy($bhHandy) {
		$this->bhHandy = $bhHandy;
	}

	/**
	 * Returns the buFunktion
	 *
	 * @return \string $buFunktion
	 */
	public function getBuFunktion() {
		return $this->buFunktion;
	}

	/**
	 * Sets the buFunktion
	 *
	 * @param \string $buFunktion
	 * @return void
	 */
	public function setBuFunktion($buFunktion) {
		$this->buFunktion = $buFunktion;
	}

	/**
	 * Returns the buAdressNr
	 *
	 * @return \string $buAdressNr
	 */
	public function getBuAdressNr() {
		return $this->buAdressNr;
	}

	/**
	 * Sets the buAdressNr
	 *
	 * @param \string $buAdressNr
	 * @return void
	 */
	public function setBuAdressNr($buAdressNr) {
		$this->buAdressNr = $buAdressNr;
	}

	/**
	 * Returns the buName
	 *
	 * @return \string $buName
	 */
	public function getBuName() {
		return $this->buName;
	}

	/**
	 * Sets the buName
	 *
	 * @param \string $buName
	 * @return void
	 */
	public function setBuName($buName) {
		$this->buName = $buName;
	}

	/**
	 * Returns the buPlz
	 *
	 * @return \string $buPlz
	 */
	public function getBuPlz() {
		return $this->buPlz;
	}

	/**
	 * Sets the buPlz
	 *
	 * @param \string $buPlz
	 * @return void
	 */
	public function setBuPlz($buPlz) {
		$this->buPlz = $buPlz;
	}

	/**
	 * Returns the buOrt
	 *
	 * @return \string $buOrt
	 */
	public function getBuOrt() {
		return $this->buOrt;
	}

	/**
	 * Sets the buOrt
	 *
	 * @param \string $buOrt
	 * @return void
	 */
	public function setBuOrt($buOrt) {
		$this->buOrt = $buOrt;
	}

	/**
	 * Returns the buStr
	 *
	 * @return \string $buStr
	 */
	public function getBuStr() {
		return $this->buStr;
	}

	/**
	 * Sets the buStr
	 *
	 * @param \string $buStr
	 * @return void
	 */
	public function setBuStr($buStr) {
		$this->buStr = $buStr;
	}

	/**
	 * Returns the buTel
	 *
	 * @return \string $buTel
	 */
	public function getBuTel() {
		return $this->buTel;
	}

	/**
	 * Sets the buTel
	 *
	 * @param \string $buTel
	 * @return void
	 */
	public function setBuTel($buTel) {
		$this->buTel = $buTel;
	}

	/**
	 * Returns the buFax
	 *
	 * @return \string $buFax
	 */
	public function getBuFax() {
		return $this->buFax;
	}

	/**
	 * Sets the buFax
	 *
	 * @param \string $buFax
	 * @return void
	 */
	public function setBuFax($buFax) {
		$this->buFax = $buFax;
	}

	/**
	 * Returns the buMail
	 *
	 * @return \string $buMail
	 */
	public function getBuMail() {
		return $this->buMail;
	}

	/**
	 * Sets the buMail
	 *
	 * @param \string $buMail
	 * @return void
	 */
	public function setBuMail($buMail) {
		$this->buMail = $buMail;
	}

	/**
	 * Returns the buzustAP
	 *
	 * @return \string $buzustAP
	 */
	public function getBuzustAP() {
		return $this->buzustAP;
	}

	/**
	 * Sets the buzustAP
	 *
	 * @param \string $buzustAP
	 * @return void
	 */
	public function setBuzustAP($buzustAP) {
		$this->buzustAP = $buzustAP;
	}

	/**
	 * Returns the budirektTel
	 *
	 * @return \string $budirektTel
	 */
	public function getBudirektTel() {
		return $this->budirektTel;
	}

	/**
	 * Sets the budirektTel
	 *
	 * @param \string $budirektTel
	 * @return void
	 */
	public function setBudirektTel($budirektTel) {
		$this->budirektTel = $budirektTel;
	}

	/**
	 * Returns the buDirektFax
	 *
	 * @return \string $buDirektFax
	 */
	public function getBuDirektFax() {
		return $this->buDirektFax;
	}

	/**
	 * Sets the buDirektFax
	 *
	 * @param \string $buDirektFax
	 * @return void
	 */
	public function setBuDirektFax($buDirektFax) {
		$this->buDirektFax = $buDirektFax;
	}

	/**
	 * Returns the budirektMail
	 *
	 * @return \string $budirektMail
	 */
	public function getBudirektMail() {
		return $this->budirektMail;
	}

	/**
	 * Sets the budirektMail
	 *
	 * @param \string $budirektMail
	 * @return void
	 */
	public function setBudirektMail($budirektMail) {
		$this->budirektMail = $budirektMail;
	}

	/**
	 * Returns the buwebsite
	 *
	 * @return \string $buwebsite
	 */
	public function getBuwebsite() {
		return $this->buwebsite;
	}

	/**
	 * Sets the buwebsite
	 *
	 * @param \string $buwebsite
	 * @return void
	 */
	public function setBuwebsite($buwebsite) {
		$this->buwebsite = $buwebsite;
	}

	/**
	 * Returns the buHandy
	 *
	 * @return \string $buHandy
	 */
	public function getBuHandy() {
		return $this->buHandy;
	}

	/**
	 * Sets the buHandy
	 *
	 * @param \string $buHandy
	 * @return void
	 */
	public function setBuHandy($buHandy) {
		$this->buHandy = $buHandy;
	}

	/**
	 * Returns the arFunktionArch
	 *
	 * @return \string $arFunktionArch
	 */
	public function getArFunktionArch() {
		return $this->arFunktionArch;
	}

	/**
	 * Sets the arFunktionArch
	 *
	 * @param \string $arFunktionArch
	 * @return void
	 */
	public function setArFunktionArch($arFunktionArch) {
		$this->arFunktionArch = $arFunktionArch;
	}

	/**
	 * Returns the arAdressnr
	 *
	 * @return \string $arAdressnr
	 */
	public function getArAdressnr() {
		return $this->arAdressnr;
	}

	/**
	 * Sets the arAdressnr
	 *
	 * @param \string $arAdressnr
	 * @return void
	 */
	public function setArAdressnr($arAdressnr) {
		$this->arAdressnr = $arAdressnr;
	}

	/**
	 * Returns the arName
	 *
	 * @return \string $arName
	 */
	public function getArName() {
		return $this->arName;
	}

	/**
	 * Sets the arName
	 *
	 * @param \string $arName
	 * @return void
	 */
	public function setArName($arName) {
		$this->arName = $arName;
	}

	/**
	 * Returns the arPLZ
	 *
	 * @return \string $arPLZ
	 */
	public function getArPLZ() {
		return $this->arPLZ;
	}

	/**
	 * Sets the arPLZ
	 *
	 * @param \string $arPLZ
	 * @return void
	 */
	public function setArPLZ($arPLZ) {
		$this->arPLZ = $arPLZ;
	}

	/**
	 * Returns the arOrt
	 *
	 * @return \string $arOrt
	 */
	public function getArOrt() {
		return $this->arOrt;
	}

	/**
	 * Sets the arOrt
	 *
	 * @param \string $arOrt
	 * @return void
	 */
	public function setArOrt($arOrt) {
		$this->arOrt = $arOrt;
	}

	/**
	 * Returns the arStr
	 *
	 * @return \string $arStr
	 */
	public function getArStr() {
		return $this->arStr;
	}

	/**
	 * Sets the arStr
	 *
	 * @param \string $arStr
	 * @return void
	 */
	public function setArStr($arStr) {
		$this->arStr = $arStr;
	}

	/**
	 * Returns the arTel
	 *
	 * @return \string $arTel
	 */
	public function getArTel() {
		return $this->arTel;
	}

	/**
	 * Sets the arTel
	 *
	 * @param \string $arTel
	 * @return void
	 */
	public function setArTel($arTel) {
		$this->arTel = $arTel;
	}

	/**
	 * Returns the arFax
	 *
	 * @return \string $arFax
	 */
	public function getArFax() {
		return $this->arFax;
	}

	/**
	 * Sets the arFax
	 *
	 * @param \string $arFax
	 * @return void
	 */
	public function setArFax($arFax) {
		$this->arFax = $arFax;
	}

	/**
	 * Returns the arMail
	 *
	 * @return \string $arMail
	 */
	public function getArMail() {
		return $this->arMail;
	}

	/**
	 * Sets the arMail
	 *
	 * @param \string $arMail
	 * @return void
	 */
	public function setArMail($arMail) {
		$this->arMail = $arMail;
	}

	/**
	 * Returns the arzustAP
	 *
	 * @return \string $arzustAP
	 */
	public function getArzustAP() {
		return $this->arzustAP;
	}

	/**
	 * Sets the arzustAP
	 *
	 * @param \string $arzustAP
	 * @return void
	 */
	public function setArzustAP($arzustAP) {
		$this->arzustAP = $arzustAP;
	}

	/**
	 * Returns the arDirektTel
	 *
	 * @return \string $arDirektTel
	 */
	public function getArDirektTel() {
		return $this->arDirektTel;
	}

	/**
	 * Sets the arDirektTel
	 *
	 * @param \string $arDirektTel
	 * @return void
	 */
	public function setArDirektTel($arDirektTel) {
		$this->arDirektTel = $arDirektTel;
	}

	/**
	 * Returns the ardirektFax
	 *
	 * @return \string $ardirektFax
	 */
	public function getArdirektFax() {
		return $this->ardirektFax;
	}

	/**
	 * Sets the ardirektFax
	 *
	 * @param \string $ardirektFax
	 * @return void
	 */
	public function setArdirektFax($ardirektFax) {
		$this->ardirektFax = $ardirektFax;
	}

	/**
	 * Returns the ardirektMail
	 *
	 * @return \string $ardirektMail
	 */
	public function getArdirektMail() {
		return $this->ardirektMail;
	}

	/**
	 * Sets the ardirektMail
	 *
	 * @param \string $ardirektMail
	 * @return void
	 */
	public function setArdirektMail($ardirektMail) {
		$this->ardirektMail = $ardirektMail;
	}

	/**
	 * Returns the arWebsite
	 *
	 * @return \string $arWebsite
	 */
	public function getArWebsite() {
		return $this->arWebsite;
	}

	/**
	 * Sets the arWebsite
	 *
	 * @param \string $arWebsite
	 * @return void
	 */
	public function setArWebsite($arWebsite) {
		$this->arWebsite = $arWebsite;
	}

	/**
	 * Returns the arHandy
	 *
	 * @return \string $arHandy
	 */
	public function getArHandy() {
		return $this->arHandy;
	}

	/**
	 * Sets the arHandy
	 *
	 * @param \string $arHandy
	 * @return void
	 */
	public function setArHandy($arHandy) {
		$this->arHandy = $arHandy;
	}

	/**
	 * Returns the calledOn
	 *
	 * @return \string $calledOn
	 */
	public function getCalledOn() {
		return $this->calledOn;
	}

	/**
	 * Sets the calledOn
	 *
	 * @param \string $calledOn
	 * @return void
	 */
	public function setCalledOn($calledOn) {
		$this->calledOn = $calledOn;
	}

	/**
	 * Returns the recall
	 *
	 * @return \string $recall
	 */
	public function getRecall() {
		return $this->recall;
	}

	/**
	 * Sets the recall
	 *
	 * @param \string $recall
	 * @return void
	 */
	public function setRecall($recall) {
		$this->recall = $recall;
	}

	/**
	 * Returns the notice
	 *
	 * @return \string $notice
	 */
	public function getNotice() {
		return $this->notice;
	}

	/**
	 * Sets the notice
	 *
	 * @param \string $notice
	 * @return void
	 */
	public function setNotice($notice) {
		$this->notice = $notice;
	}

	/**
	 * Returns the proirity
	 *
	 * @return \integer $proirity
	 */
	public function getProirity() {
		return $this->proirity;
	}

	/**
	 * Sets the proirity
	 *
	 * @param \integer $proirity
	 * @return void
	 */
	public function setProirity($proirity) {
		$this->proirity = $proirity;
	}

}
?>