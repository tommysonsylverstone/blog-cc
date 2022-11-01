<?php

namespace Model;

class Comments
{
    private ?int $id;
    private ?int $authorId;
    private ?int $postId;
    private ?string $content;
    private ?string $publishDate;

    public function __construct($id, $authorId, $postId, $content, $publishDate)
    {
        $this->setId($id);
        $this->setAuthorId($authorId);
        $this->setPostId($postId);
        $this->setContent($content);
        $this->setPublishDate($publishDate);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of authorId
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set the value of authorId
     *
     * @return  self
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get the value of postId
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set the value of postId
     *
     * @return  self
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of publishDate
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * Set the value of publishDate
     *
     * @return  self
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }
}
