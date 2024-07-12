<?php

//har bir classga oziga tegishlik ishlari boladi
class BlogPost
{
    private $author;
    private $title;
    private $content;
    private $data;

    public function getData()
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content,
            'data' => $this->data
        ];
    }
    public function setData($author, $title, $content, $data)
    {
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->data = $data;
    }
}

interface PrintableBlogPost
{
    public function print(BlogPost $blogPost);
}


class JsonBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return json_encode([$blogPost->getData()]);
    }
}

class HtmlBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return '<h1>' . $blogPost->getData() . '</h1>';
    }
}

$blog = new BlogPost();
$blog->setData("Shayx Muhammad sodiq", 'Bahtiyor oila', 'Salom dostlar', DateTime::class);
$create = new htmlBlogPostPrinter();
echo $create->print($blog);
