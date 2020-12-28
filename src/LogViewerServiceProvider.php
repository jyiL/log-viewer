<?php

namespace Dcat\Admin\LogViewer;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class LogViewerServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

    // 定义菜单
    protected $menu = [
        [
            'title' => '日志查看',
            'uri'   => 'auth/log-viewer',
            'icon'  => 'fa-database',
        ]
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
