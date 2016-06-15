<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 20-08-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceMany;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\SegmentRepository")
 */
class Segment
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
     * @MongoDB\Boolean
     */
    protected $active;

    /**
     * @ReferenceMany(targetDocument="Term", simple=true)
     */
    protected $terms;

    public function __construct()
    {
        $this->terms = new \Doctrine\Common\Collections\ArrayCollection();
        $this->active = true;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
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
     * Add term
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Term $term
     */
    public function addTerm(\Synduit\SynpostDatabaseBundle\Document\Term $term)
    {
        $this->terms[] = $term;
    }

    /**
     * Remove term
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Term $term
     */
    public function removeTerm(\Synduit\SynpostDatabaseBundle\Document\Term $term)
    {
        $this->terms->removeElement($term);
    }

    /**
     * Get terms
     *
     * @return \Doctrine\Common\Collections\Collection $terms
     */
    public function getTerms()
    {
        return $this->terms;
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
}
