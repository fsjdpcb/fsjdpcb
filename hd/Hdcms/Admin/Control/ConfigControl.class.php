<?php
/**
 * 后台网站配置管理
 * Class ConfigControl
 * @author 向军 <houdunwangxj@gmail.com>
 */
class ConfigControl extends AuthControl {
	//修改
	function edit() {
		$Model = K("config");
		if (IS_POST) {
			if ($Model -> saveConfig($_POST)) {
				$this -> success("修改配置文件成功");
			} else {
				$this -> error($Model -> error);
			}
		} else {
			$data = $Model -> order('order_list ASC') -> all();
			$config = array();
			foreach ($data as $d) {
				$config[$d['name']] = $d;
			}
			//删除模型风格配置
			unset($config['web_style']);
			//======================================会员角色
			$roleData = $Model -> table("role") -> where("admin=0") -> all();
			$config['DEFAULT_MEMBER_GROUP']['html'] = '<select name="default_member_group">';
			foreach ($roleData as $role) {
				$checked = $config['DEFAULT_MEMBER_GROUP']['value'] == $role['rid'] ? "selected='selected'" : "";
				$config['DEFAULT_MEMBER_GROUP']['html'] .= "<option value='{$role['rid']}' {$checked}>{$role['rname']}</option>";
			}
			$config['DEFAULT_MEMBER_GROUP']['html'] .= '</select>';
			//========================================水印位置
			ob_start();
			require TPL_PATH . 'Config/water.php';
			$con = ob_get_clean();
			$config['WATER_POS']['html'] = $con;
			//=======================================其他字段
			foreach ($config as $name => $c) {
				if (in_array($name, array('default_member_group', 'water_pos', 'water')))
					continue;
				switch ($c['show_type']) {
					case '数字' :
					case '文本' :
						$config[$name]['html'] = "<input type='text' name='{$c['name']}' value='{$c['value']}' class='w400'/>";
						break;
					//布尔
					case '布尔(1/0)' :
						$Yes = $No = '';
						if ($c['value'] == 1) {
							$Yes = "checked='checked'";
						} else {
							$No = "checked='checked'";
						}
						$config[$name]['html'] = "<label><input type='radio' name='{$c['name']}' value='1'  $Yes/> 是</label>
                                        <label><input type='radio' name='{$c['name']}' value='0' $No/> 否</label>";
						break;
					//多行文本
					case '多行文本' :
						$config[$name]['html'] = "<textarea class='w400 h100' name='{$c['name']}'>{$c['value']}</textarea>";
						break;
				}
			}
			$this -> assign("config", $config);
			$this -> display();
		}
	}

	//更新缓存
	public function updateCache() {
		$Model = K('config');
		if ($Model -> updateCache()) {
			$this -> success('缓存更新成功！');
		} else {
			$this -> error($Model -> error);
		}

	}

}
