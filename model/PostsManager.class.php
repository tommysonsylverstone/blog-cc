<?php

namespace Model;

class PostsManager extends Model
{
    /**
     * add
     *
     * @param  Posts $post
     * @return ?bool
     */
    public function add(Posts $post): ?bool
    {
        $id = $post->getId();
        $title = $post->getTitle();
        $content = $post->getContent();
        $author = $post->getAuthor();
        $published = $post->getPublished() == 'true' ? 1 : 0;
        $publish_date = $post->getPublishDate();
        $likes = $post->getLikes();

        $sql = "INSERT INTO posts (post_id, title, content, author, published, publish_date, likes) VALUES(:post_id, :title, :content, :author, :published, :publish_date, :likes)";
        $req = Model::getBdd()->prepare($sql);
        return $req->execute([
            ":post_id" => $id,
            ":title" => $title,
            ":content" => $content,
            ":author" => $author,
            ":published" => $published,
            ":publish_date" => $publish_date,
            ":likes" => $likes
        ]);
    }
}
