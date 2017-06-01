<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OfficinePharmacien extends \AppBundle\Entity\OfficinePharmacien implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'nridLien', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'officine', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'pharmacien', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'interlocuteurPrincipal', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'dateEntree', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'dateSortie', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'emailPro', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'telephone', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'fonction', 'deleted'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'nridLien', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'officine', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'pharmacien', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'interlocuteurPrincipal', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'dateEntree', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'dateSortie', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'emailPro', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'telephone', '' . "\0" . 'AppBundle\\Entity\\OfficinePharmacien' . "\0" . 'fonction', 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OfficinePharmacien $proxy) {
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
    public function setNridLien($nridLien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNridLien', [$nridLien]);

        return parent::setNridLien($nridLien);
    }

    /**
     * {@inheritDoc}
     */
    public function getNridLien()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNridLien();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNridLien', []);

        return parent::getNridLien();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterlocuteurPrincipal($interlocuteurPrincipal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterlocuteurPrincipal', [$interlocuteurPrincipal]);

        return parent::setInterlocuteurPrincipal($interlocuteurPrincipal);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterlocuteurPrincipal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterlocuteurPrincipal', []);

        return parent::getInterlocuteurPrincipal();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEntree($dateEntree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEntree', [$dateEntree]);

        return parent::setDateEntree($dateEntree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEntree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEntree', []);

        return parent::getDateEntree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSortie($dateSortie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSortie', [$dateSortie]);

        return parent::setDateSortie($dateSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSortie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSortie', []);

        return parent::getDateSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailPro($emailPro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailPro', [$emailPro]);

        return parent::setEmailPro($emailPro);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailPro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailPro', []);

        return parent::getEmailPro();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonction($fonction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonction', [$fonction]);

        return parent::setFonction($fonction);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonction', []);

        return parent::getFonction();
    }

    /**
     * {@inheritDoc}
     */
    public function setOfficine(\AppBundle\Entity\Officine $officine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOfficine', [$officine]);

        return parent::setOfficine($officine);
    }

    /**
     * {@inheritDoc}
     */
    public function getOfficine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOfficine', []);

        return parent::getOfficine();
    }

    /**
     * {@inheritDoc}
     */
    public function setPharmacien(\AppBundle\Entity\Pharmacien $pharmacien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPharmacien', [$pharmacien]);

        return parent::setPharmacien($pharmacien);
    }

    /**
     * {@inheritDoc}
     */
    public function getPharmacien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPharmacien', []);

        return parent::getPharmacien();
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

}