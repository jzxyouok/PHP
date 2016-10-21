<?php
namespace Home\Model;
use Think\Model;
class BoardModel extends Model{
    protected $_validate = array(
        array('username','require','昵称不得为空！',1,'regex',3),
        array('email','require','邮箱不得为空！',1,'regex',3),
        array('content','require','内容不得为空！',1,'regex',3),
    );
}