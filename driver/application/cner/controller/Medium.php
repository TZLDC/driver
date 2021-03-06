<?php
namespace app\cner\controller;
class  Medium extends Common{
    public function index(){
        $res=db('medium')->select();
        $this->assign('ms',$res);
        return $this->fetch();
    }
    public function add(){
        if(request()->isAjax()){
            $input=input('post.');
            $validate=validate('Validates');
            if($validate->scene('addMedium')->check($input)){
                $res=db('medium')->insert($input);
                if($res){
                    return show(1,'添加成功');
                }else{
                    return show(0,'添加失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
            return $this->fetch();
        }
    }
    public function edit(){
        if(request()->isAjax()){
            $input=input('post.');
            $id=input('get.id');
            $validate=validate('Validates');
            if($validate->scene('addMedium')->check($input)){
                $res=db('medium')->where('id',$id)->update($input);
                if($res){
                    return show(1,'修改成功');
                }else{
                    return show(0,'修改失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
            $id=input('get.id');
            $res=db('medium')->where('id',$id)->find();
            $this->assign('m',$res);
            return $this->fetch();
        }
    }
    public function delete(){
        $id=input('get.id');
        $res=db('medium')->where('id',$id)->delete();
        if($res){
            return true;
        }else{
            return show(0,'删除失败');
        }
    }
}