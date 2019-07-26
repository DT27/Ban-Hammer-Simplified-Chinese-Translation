<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Rich McGirr (RMcGirr83)
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
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> '发生错误！',
	'BANNED_SUCCESS'	=> '操作成功。',

	'ERROR_BAN_EMAIL'	=> '封禁email字段。',
	'ERROR_BAN_IP'		=> '封IP字段。',
	'ERROR_BAN_USER'	=> '封禁用户名字段。',
	'ERROR_DEL_POSTS'	=> '删除用户的发帖字段。',
	'ERROR_MOVE_GROUP'	=> '移动用户到所选用户组字段',
	'ERROR_SFS'			=> '提交到Stop Forum Spam时发生错误',

	'BH_BAN_EMAIL'			=> '封禁此用户的邮箱',
	'BH_BAN_GIVE_REASON'	=> '显示给用户的封禁理由',
	'BH_BAN_IP'				=> '封禁此用户的IP',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>小心使用。</strong> 很多普通用户的IP是动态获取的，每次用户重启路由时都会获取到新的IP。 旧IP可能会分配给真正想要登录你论坛的用户。垃圾信息发送者经常使用动态IP或者代理网络以使IP屏蔽失效。',
	'BH_BAN_LENGTH'			=> '封禁理由：%s',
	'BH_BAN_REASON'			=> '封禁的内部理由',
	'BH_BAN_USER'			=> '封禁理由：%s',
	'BH_BAN_USER_PERM'		=> '永久封禁此用户名',
	'BH_BAN_EMAIL_PERM'		=> '永久封禁此用户的邮箱',
	'BH_BAN_EMAIL_FOR'		=> '封禁邮箱的理由：%s',
	'BH_BAN_IP_PERM'		=> '永久封禁此用户的IP',
	'BH_BAN_IP_FOR'			=> '封禁IP的理由：%s',
	'BH_BANNED'				=> '此用户已被封禁',

	'BH_DEL_AVATAR'		=> '删除此用户的头像',
	'BH_DEL_PRIVMSGS'	=> '删除此用户的短消息',
	'BH_DEL_POSTS'		=> '删除此用户的所有发帖',
	'BH_DEL_PROFILE'	=> '删除此用户的个人资料',
	'BH_DEL_SIGNATURE'	=> '删除此用户的签名',

	'BH_MOVE_GROUP'	=> '移动用户到新用户组：&quot;%s&quot;', // %s will be a group name

	'BH_REASON'		=> '内部理由：&quot;%s&quot;', // %s will be the reason
	'BH_REASON_USER'	=> '显示给用户的理由：&quot;%s&quot;', // %s will be the reason

	'BH_SUBMIT_SFS'	=> '提交到stop forum spam',

	'BH_THIS_USER'	=> '对此用户执行封禁锤',

	'SFS_REPORT'	=> '提交此用户到Stop Forum Spam',
	'SURE_BAN'		=> '确定要对 <strong>%s</strong> 执行封禁锤吗？', // %s will be a username.

	'THIS_WILL'	=> '这会',
));
