<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 16-10-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceMany;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\DripRepository")
 */
class Drip
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @ReferenceMany(targetDocument="DripMail", simple=true)
     */
    protected $dripMails;

    /**
     * @MongoDB\Boolean
     */
    protected $active;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->dripMails = new \Doctrine\Common\Collections\ArrayCollection();
        $this->active = true;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set domain
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Domain $domain
     * @return self
     */
    public function setDomain(\Synduit\SynpostDatabaseBundle\Document\Domain $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Get domain
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Domain $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean $active
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Add dripMail
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail
     */
    public function addDripMail(\Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail)
    {
        $this->dripMails[] = $dripMail;
    }

    /**
     * Remove dripMail
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail
     */
    public function removeDripMail(\Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail)
    {
        $this->dripMails->removeElement($dripMail);
    }

    /**
     * Get dripMail
     *
     * @return \Doctrine\Common\Collections\Collection $dripMail
     */
    public function getDripMails()
    {
        return $this->dripMails;
    }
}
