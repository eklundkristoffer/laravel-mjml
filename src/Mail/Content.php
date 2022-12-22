<?php

namespace Progglund\LaravelMJML\Mail;

use Illuminate\Mail\Mailables\Content as IlluminateContent;

class Content extends IlluminateContent
{
    /**
     * The MJML view that should be rendered for the mailable.
     *
     * @var string|null
     */
    public $mjml;

    /**
     * Create a new content definition.
     *
     * @param  string|null  $view
     * @param  string|null  $html
     * @param  string|null  $text
     * @param  string|null  $markdown
     * @param  array  $with
     * @param  string|null  $htmlString
     *
     * @named-arguments-supported
     */
    public function __construct(string $view = null, string $html = null, string $text = null, $markdown = null, array $with = [], string $htmlString = null, string $mjml = null)
    {
        $this->view = $view;
        $this->html = $html;
        $this->text = $text;
        $this->markdown = $markdown;
        $this->with = $with;
        $this->htmlString = $htmlString;
        $this->mjml = $mjml;
    }
}
