<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2013 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once CLASS_REALDIR . 'pages/signup/LC_Page_Signup.php';

/**
 * Index のページクラス(拡張).
 *
 * LC_Page_Signup をカスタマイズする場合はこのクラスを編集する.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Signup_Ex.php 22926 2013-06-29 16:24:23Z Seasoft $
 */
class LC_Page_Signup_Ex extends LC_Page_Signup
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
        
        $username = "root";
        $password = "trscebu123";
        $hostname = "localhost";
        $dbname   = "nakame";
        //connection to the database
        mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
        
        //select a database to work with
        mysql_select_db($dbname) or die("Could not select examples");
        
        
        if(isset($_POST['username'])){ $name = $_POST['username']; }
        if(isset($_POST['email'])){ $email = $_POST['email']; }
        if(isset($_POST['password'])){ $pass = $_POST['password']; }
        
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        mysql_query("INSERT dtb_member SET name = '$name' , department = '$email' , password = '$pass' ") or die(mysql_error());
    }
}
