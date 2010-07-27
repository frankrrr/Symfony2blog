<?php

namespace Application\BlogBundle\Entities;
use Symfony\Components\Validator\Constraints;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Components\Validator\Mapping\ClassMetadata;

/**
 * A post
 *
 * @Entity(repositoryClass="Application\BlogBundle\Entities\PostRepository")
 * @Table(
 *      name="post"
 * )
 * @HasLifecycleCallbacks
 */
class Post
{
    /**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Title
     *
     * @Column(type="string", length=255)
     */
    protected $title = null;

    /**
     * Summary
     *
     * @Column(type="text")
     */
    protected $summary = null;

	/**
     * Body
     *
     * @Column(type="text")
     */
    protected $body = null;

    /**
     * Post creation date (on this website)
     *
     * @Column(type="datetime")
     */
    protected $createdAt = null;
	
	/**
     * Get title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     * @param  string
     * @return null
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
	
    /**
     * Get summary
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summary
     * @param  string
     * @return null
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

	/**
     * Get body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body
     * @param  string
     * @return null
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    
    /**
     * getCreatedAt 
     * 
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the user creation date
     *
     * @return null
     **/
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /** @PrePersist */
    public function markAsCreated()
    {
        $this->createdAt = new \DateTime();
    }
}
