<?php namespace Lavoaster\LightBlog\Blog\Helpers;

use dflydev\markdown\MarkdownParser;

class SirTrevorHelper
{
    protected $parser;
    protected $content;
    protected $html;

    public function __construct(MarkdownParser $parser)
    {
        $this->parser = $parser;
    }

    public function setContent($content)
    {
        $this->content = json_decode($content, true);
    }

    public function toHtml()
    {
        foreach($this->content['data'] as $block) {
            $this->html .= $this->{'render'.ucfirst($block['type'])}($block['data']) . "\n";
        }

        return $this->html;
    }

    protected function renderText($data)
    {
        return $this->parser->transformMarkdown($data['text']);
    }

    protected function renderTweet($data)
    {
        return '';
    }

    protected function renderList($data)
    {
        return '';
    }

    protected function renderHeading($data)
    {
        return '';
    }

    protected function renderVideo($data)
    {
        return '';
    }

    protected function renderImage($data)
    {
        return '<img src="' . asset('uploads/' . $data['file']) . '">';
    }
}