<?php /* Smarty version 2.6.26, created on 2017-01-13 13:52:18
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">cloud_update_number('<?php echo $this->_tpl_vars['localsite']; ?>
')</script>
</head>
<body>
<div id="dcWrap"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="index" class="mainBox" style="padding-top:18px;<?php echo $this->_tpl_vars['workspace']['height']; ?>
">
   <?php $_from = $this->_tpl_vars['sys_info']['folder_exists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['warning']):
?>
   <div class="warning"><?php echo $this->_tpl_vars['warning']; ?>
</div>
   <?php endforeach; endif; unset($_from); ?> 
   <div id="douApi"></div>
   <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
   <div class="indexBox">
    <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['title_page']; ?>
</div>
    <ul class="ipage">
     <?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page_list']):
?> 
     <a href="page.php?rec=edit&id=<?php echo $this->_tpl_vars['page_list']['id']; ?>
"<?php if ($this->_tpl_vars['page_list']['level'] > 0): ?> class="child<?php echo $this->_tpl_vars['page_list']['level']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['page_list']['page_name']; ?>
</a> 
     <?php endforeach; endif; unset($_from); ?>
     <div class="clear"></div>
    </ul>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
    <tr>

     <td valign="top" class="pl">
      <div class="indexBox">
       <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['title_admin_log']; ?>
</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <th width="45%"><?php echo $this->_tpl_vars['lang']['manager_log_ip']; ?>
</th>
          <th width="55%"><?php echo $this->_tpl_vars['lang']['manager_log_create_time']; ?>
</th>
         </tr>
         <?php $_from = $this->_tpl_vars['log_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log_list']):
?>
         <tr>
          <td align="center"><?php echo $this->_tpl_vars['log_list']['ip']; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['log_list']['create_time']; ?>
</td>
         </tr>
         <?php endforeach; endif; unset($_from); ?>
        </table>
       </ul>
      </div>
     </td>
    </tr>
   </table>
   <div class="indexBox">
    <div class="boxTitle"><?php echo $this->_tpl_vars['lang']['title_sys_info']; ?>
</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
      <tr>
       <td width="120" valign="top"><?php echo $this->_tpl_vars['lang']['php_version']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['php_ver']; ?>
 </td>
       <td width="100" valign="top"><?php echo $this->_tpl_vars['lang']['mysql_version']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['mysql_ver']; ?>
</td>
       <td width="100" valign="top"><?php echo $this->_tpl_vars['lang']['os']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['os']; ?>
(<?php echo $this->_tpl_vars['sys_info']['ip']; ?>
)</td>
      </tr>
      <tr>
       <td valign="top"><?php echo $this->_tpl_vars['lang']['max_filesize']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['max_filesize']; ?>
</td>
       <td valign="top"><?php echo $this->_tpl_vars['lang']['gd']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['gd']; ?>
</td>
       <td valign="top"><?php echo $this->_tpl_vars['lang']['web_server']; ?>
：</td>
       <td valign="top"><?php echo $this->_tpl_vars['sys_info']['web_server']; ?>
</td>
      </tr>
     </table>
    </ul>
   </div>
   <?php endif; ?>
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>