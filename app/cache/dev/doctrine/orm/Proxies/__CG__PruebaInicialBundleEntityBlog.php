<?php

namespace Proxies\__CG__\Prueba\InicialBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Blog extends \Prueba\InicialBundle\Entity\Blog implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function slugify($text)
    {
        $this->__load();
        return parent::slugify($text);
    }

    public function setUpdatedValue()
    {
        $this->__load();
        return parent::setUpdatedValue();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setAuthor($author)
    {
        $this->__load();
        return parent::setAuthor($author);
    }

    public function getAuthor()
    {
        $this->__load();
        return parent::getAuthor();
    }

    public function setBlog($blog)
    {
        $this->__load();
        return parent::setBlog($blog);
    }

    public function getBlog($length = NULL)
    {
        $this->__load();
        return parent::getBlog($length);
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setTags($tags)
    {
        $this->__load();
        return parent::setTags($tags);
    }

    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated($updated)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function addComment(\Prueba\InicialBundle\Entity\Comment $comments)
    {
        $this->__load();
        return parent::addComment($comments);
    }

    public function removeComment(\Prueba\InicialBundle\Entity\Comment $comments)
    {
        $this->__load();
        return parent::removeComment($comments);
    }

    public function getComments()
    {
        $this->__load();
        return parent::getComments();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'author', 'blog', 'image', 'tags', 'created', 'updated', 'slug', 'comments');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}