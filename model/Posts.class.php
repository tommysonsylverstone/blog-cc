<?php

namespace Model;

class Posts
{
    private ?int $id;
    private ?string $title;
    private ?string $content;
    private ?int $author;
    private ?string $publishDate;
    private ?int $likes;

    public function __construct($id, $title, $content, $author, $publishDate, $likes)
    {
        $this->setId($id);
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
        $this->setPublishDate($publishDate);
        $this->setLikes($likes);
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
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

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

    /**
     * Get the value of likes
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set the value of likes
     *
     * @return  self
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }
}
