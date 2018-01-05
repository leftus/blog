<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class WangEditor extends Field
{
    protected $view = 'admin::form.editor';

    protected static $css = [
        '/packages/wangEditor/dist/css/wangEditor.min.css',
        '/css/custom.css',
    ];

    protected static $js = [
        '/packages/wangEditor/dist/js/wangEditor.min.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

var editor = new wangEditor('{$this->id}');
    editor.config.menus=[
        'source',
        '|',
        'bold',
        'underline',
        'italic',
        'strikethrough',
        'eraser',
        'forecolor',
        'bgcolor',
        '|',
        'quote',
        'fontfamily',
        'fontsize',
        'head',
        'unorderlist',
        'orderlist',
        'alignleft',
        'aligncenter',
        'alignright',
        '|',
        'link',
        'unlink',
        'table',
        'emotion',
        '|',
        'img',
        'video',
        'insertcode',
        '|',
        'undo',
        'redo',
        'fullscreen'
    ];
    editor.config.uploadImgUrl = '/upload.php';
    editor.config.hideLinkImg = true;
    editor.create();

EOT;
        return parent::render();

    }
}
