<?php
namespace app\cner\validate;
use think\Validate;
class Validates extends Validate
{
    protected $rule = [
        ['account', 'require', '账号不能为空'],
        ['pass', 'require', '密码不能为空'],
        ['code', 'require|captcha', '验证码不能为空|验证码错误'],
        ['img','require','图片不能为空'],
        ['type','require','类型不能为空'],
        ['content','require','内容不能为空'],
        ['title','require','标题不能为空'],
        ['name','require','名称不能为空'],
        ['des','require|length:0,50','简介不能为空'],
        ['price','require','价格不能为空'],
        ['suggest','require','介绍不能为空'],
        ['school','require','学校不能为空'],
        ['face','require','头像不能为空'],
        ['a_content','require|length:0,150','评论内容不能为空|评论内容不超过150字符'],
        ['img_s','require','点击前图片不能为空'],
        ['img_h','require','点击后图片不能为空'],
        ['url','require','媒体链接不能为空'],
        ['b_content','require','报名条件不能为空'],
        ['c_content','require','常见问题不能为空'],
        ['sort','number','排序字段为数字'],
        ['time','require','时间不能为空'],
        ['address','require','地址不能为空'],
        ['phone','require','电话不能为空'],
        ['key','require','关键词不能为空'],
        ['copyright','require','版权信息不能为空'],
        ['o_password','require','原密码不能为空'],
        ['n_password','require','新密码不能为空'],
        ['password','require|confirm:n_password','请确认密码|确认密码与新密码不一致'],
        ['province','require','所属省份不能为空'],
        ['city','require','所属城市不能为空'],
        ['district','require','所属区县不能为空'],
        ['point','require','坐标不能为空'],
    ];
    protected $scene=[
        'login'=>['account','pass','code'],
        'addAder'=>['img','type'],
        'suggest'=>['content'],
        'addEnsure'=>['img','title','content'],
        'addCar'=>['img','name','des','price','suggest'],
        'addAssess'=>['name','school','face','a_content'],
        'addMedium'=>['img_s','img_h','url'],
        'addApply'=>['b_content','c_content'],
        'addFlow'=>['name','content'],
        'addAboutme'=>['content'],
        'addLeader'=>['img','type','des','sort'],
        'addJoinme'=>['content','name','phone','address','time'],
        'editConf'=>['name','key','des','phone'],
        'checkpass'=>['o_password','n_password','password'],
        'addYard'=>['title','province','city','district','point'],
    ];
}