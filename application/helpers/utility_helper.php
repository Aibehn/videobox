<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 3/26/16
 * Time: 6:47 PM
 */

if (!function_exists('asset_url'))
{

    function asset_url($uri='')
    {
        return base_url('assets/'.$uri) ;
    }
}

if (!function_exists('video_url'))
{

    function video_url($videoid='')
    {
        $port_wowza='1935';

        $trimmedBaseUrl = parse_url(base_url());

        //$videoid="sample";

        return "rtmp://".$trimmedBaseUrl['host'].":$port_wowza"."/vod/mp4:".$videoid.".mp4";

    }
}


if (!function_exists('video_url_dash'))
{

    function video_url_dash($videoid='')
    {

        $trimmedBaseUrl = parse_url(base_url());

        //$videoid="sample";
        //http://10.30.1.26:1935/vod/sample/manifest.mpd

        return "http://".$trimmedBaseUrl['host']."/content/web/".$videoid.".mpd";

    }
}

if ( !function_exists('nav_item'))
{
    function nav_item($name='',$uri='')
    {
        $class='';
        if (uri_string()==$uri) {
            $class = 'active';
        }

        return "<li class='". $class . "'>" . anchor($uri, $name) . "</li>";

    }
}
    

if ( !function_exists('user_login_nav'))
{
    function user_login_nav($user_id='')
    {
        $CI =& get_instance();

        if($CI->login_model->logged_in())
        {
            $user = $CI->ion_auth->user()->row();
            $username=$user->username;

            $attr = array(
                'class' =>'navbar-link'
            );

            $uri_profile=anchor('user/profile/'.$username,$username,$attr);
            $uri_logout=site_url('user/logout');

            return "<ul class='nav navbar-nav navbar-right'>
                    <li><p class='navbar-text'>Signed in as ".$uri_profile."</p></li>
                    <li><button type='button' class='btn btn-success navbar-btn'>
                    <a  href='$uri_logout' class='navbar-link'>Logout</a></button></li></ul>";
            
        }
        else {
            $uri=site_url('user/login');
            return "<a  href='$uri' class='navbar-right navbar-link'><button type=\"button\" class=\"btn btn-success navbar-btn\">Sign in</button></a>";
        }
    }
}


if (!function_exists('req_logged_in'))
{
    function req_logged_in()
    {
        $CI =& get_instance();

        if (!$CI->login_model->logged_in())
        {
            redirect('user/login');
        }
    }
}
