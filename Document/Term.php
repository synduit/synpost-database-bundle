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
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\TermRepository")
 */
class Term
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
     * @ReferenceOne(targetDocument="Category", simple=true)
     */
    protected $category;

    /**
     * @MongoDB\Boolean
     */
    protected $visible;

    public function __construct()
    {
        $this->visible = true;
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
     * Set category
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Category $category
     * @return self
     */
    public function setCategory(\Synduit\SynpostDatabaseBundle\Document\Category $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean $visible
     */
    public function isVisible()
    {
        return $this->visible;
    }
}
