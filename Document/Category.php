<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 24-09-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $type;

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
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
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
