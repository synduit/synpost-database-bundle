<?php
/**
 * Created by PhpStorm.
 * User: Tkuldeep
 * Date: 15-07-2015
 * Time: 8:15 PM
 */

namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\AutoResponderRepository")
 */
class AutoResponder
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Bin
     */
    protected $body;

    /**
     * @MongoDB\Raw
     */
    protected $subject;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

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
     * Set body
     *
     * @param bin $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return bin $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set subject
     *
     * @param raw $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return raw $subject
     */
    public function getSubject()
    {
        return $this->subject;
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
}
