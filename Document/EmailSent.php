<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 10-09-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\EmailSentRepository")
 */
class EmailSent
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Date
     */
    protected $timestamp;

    /**
     * @MongoDB\String
     */
    protected $email;

    /**
     * @ReferenceOne(targetDocument="Campaign", simple=true)
     */
    protected $campaign;

    /**
     * @MongoDB\String
     */
    protected $status;

    /**
     * @MongoDB\String
     */
    protected $messageId;

    /**
     * @ReferenceOne(targetDocument="Subscriber", simple=true)
     */
    protected $subscriber;

    /**
     * @MongoDB\Boolean
     */
    protected $opened;

    /**
     * @MongoDB\Boolean
     */
    protected $clicked;

    /**
     * @ReferenceOne(targetDocument="DripMail", simple=true)
     */
    protected $dripMail;

    /**
     * @ReferenceOne(targetDocument="AutoResponder", simple=true)
     */
    protected $autoresponder;

    /**
     * @MongoDB\String
     */
    protected $reason;

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
        $this->opened = false;
        $this->clicked = false;
        $this->status = 'Accepted';
    }

    /**
     * Set timestamp
     *
     * @param date $timestamp
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return date $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set campaign
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Campaign $campaign
     * @return self
     */
    public function setCampaign(\Synduit\SynpostDatabaseBundle\Document\Campaign $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Get campaign
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Campaign $campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set messageId
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Get messageId
     *
     * @return string $messageId
     */
    public function getMessageId()
    {
        return $this->messageId;
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
     * Set opened
     *
     * @param boolean $opened
     * @return self
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;
        return $this;
    }

    /**
     * Get opened
     *
     * @return boolean opened
     */
    public function isOpened()
    {
        return $this->opened;
    }

    /**
     * Set clicked
     *
     * @param boolean $clicked
     * @return self
     */
    public function setClicked($clicked)
    {
        $this->clicked = $clicked;
        return $this;
    }

    /**
     * Get clicked
     *
     * @return boolean clicked
     */
    public function isClicked()
    {
        return $this->clicked;
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
     * Set autoresponder
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\AutoResponder $autoresponder
     * @return self
     */
    public function setAutoResponder(\Synduit\SynpostDatabaseBundle\Document\AutoResponder $autoresponder)
    {
        $this->autoresponder = $autoresponder;
        return $this;
    }

    /**
     * Get autoresponder
     *
     * @return Synduit\SynpostDatabaseBundle\Document\AutoResponder $autoresponder
     */
    public function getAutoresponder()
    {
        return $this->autoresponder;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Get reason
     *
     * @return string $reason
     */
    public function getReason()
    {
        return $this->reason;
    }
}
