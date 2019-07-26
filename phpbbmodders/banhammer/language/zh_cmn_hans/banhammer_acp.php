<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
 * Simplified Chinese Translation for BanHammer v1.0.8
 * Translated by DT27
 * @2019-07-26 22:39:14
 * https://github.com/DT27/Ban-Hammer-Simplified-Chinese-Translation
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ACP_BAN_EMAIL'		=> '封禁此用户的邮箱',
	'ACP_BAN_IP'		=> '封禁此用户的IP',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>小心使用。</strong> 很多普通用户的IP是动态获取的，每次用户重启路由时都会获取到新的IP。 旧IP可能会分配给真正想要登录你论坛的用户。垃圾信息发送者经常使用动态IP或者代理网络以使IP屏蔽失效。',

	'ACP_DEL_AVATAR'	=> '删除用户的头像',
	'ACP_DEL_PRIVMSGS'	=> '删除用户的短消息',
	'ACP_DEL_POSTS'		=> '删除用户的所有发帖',
	'ACP_DEL_PROFILE'	=> '删除用户的个人资料',
	'ACP_DEL_SIGNATURE'	=> '删除用户的签名',

	'ACP_GROUP_MISSING'	=> '用户组 &quot;%s&quot; 不存在。', // %s is the group name.

	'ACP_MOVE_GROUP'			=> '移动到用户组',
	'ACP_MOVE_GROUP_EXPLAIN'	=> '封禁用户要移动到的用户组。也是封禁用户的默认用户组<br /><strong>如果选项中只有 <em>“没有指定用户组。”</em>，说明你没有建立任何用户组。</strong>',
	'BAN_LENGTH_EXPLAIN'	=> '此处设置用户被封禁的时长。当对用户执行封禁锤时也会显示此选项。',
	'SETTINGS_ERROR'		=> '保存设置时发生错误。请连同错误报告一起提交回溯跟踪。',
	'SFS_API_KEY'			=> 'SFS API key',
	'SFS_API_KEY_EXPLAIN'	=> '如果你想将垃圾用户自动报告给StopForumSpam，请到<a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>申请API。',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">使用stop forum spam服务，你的网站服务器需要安装cURL。</span>',
));
