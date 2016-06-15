<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 26-08-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\DomainRepository")
 */
class Domain
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
     * @MongoDB\String
     */
    protected $fromEmail;

    /**
     * @MongoDB\String
     */
    protected $fromName;

    /**
     * @MongoDB\String
     */
    protected $timezone;

    /**
     * @MongoDB\Bin
     */
    protected $signature;

    /**
     * @MongoDB\Bin
     */
    protected $address;

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
     * Set fromEmail
     *
     * @param string $fromEmail
     * @return self
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;
        return $this;
    }

    /**
     * Get fromEmail
     *
     * @return string $fromEmail
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * Set fromName
     *
     * @param string $fromName
     * @return self
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * Get fromName
     *
     * @return string $fromName
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string $timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set signature
     *
     * @param bin $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Get signature
     *
     * @return bin $signature
     */
    public function getSignature()
    {
        return $this->signature;
    }


    /**
     * Set address
     *
     * @param bin $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return bin $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
