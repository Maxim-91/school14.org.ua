<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'Сайт зараз закритий на технічне обслуговування.<br /> Будь-ласка, завітайте пізніше.';
var $sitename = 'Офіційний сайт ЗОШ №14 I-III ст. м. Конотоп';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
var $host = 'mysql4.freehostia.com';
var $user = 'makmak76_Basa';
var $password = 'cjyz91';
var $db = 'makmak76_Basa';
var $dbprefix = 'jos_';
/* Server Settings */
var $live_site = 'http://school14.org.ua';
var $secret = 'qWTJh6ySg50BjDDx';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://help.joomla.org';
var $xmlrpc_server = '1';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'makc.91@mail.ru';
var $fromname = 'Офіційний сайт ЗОШ №14 I-III ст. м. Конотоп';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '15';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Joomla! - система динамічного керування сайтом та менеджер керуванням змістом';
var $MetaKeys = 'joomla, Joomla, Україна';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '0';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $log_path = '/home/www/school14.org.ua/logs';
var $tmp_path = '/home/www/school14.org.ua/tmp';
/* Session Setting */
var $lifetime = '15';
var $session_handler = 'database';
}
?>