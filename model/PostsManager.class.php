<?php

namespace Model;

class PostsManager extends Model
{
    /**
     * add
     *
     * @param  Posts $post
     * @return void
     */
    public function add(Posts $post)
    {
        $id = $post->getId();
        $title = $post->getTitle();
        $content = $post->getContent();
        $author = $post->getAuthor();
        $publish_date = $post->getPublishDate();
        $likes = $post->getLikes();

        $sql = "INSERT INTO posts (post_id, title, content, author, publish_date, likes) VALUES(:post_id, :title, :content, :author, :publish_date, :likes)";
        $req = Model::getBdd()->prepare($sql);
        return $req->execute([
            ":id" => $id,
            ":title" => $title,
            ":content" => $content,
            ":author" => $author,
            ":publish_date" => $publish_date,
            ":likes" => $likes
        ]);
    }
}
