<?php
/**
 * Created by PhpStorm.
 * User: Tkuldeep
 * Date: 16-10-2015
 * Time: 8:15 PM
 */

namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\DripMailRepository")
 */
class DripMail
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
    protected $interval;

    /**
     * @MongoDB\Integer
     */
    protected $time;

    /**
     * @MongoDB\Boolean
     */
    protected $active;

    /**
     * @ReferenceOne(targetDocument="Drip", simple=true)
     */
    protected $drip;

    public function __construct()
    {
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
     * Set interval
     *
     * @param string $interval
     * @return self
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Get interval
     *
     * @return string $interval
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return integer $time
     */
    public function getTime()
    {
        return $this->time;
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
     * Set drip
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Drip $drip
     * @return self
     */
    public function setDrip(\Synduit\SynpostDatabaseBundle\Document\Drip $drip)
    {
        $this->drip = $drip;
        return $this;
    }

    /**
     * Get drip
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Drip $drip
     */
    public function getDrip()
    {
        return $this->drip;
    }
}
