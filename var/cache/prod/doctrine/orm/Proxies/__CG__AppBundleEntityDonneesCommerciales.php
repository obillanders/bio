<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DonneesCommerciales extends \AppBundle\Entity\DonneesCommerciales implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'nridPharmacie', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'objectif', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'caConseil', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'montantTotalHtGps', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'prestationsFactureesADate', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'montantHtRdp', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'datePaiementRdp'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'nridPharmacie', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'objectif', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteAnnuelR', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteRQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulDirectNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteAnnuelNr', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ1', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ2', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'cumulGrossisteNrQ3', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'caConseil', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'montantTotalHtGps', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'prestationsFactureesADate', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'montantHtRdp', '' . "\0" . 'AppBundle\\Entity\\DonneesCommerciales' . "\0" . 'datePaiementRdp'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DonneesCommerciales $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjectif($objectif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjectif', [$objectif]);

        return parent::setObjectif($objectif);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectif', []);

        return parent::getObjectif();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulAnnuelR($cumulAnnuelR)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulAnnuelR', [$cumulAnnuelR]);

        return parent::setCumulAnnuelR($cumulAnnuelR);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulAnnuelR()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulAnnuelR', []);

        return parent::getCumulAnnuelR();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulRQ1($cumulRQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulRQ1', [$cumulRQ1]);

        return parent::setCumulRQ1($cumulRQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulRQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulRQ1', []);

        return parent::getCumulRQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulRQ2($cumulRQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulRQ2', [$cumulRQ2]);

        return parent::setCumulRQ2($cumulRQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulRQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulRQ2', []);

        return parent::getCumulRQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulRQ3($cumulRQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulRQ3', [$cumulRQ3]);

        return parent::setCumulRQ3($cumulRQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulRQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulRQ3', []);

        return parent::getCumulRQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectAnnuelR($cumulDirectAnnuelR)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectAnnuelR', [$cumulDirectAnnuelR]);

        return parent::setCumulDirectAnnuelR($cumulDirectAnnuelR);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectAnnuelR()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectAnnuelR', []);

        return parent::getCumulDirectAnnuelR();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectRQ1($cumulDirectRQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectRQ1', [$cumulDirectRQ1]);

        return parent::setCumulDirectRQ1($cumulDirectRQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectRQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectRQ1', []);

        return parent::getCumulDirectRQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectRQ2($cumulDirectRQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectRQ2', [$cumulDirectRQ2]);

        return parent::setCumulDirectRQ2($cumulDirectRQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectRQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectRQ2', []);

        return parent::getCumulDirectRQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectRQ3($cumulDirectRQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectRQ3', [$cumulDirectRQ3]);

        return parent::setCumulDirectRQ3($cumulDirectRQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectRQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectRQ3', []);

        return parent::getCumulDirectRQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteAnnuelR($cumulGrossisteAnnuelR)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteAnnuelR', [$cumulGrossisteAnnuelR]);

        return parent::setCumulGrossisteAnnuelR($cumulGrossisteAnnuelR);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteAnnuelR()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteAnnuelR', []);

        return parent::getCumulGrossisteAnnuelR();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteRQ1($cumulGrossisteRQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteRQ1', [$cumulGrossisteRQ1]);

        return parent::setCumulGrossisteRQ1($cumulGrossisteRQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteRQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteRQ1', []);

        return parent::getCumulGrossisteRQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteRQ2($cumulGrossisteRQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteRQ2', [$cumulGrossisteRQ2]);

        return parent::setCumulGrossisteRQ2($cumulGrossisteRQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteRQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteRQ2', []);

        return parent::getCumulGrossisteRQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteRQ3($cumulGrossisteRQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteRQ3', [$cumulGrossisteRQ3]);

        return parent::setCumulGrossisteRQ3($cumulGrossisteRQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteRQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteRQ3', []);

        return parent::getCumulGrossisteRQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulAnnuelNr($cumulAnnuelNr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulAnnuelNr', [$cumulAnnuelNr]);

        return parent::setCumulAnnuelNr($cumulAnnuelNr);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulAnnuelNr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulAnnuelNr', []);

        return parent::getCumulAnnuelNr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulNrQ1($cumulNrQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulNrQ1', [$cumulNrQ1]);

        return parent::setCumulNrQ1($cumulNrQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulNrQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulNrQ1', []);

        return parent::getCumulNrQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulNrQ2($cumulNrQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulNrQ2', [$cumulNrQ2]);

        return parent::setCumulNrQ2($cumulNrQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulNrQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulNrQ2', []);

        return parent::getCumulNrQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulNrQ3($cumulNrQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulNrQ3', [$cumulNrQ3]);

        return parent::setCumulNrQ3($cumulNrQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulNrQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulNrQ3', []);

        return parent::getCumulNrQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectAnnuelNr($cumulDirectAnnuelNr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectAnnuelNr', [$cumulDirectAnnuelNr]);

        return parent::setCumulDirectAnnuelNr($cumulDirectAnnuelNr);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectAnnuelNr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectAnnuelNr', []);

        return parent::getCumulDirectAnnuelNr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectNrQ1($cumulDirectNrQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectNrQ1', [$cumulDirectNrQ1]);

        return parent::setCumulDirectNrQ1($cumulDirectNrQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectNrQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectNrQ1', []);

        return parent::getCumulDirectNrQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectNrQ2($cumulDirectNrQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectNrQ2', [$cumulDirectNrQ2]);

        return parent::setCumulDirectNrQ2($cumulDirectNrQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectNrQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectNrQ2', []);

        return parent::getCumulDirectNrQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulDirectNrQ3($cumulDirectNrQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulDirectNrQ3', [$cumulDirectNrQ3]);

        return parent::setCumulDirectNrQ3($cumulDirectNrQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulDirectNrQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulDirectNrQ3', []);

        return parent::getCumulDirectNrQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteAnnuelNr($cumulGrossisteAnnuelNr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteAnnuelNr', [$cumulGrossisteAnnuelNr]);

        return parent::setCumulGrossisteAnnuelNr($cumulGrossisteAnnuelNr);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteAnnuelNr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteAnnuelNr', []);

        return parent::getCumulGrossisteAnnuelNr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteNrQ1($cumulGrossisteNrQ1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteNrQ1', [$cumulGrossisteNrQ1]);

        return parent::setCumulGrossisteNrQ1($cumulGrossisteNrQ1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteNrQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteNrQ1', []);

        return parent::getCumulGrossisteNrQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteNrQ2($cumulGrossisteNrQ2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteNrQ2', [$cumulGrossisteNrQ2]);

        return parent::setCumulGrossisteNrQ2($cumulGrossisteNrQ2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteNrQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteNrQ2', []);

        return parent::getCumulGrossisteNrQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCumulGrossisteNrQ3($cumulGrossisteNrQ3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCumulGrossisteNrQ3', [$cumulGrossisteNrQ3]);

        return parent::setCumulGrossisteNrQ3($cumulGrossisteNrQ3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCumulGrossisteNrQ3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCumulGrossisteNrQ3', []);

        return parent::getCumulGrossisteNrQ3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaConseil($caConseil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaConseil', [$caConseil]);

        return parent::setCaConseil($caConseil);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaConseil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaConseil', []);

        return parent::getCaConseil();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantTotalHtGps($montantTotalHtGps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantTotalHtGps', [$montantTotalHtGps]);

        return parent::setMontantTotalHtGps($montantTotalHtGps);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantTotalHtGps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantTotalHtGps', []);

        return parent::getMontantTotalHtGps();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrestationsFactureesADate($prestationsFactureesADate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrestationsFactureesADate', [$prestationsFactureesADate]);

        return parent::setPrestationsFactureesADate($prestationsFactureesADate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrestationsFactureesADate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrestationsFactureesADate', []);

        return parent::getPrestationsFactureesADate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantHtRdp($montantHtRdp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantHtRdp', [$montantHtRdp]);

        return parent::setMontantHtRdp($montantHtRdp);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantHtRdp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantHtRdp', []);

        return parent::getMontantHtRdp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePaiementRdp($datePaiementRdp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePaiementRdp', [$datePaiementRdp]);

        return parent::setDatePaiementRdp($datePaiementRdp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePaiementRdp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePaiementRdp', []);

        return parent::getDatePaiementRdp();
    }

    /**
     * {@inheritDoc}
     */
    public function setNridPharmacie(\AppBundle\Entity\Officine $nridPharmacie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNridPharmacie', [$nridPharmacie]);

        return parent::setNridPharmacie($nridPharmacie);
    }

    /**
     * {@inheritDoc}
     */
    public function getNridPharmacie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNridPharmacie', []);

        return parent::getNridPharmacie();
    }

}
