<?php
require_once '../../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Materials_Ex.php';

/**
 * ユーザーカスタマイズ用のページクラス
 *
 * 管理画面から自動生成される
 *
 * @package Page
 */
class LC_Page_Materials extends LC_Page_Materials_Ex
{
    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init()
    {
        parent::init();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process()
    {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action()
    {
    }
}

$objPage = new LC_Page_Materials();
$objPage->init();
$objPage->process();
