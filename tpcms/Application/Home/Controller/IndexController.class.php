<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController
{
    public function index()
    {
        $article = D('article'); // 实例化User对象
        $count = $article->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 4);//
        $show = $Page->show();//
        $list = $article->order('time desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('page', $show);// 赋值分页输出
        $this->assign('list', $list);// 赋值数据集

        $board = D('board');
        $messages = $board->limit(5)->select();
        $this->assign('messages',$messages);
        $this->display();
    }

    public function download()
    {
        header("Content-type: text/html;charset=utf-8");
        $file_name = '测试简历.docx';
        $file_name = iconv("utf-8", "gbk//IGNORE", $file_name);
        $file_sub_path = $_SERVER['DOCUMENT_ROOT'] . __ROOT__ . '/Public/Download/';
        $file_path = $file_sub_path . $file_name;
        if (!file_exists($file_path)) {  //判断文件是否存在
            echo "文件不存在";
            exit();
        }
        $fp = fopen($file_path, "r+") or die('打开文件错误');   //下载文件必须要将文件先打开。写入内存
        $file_size = filesize($file_path);
        //返回的文件流
        Header("Content-type:application/octet-stream");
        //按照字节格式返回
        Header("Accept-Ranges:bytes");
        //返回文件大小
        Header("Accept-Length:" . $file_size);
        //弹出客户端对话框，对应的文件名
        Header("Content-Disposition:attachment;filename=" . $file_name);
        //防止服务器瞬间压力增大，分段读取
        $buffer = 1024;
        while (!feof($fp)) {
            $file_data = fread($fp, $buffer);
            echo $file_data;
        }
        fclose($fp);
    }

    public function messadd()
    {
        $board = D('board');
        if (IS_POST) {
            $data['username'] = I('username');
            $data['email'] = I('email');
            $data['content'] = I('content');
            $data['time'] = date('Y-m-d', time());
            if ($board->create($data)) {
                if ($board->add()){
                    $this->success('添加留言成功！',U('index'));
                }else{
                    $this->error('留言失败');
                }
            } else {
                $this->error($board->getError());
            }
        }

    }
}