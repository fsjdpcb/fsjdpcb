<?php if(!defined('HDPHP_PATH'))exit;
return array (
  13 => 
  array (
    'fid' => '13',
    'mid' => '1',
    'show_type' => 'images',
    'table_name' => 'content_data',
    'field_name' => 'images',
    'title' => '图片集',
    'enable' => '1',
    'is_system' => '0',
    'fieldsort' => '50',
    'member_show' => '1',
    'set' => 
    array (
      'message' => '不要乱选图',
      'upload_img_max_width' => '600',
      'upload_img_max_height' => '600',
      'num' => '10',
      'error' => '',
      'css' => '',
      'validation' => 'false',
      'width' => '',
      'height' => '',
      'default' => '',
      'required' => '',
      'options' => '',
    ),
    'type_name' => '多图片',
    'model_name' => '普通文章',
  ),
  14 => 
  array (
    'fid' => '14',
    'mid' => '1',
    'show_type' => 'files',
    'table_name' => 'content_data',
    'field_name' => 'downs',
    'title' => '文件下载',
    'enable' => '1',
    'is_system' => '0',
    'fieldsort' => '50',
    'member_show' => '1',
    'set' => 
    array (
      'message' => '',
      'num' => '10',
      'filetype' => 'zip,rar',
      'down_credits' => '0',
      'error' => '',
      'css' => '',
      'validation' => 'false',
      'width' => '',
      'height' => '',
      'default' => '',
      'required' => '',
      'options' => '',
    ),
    'type_name' => '文件',
    'model_name' => '普通文章',
  ),
);
?>