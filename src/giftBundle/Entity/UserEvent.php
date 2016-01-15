<?php

namespace giftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvent
 *
 * @ORM\Table(name="user_event")
 * @ORM\Entity(repositoryClass="giftBundle\Repository\UserEventRepository")
 */
class UserEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\OneToOne(targetEntity="giftBundle\Entity\User", cascade={"persist"})
    */
    private $user;

    /**
    * @ORM\OneToOne(targetEntity="giftBundle\Entity\Event", cascade={"persist"})
    */
    private $event;

    /**
    * @ORM\OneToOne(targetEntity="giftBundle\Entity\User", cascade={"persist"})
    */
    private $received_user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \giftBundle\Entity\User $user
     *
     * @return UserEvent
     */
    public function setUser(\giftBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \giftBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param \giftBundle\Entity\Event $event
     *
     * @return UserEvent
     */
    public function setEvent(\giftBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \giftBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set receivedUser
     *
     * @param \giftBundle\Entity\User $receivedUser
     *
     * @return UserEvent
     */
    public function setReceivedUser(\giftBundle\Entity\User $receivedUser = null)
    {
        $this->received_user = $receivedUser;

        return $this;
    }

    /**
     * Get receivedUser
     *
     * @return \giftBundle\Entity\User
     */
    public function getReceivedUser()
    {
        return $this->received_user;
    }
}
