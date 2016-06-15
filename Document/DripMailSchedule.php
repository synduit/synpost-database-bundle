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

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\DripMailScheduleRepository")
 */
class DripMailSchedule
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @ReferenceOne(targetDocument="Subscriber", simple=true)
     */
    protected $subscriber;

    /**
     * @ReferenceOne(targetDocument="DripMail", simple=true)
     */
    protected $dripMail;

    /**
     * @MongoDB\Date
     */
    protected $scheduleDate;

    /**
     * @MongoDB\Date
     */
    protected $created;

    /**
     * @MongoDB\Boolean
     */
    protected $sent;

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
        $this->sent = false;
    }

    /**
     * Set subscriber
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber
     * @return self
     */
    public function setSubscriber(\Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * Get subscriber
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set dripMail
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail
     * @return self
     */
    public function setDripMail(\Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail)
    {
        $this->dripMail = $dripMail;
        return $this;
    }

    /**
     * Get dripMail
     *
     * @return Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail
     */
    public function getDripMail()
    {
        return $this->dripMail;
    }

    /**
     * Set scheduleDate
     *
     * @param int $scheduleDate
     * @return self
     */
    public function setScheduleDate($scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * Get scheduleDate
     *
     * @return int $scheduleDate
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate;
    }

    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set sent
     *
     * @param boolean $sent
     * @return self
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * Get sent
     *
     * @return boolean $sent
     */
    public function isSent()
    {
        return $this->sent;
    }
}
