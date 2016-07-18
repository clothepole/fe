/*
Navicat MySQL Data Transfer

Source Server         : 124.193.88.155_55606
Source Server Version : 50624
Source Host           : 124.193.88.155:55606
Source Database       : fe_dispatch

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-07-05 16:42:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fe_alarm_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_alarm_info`;
CREATE TABLE `fe_alarm_info` (
  `alarm_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报警id',
  `register_id` int(11) DEFAULT NULL COMMENT '寄存器id',
  `alarm_high_value` double(11,2) DEFAULT NULL COMMENT '报警上限',
  `alarm_low_value` double(11,2) DEFAULT NULL COMMENT '报警下线',
  `alarm_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`alarm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_alarm_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_alarm_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_alarm_record`;
CREATE TABLE `fe_alarm_record` (
  `alarm_record_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报警记录id',
  `register_id` int(11) DEFAULT NULL COMMENT '寄存器id',
  `alarm_level` varchar(4) DEFAULT NULL COMMENT '报警等级',
  `alarm_time` varchar(20) DEFAULT NULL COMMENT '报警时间',
  `alarm_value` double(11,2) DEFAULT NULL COMMENT '报警值',
  `alarm_response` varchar(1) DEFAULT NULL COMMENT '报警是否响应',
  `alarm_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`alarm_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_alarm_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_branch_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_branch_info`;
CREATE TABLE `fe_branch_info` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '项目部/分公司id',
  `company_id` int(11) DEFAULT NULL COMMENT '所属总公司id',
  `branch_name` varchar(16) DEFAULT NULL COMMENT '项目部/分公司名称',
  `branch_leader` varchar(10) DEFAULT NULL COMMENT '项目部/分公司负责人',
  `branch_tel` varchar(11) DEFAULT NULL COMMENT '项目部/分公司电话',
  `branch_addr` varchar(32) DEFAULT NULL COMMENT '项目部/分公司地址',
  `branch_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_branch_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_company_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_company_info`;
CREATE TABLE `fe_company_info` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公司id',
  `company_name` varchar(16) DEFAULT NULL COMMENT '公司名称',
  `company_leader` varchar(10) DEFAULT NULL COMMENT '公司负责人',
  `company_tel` varchar(11) DEFAULT NULL COMMENT '公司电话',
  `company_addr` varchar(32) DEFAULT NULL COMMENT '公司地址',
  `company_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_company_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_dispatch_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_dispatch_info`;
CREATE TABLE `fe_dispatch_info` (
  `dispatch_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '调度单id',
  `dispatch_sponsor` varchar(11) DEFAULT NULL COMMENT '发起人',
  `dispatch_receiver` varchar(11) DEFAULT NULL COMMENT '接收人',
  `dispatch_ccperson` varchar(11) DEFAULT NULL COMMENT '抄送人',
  `dispatch_approver` varchar(11) DEFAULT NULL COMMENT '审批人',
  `dispatch_limittime` varchar(20) DEFAULT NULL COMMENT '调度单有效期',
  `dispatch_content` varchar(64) DEFAULT NULL COMMENT '内容',
  `dispatch_time` varchar(20) DEFAULT NULL COMMENT '发起时间',
  `answer_content` varchar(64) DEFAULT NULL COMMENT '反馈内容',
  `answer_time` varchar(20) DEFAULT NULL COMMENT '回复时间',
  `finish_time` varchar(20) DEFAULT NULL COMMENT '指令完成时间',
  `uploader_id` int(11) DEFAULT NULL COMMENT '附件id',
  `dispatch_status` varchar(1) DEFAULT NULL COMMENT '调度单状态',
  `dispatch_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`dispatch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_dispatch_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_duty_table
-- ----------------------------
DROP TABLE IF EXISTS `fe_duty_table`;
CREATE TABLE `fe_duty_table` (
  `duty_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '值班表id',
  `duty_date` datetime DEFAULT NULL,
  PRIMARY KEY (`duty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_duty_table
-- ----------------------------

-- ----------------------------
-- Table structure for fe_equipment_account
-- ----------------------------
DROP TABLE IF EXISTS `fe_equipment_account`;
CREATE TABLE `fe_equipment_account` (
  `eaccount_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '设备资产台账id',
  `equipment_id` int(11) DEFAULT NULL COMMENT '设备id',
  `equipment_usetime` double(6,2) DEFAULT NULL COMMENT '使用年限',
  PRIMARY KEY (`eaccount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_equipment_account
-- ----------------------------

-- ----------------------------
-- Table structure for fe_equipment_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_equipment_info`;
CREATE TABLE `fe_equipment_info` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '设备id',
  `worker_id` int(11) DEFAULT NULL COMMENT '负责人id',
  `equipment_number` varchar(32) DEFAULT NULL COMMENT '设备编号',
  `equipment_name` varchar(16) DEFAULT NULL COMMENT '设备名称',
  `equipment_version` varchar(16) DEFAULT NULL COMMENT '设备型号',
  `equipment_type` int(11) DEFAULT NULL COMMENT '设备类型',
  `equipment_weight` double(11,2) DEFAULT NULL COMMENT '设备重量',
  `equipment_size` char(32) DEFAULT NULL COMMENT '外形尺寸',
  `equipment_certificate number` varchar(32) DEFAULT NULL COMMENT '使用证编号',
  `equipment_using_date` varchar(20) DEFAULT NULL COMMENT '投用日期',
  `equipment_manufacture_date` varchar(20) DEFAULT NULL COMMENT '出厂日期',
  `equipment_factory_number` varchar(32) DEFAULT NULL COMMENT '出厂编号',
  `equipment_storage_place` varchar(32) DEFAULT NULL COMMENT '存放地点',
  `equipment_ownner` varchar(32) DEFAULT NULL COMMENT '所属部门',
  `equipment_running_state` varchar(1) DEFAULT NULL COMMENT '运行状态',
  `equipment_installation_unit` varchar(32) DEFAULT NULL COMMENT '安装单位',
  `equipment_purchasing_department` varchar(32) DEFAULT NULL COMMENT '采购部门',
  `equipment_drawing` varchar(32) DEFAULT NULL COMMENT '图纸技术资料',
  `equipment_running_time` double(11,2) DEFAULT NULL COMMENT '运行时间',
  `equipment_supplier` varchar(16) DEFAULT NULL COMMENT '设备供应商',
  `equipment_depreciation_year` double(11,2) DEFAULT NULL COMMENT '折旧年限',
  `equipment_install_date` varchar(20) DEFAULT NULL COMMENT '安装日期',
  `equipment_acception_date` varchar(20) DEFAULT NULL COMMENT '验收日期',
  `equipment_description` varchar(64) DEFAULT NULL COMMENT '备注',
  `equipment_manufacture` varchar(32) DEFAULT NULL COMMENT '制造厂家',
  `equipment_inspection_cycle` double(10,2) DEFAULT NULL COMMENT '检验周期',
  `equipment_attachment` varchar(64) DEFAULT NULL COMMENT '附件',
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_equipment_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_equipment_maintain_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_equipment_maintain_record`;
CREATE TABLE `fe_equipment_maintain_record` (
  `maintain_id` int(11) NOT NULL COMMENT '保养编号',
  `equipment_id` int(11) DEFAULT NULL COMMENT '设备id',
  `site_id` int(11) DEFAULT NULL COMMENT '锅炉房/换热站id',
  `maintain_time` varchar(20) DEFAULT NULL COMMENT '保养时间',
  `maintain_reason` varchar(32) DEFAULT NULL COMMENT '保养内容',
  `maintain_person` varchar(10) DEFAULT NULL COMMENT '保养人员',
  `maintain_materials` varchar(255) DEFAULT NULL COMMENT '保养用料',
  `uploader_id` varchar(255) DEFAULT NULL COMMENT '附件id',
  `maintain_description` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`maintain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_equipment_maintain_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_equipment_maintenance_plan
-- ----------------------------
DROP TABLE IF EXISTS `fe_equipment_maintenance_plan`;
CREATE TABLE `fe_equipment_maintenance_plan` (
  `plan_id` int(11) NOT NULL COMMENT '检修计划id',
  `equipment_id` int(11) DEFAULT NULL COMMENT '设备id',
  `site_id` int(11) DEFAULT NULL COMMENT '锅炉房/换热站id',
  `plan_time` varchar(20) DEFAULT NULL COMMENT '计划检修时间',
  `plan_reason` varchar(64) DEFAULT NULL COMMENT '计划检修内容',
  `plan_person` varchar(10) DEFAULT NULL COMMENT '计划检修人员',
  `uploader_id` int(11) DEFAULT NULL COMMENT '附件id',
  `plan_result` varchar(1) DEFAULT NULL COMMENT '完成情况',
  `plan_description` varchar(64) DEFAULT NULL COMMENT '备注',
  `plan_number` varchar(32) DEFAULT NULL COMMENT '检修编号',
  `plan_finish_time` varchar(20) DEFAULT NULL COMMENT '计划检修完成时间',
  `plan_place` varchar(20) DEFAULT NULL COMMENT '检修地点',
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_equipment_maintenance_plan
-- ----------------------------

-- ----------------------------
-- Table structure for fe_equipment_maintenance_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_equipment_maintenance_record`;
CREATE TABLE `fe_equipment_maintenance_record` (
  `maintenance_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '检修记录id',
  `equipment_id` int(11) DEFAULT NULL COMMENT '设备id',
  `maintenance_time` varchar(20) DEFAULT NULL COMMENT '检修时间',
  `maintenance_reason` varchar(64) DEFAULT NULL COMMENT '检修项目',
  `maintenance_person` varchar(10) DEFAULT NULL COMMENT '检修人员',
  `uploader_id` int(11) DEFAULT NULL COMMENT '附件id',
  `maintenance_description` varchar(64) DEFAULT NULL COMMENT '备注',
  `maintenance_acceptance_person` varchar(10) DEFAULT NULL COMMENT '验收人员',
  `maintenance_acceptance_time` varchar(20) DEFAULT NULL COMMENT '验收时间',
  `maintenance_acceptance_advice` varchar(255) DEFAULT NULL COMMENT '验收意见',
  `maintenance_time_consuming` double(10,0) DEFAULT NULL COMMENT '工时',
  `maintenance_type` varchar(1) DEFAULT NULL COMMENT '检修类型',
  PRIMARY KEY (`maintenance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_equipment_maintenance_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_flag_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_flag_info`;
CREATE TABLE `fe_flag_info` (
  `fid` int(11) NOT NULL AUTO_INCREMENT COMMENT '标志位id',
  `flag_description` varchar(10) DEFAULT NULL COMMENT '标志描述',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_flag_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_login_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_login_info`;
CREATE TABLE `fe_login_info` (
  `login_id` int(11) NOT NULL,
  `login_password` varchar(32) NOT NULL,
  `login_superpassword` varchar(32) NOT NULL DEFAULT 'admin',
  `login_userexpirydate` datetime DEFAULT NULL,
  `login_userstate` int(11) NOT NULL DEFAULT '1',
  `login_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_login_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_login_role_relate
-- ----------------------------
DROP TABLE IF EXISTS `fe_login_role_relate`;
CREATE TABLE `fe_login_role_relate` (
  `login_role_id` int(11) NOT NULL,
  PRIMARY KEY (`login_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_login_role_relate
-- ----------------------------

-- ----------------------------
-- Table structure for fe_materiel_consumption
-- ----------------------------
DROP TABLE IF EXISTS `fe_materiel_consumption`;
CREATE TABLE `fe_materiel_consumption` (
  `spares_id` int(11) NOT NULL COMMENT '物料消耗id',
  `maintenance_id` int(11) DEFAULT NULL COMMENT '维修记录id',
  `site_id` int(11) DEFAULT NULL COMMENT '锅炉房/换热站id',
  `uploader_id` int(11) DEFAULT NULL COMMENT '附件id',
  `spares_time` varchar(20) DEFAULT NULL COMMENT '物料消耗时间',
  `spares_model` varchar(32) DEFAULT NULL COMMENT '物料规格型号',
  `spares_name` varchar(32) DEFAULT NULL COMMENT '物料名称',
  `spares_quantity` double(10,0) DEFAULT NULL COMMENT '消耗数量',
  `spares_unit` varchar(6) DEFAULT NULL COMMENT '单位',
  `spares_description` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`spares_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_materiel_consumption
-- ----------------------------

-- ----------------------------
-- Table structure for fe_outer_list
-- ----------------------------
DROP TABLE IF EXISTS `fe_outer_list`;
CREATE TABLE `fe_outer_list` (
  `outer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '外协联系人id',
  `outer_name` varchar(10) DEFAULT NULL COMMENT '姓名',
  `outer_phone` varchar(11) DEFAULT NULL COMMENT '电话',
  `outer_company` varchar(32) DEFAULT NULL COMMENT '公司',
  `outer_description` varchar(64) DEFAULT NULL COMMENT '备注',
  `outer_email` varchar(32) DEFAULT NULL COMMENT '邮箱',
  `outer_position` varchar(10) DEFAULT NULL COMMENT '职位',
  `outer_department` varchar(10) DEFAULT NULL COMMENT '部门',
  PRIMARY KEY (`outer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_outer_list
-- ----------------------------

-- ----------------------------
-- Table structure for fe_parameter_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_parameter_info`;
CREATE TABLE `fe_parameter_info` (
  `parameter_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '参数id',
  `equipment_id` int(11) DEFAULT NULL COMMENT '设备id',
  `parameter_name` varchar(16) DEFAULT NULL COMMENT '参数名称',
  `parameter_value` varchar(16) DEFAULT NULL COMMENT '参数值',
  `parameter_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`parameter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_parameter_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_permision_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_permision_info`;
CREATE TABLE `fe_permision_info` (
  `permision_id` int(11) NOT NULL,
  PRIMARY KEY (`permision_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_permision_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_project_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_project_info`;
CREATE TABLE `fe_project_info` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '项目id',
  `branch_id` int(11) DEFAULT NULL COMMENT '所属区域项目部/分公司id',
  `project_name` varchar(16) DEFAULT NULL COMMENT '项目名称',
  `project_leader` varchar(10) DEFAULT NULL COMMENT '项目负责人',
  `project_tel` varchar(11) DEFAULT NULL COMMENT '联系方式',
  `project_addr` varchar(32) DEFAULT NULL COMMENT '地址',
  `project_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_project_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_register_history_value
-- ----------------------------
DROP TABLE IF EXISTS `fe_register_history_value`;
CREATE TABLE `fe_register_history_value` (
  `history_value_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '历史数据id',
  `register_id` int(11) DEFAULT NULL COMMENT '寄存器id',
  `register_value` double(10,2) DEFAULT NULL COMMENT '历史数据',
  `time` varchar(20) DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`history_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_register_history_value
-- ----------------------------

-- ----------------------------
-- Table structure for fe_register_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_register_info`;
CREATE TABLE `fe_register_info` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '寄存器id',
  `dtu_id` int(11) DEFAULT NULL COMMENT 'dtu的id',
  `plc_addr` int(6) DEFAULT NULL COMMENT 'plc从站地址',
  `register_addr` varchar(6) DEFAULT NULL COMMENT '寄存器地址',
  `word_length` varchar(10) DEFAULT NULL COMMENT '字长',
  `decimal_point` varchar(10) DEFAULT NULL COMMENT '小数点处理',
  `register_kind` varchar(10) DEFAULT NULL COMMENT '寄存器类型',
  `business_item` varchar(16) DEFAULT NULL COMMENT '寄存器存储的内容',
  `business_unit` varchar(10) DEFAULT NULL COMMENT '单位',
  `register_id_receive` int(11) DEFAULT NULL COMMENT '接收方寄存器id',
  `register_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_register_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_role_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_role_info`;
CREATE TABLE `fe_role_info` (
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_role_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_role_permision_relate
-- ----------------------------
DROP TABLE IF EXISTS `fe_role_permision_relate`;
CREATE TABLE `fe_role_permision_relate` (
  `role_permision_id` int(11) NOT NULL,
  PRIMARY KEY (`role_permision_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_role_permision_relate
-- ----------------------------

-- ----------------------------
-- Table structure for fe_site_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_site_info`;
CREATE TABLE `fe_site_info` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '热源厂/换热站id',
  `project_id` int(11) DEFAULT NULL COMMENT '所属项目id',
  `site_name` varchar(16) DEFAULT NULL COMMENT '热源厂/换热站名称',
  `site_leader` varchar(10) DEFAULT NULL COMMENT '热源厂/换热站负责人',
  `site_tel` varchar(11) DEFAULT NULL COMMENT '联系方式',
  `site_addr` varchar(32) DEFAULT NULL COMMENT '地址',
  `site_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_site_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_spares_stock
-- ----------------------------
DROP TABLE IF EXISTS `fe_spares_stock`;
CREATE TABLE `fe_spares_stock` (
  `spares_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '备件id',
  `worker_id` int(11) unsigned zerofill DEFAULT NULL COMMENT '负责人id',
  `spares_name` varchar(16) DEFAULT NULL COMMENT '备件名称',
  `spares_stock` int(6) DEFAULT NULL COMMENT '库存',
  `spares_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`spares_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_spares_stock
-- ----------------------------

-- ----------------------------
-- Table structure for fe_terminal_measure_history_value
-- ----------------------------
DROP TABLE IF EXISTS `fe_terminal_measure_history_value`;
CREATE TABLE `fe_terminal_measure_history_value` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '历史记录id',
  `tmeasure_equipment_id` int(11) DEFAULT NULL COMMENT '末端测温设备id',
  `tmeasure_value` double(6,2) DEFAULT NULL COMMENT '测温值',
  `tmeasure_time` varchar(20) DEFAULT NULL COMMENT '测量时间',
  `tmeasure_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_terminal_measure_history_value
-- ----------------------------

-- ----------------------------
-- Table structure for fe_terminal_measure_last_value
-- ----------------------------
DROP TABLE IF EXISTS `fe_terminal_measure_last_value`;
CREATE TABLE `fe_terminal_measure_last_value` (
  `terminal_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '实时数据id',
  `tmeasure_equipment_id` int(11) DEFAULT NULL COMMENT '测温设备id',
  `tmeasure_value` double(6,2) DEFAULT NULL COMMENT '测量值',
  `tmeasure_time` varchar(20) DEFAULT NULL COMMENT '测量时间',
  `tmeasure_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`terminal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_terminal_measure_last_value
-- ----------------------------

-- ----------------------------
-- Table structure for fe_tmeasure_equipment_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_tmeasure_equipment_info`;
CREATE TABLE `fe_tmeasure_equipment_info` (
  `tmeasure_equipment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '末端测温设备id',
  `site_id` int(11) DEFAULT NULL COMMENT '热源厂/换热站id',
  `tmeasure_address` varchar(20) DEFAULT NULL COMMENT '被测用户',
  `tmeasure_equipment_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`tmeasure_equipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_tmeasure_equipment_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_uploader_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_uploader_record`;
CREATE TABLE `fe_uploader_record` (
  `uploader_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '附件id',
  `uploader_url` varchar(32) DEFAULT NULL COMMENT '附件路径',
  `uploader_time` varchar(20) DEFAULT NULL COMMENT '上传时间',
  `uploader_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`uploader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_uploader_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_visit_measure_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_visit_measure_record`;
CREATE TABLE `fe_visit_measure_record` (
  `measure_record_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '测温记录id',
  `vmeasure_time` varchar(20) DEFAULT NULL COMMENT '测温时间',
  `vmeasure_householder` varchar(20) DEFAULT NULL COMMENT '被测用户',
  `vmeasure_value` double(6,2) DEFAULT NULL COMMENT '测温值',
  `vmeasure_person` varchar(10) DEFAULT NULL COMMENT '测温人员',
  `vmeasure_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`measure_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_visit_measure_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_warn_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_warn_info`;
CREATE TABLE `fe_warn_info` (
  `warn_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报警id',
  `register_id` int(11) DEFAULT NULL COMMENT '寄存器id',
  `warn_high_value` double(11,2) DEFAULT NULL COMMENT '报警上限',
  `warn_low_value` double(11,2) DEFAULT NULL COMMENT '报警下线',
  `warn_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`warn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_warn_info
-- ----------------------------

-- ----------------------------
-- Table structure for fe_warn_record
-- ----------------------------
DROP TABLE IF EXISTS `fe_warn_record`;
CREATE TABLE `fe_warn_record` (
  `warn_record_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报警记录id',
  `register_id` int(11) DEFAULT NULL COMMENT '寄存器id',
  `warn_level` varchar(4) DEFAULT NULL COMMENT '报警等级',
  `warn_time` varchar(20) DEFAULT NULL COMMENT '报警时间',
  `warn_value` double(11,2) DEFAULT NULL COMMENT '报警值',
  `warn_response` varchar(1) DEFAULT NULL COMMENT '报警是否响应',
  `warn_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`warn_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_warn_record
-- ----------------------------

-- ----------------------------
-- Table structure for fe_worker_info
-- ----------------------------
DROP TABLE IF EXISTS `fe_worker_info`;
CREATE TABLE `fe_worker_info` (
  `worker_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '工作人员id',
  `dtu_id` int(11) DEFAULT NULL COMMENT 'dtu的id',
  `site_id` int(11) DEFAULT NULL COMMENT '热源厂/换热站id',
  `worker_name` varchar(10) DEFAULT NULL COMMENT '姓名',
  `worker_mobile` varchar(11) DEFAULT NULL COMMENT '手机',
  `worker_phone` varchar(11) DEFAULT NULL COMMENT '电话',
  `worker_mail` varchar(32) DEFAULT NULL COMMENT '邮箱',
  `worker_department` varchar(16) DEFAULT NULL COMMENT '部门',
  `worker_number` int(16) unsigned DEFAULT NULL COMMENT '工号',
  `worker_position` varchar(16) DEFAULT NULL COMMENT '职务',
  `worker_duty` varchar(64) DEFAULT NULL COMMENT '职责',
  `worker_description` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fe_worker_info
-- ----------------------------
