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
        $this->html = '';
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
        return nl2br($this->parser->transformMarkdown($data['text']));
    }

    protected function renderTweet($data)
    {
        return \View::make('editor.tweet')->with('tweet', $data);
    }

    protected function renderList($data)
    {
        return $this->parser->transformMarkdown($data['text']);
    }

    protected function renderHeading($data)
    {
        return '<h2>' . $data['text'] . '</h2>';
    }

    protected function renderVideo($data)
    {
        if($data['source'] == 'youtube') {
            return '<iframe src="//www.youtube.com/embed/' . $data['remote_id'] . '" width="580" height="320" frameborder="0" allowfullscreen></iframe>';
        }

        if($data['source'] == 'vimeo') {
            return '<iframe src="//player.vimeo.com/video/' . $data['remote_id'] . '?title=0&byline=0" width="580" height="320" frameborder="0"></iframe>';
        }
    }

    protected function renderQuote($data)
    {
        return '<blockquote><p>' . $data['text'] . '</p><cite>' . $data['cite'] . '</cite></blockquote>';
    }

    protected function renderImage($data)
    {
        return '<img class="img-responsive img-border" src="' . asset('uploads/' . $data['file']) . '">';
    }
}