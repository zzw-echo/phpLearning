<?php
namespace app\index\controller;

//use think\Request;
use think\Db;

class Index
{
    public function index()
    {
        echo 'hello world!';
    }

    public function testRequest()
    {
        //        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';

//        return 'hello world!';

//        $request = Request::instance();

//        dump($request);
        /*        echo '当前的域名是：'.$request -> domain().'<br/>';
                echo '当前的入口文件是：'.$request -> baseFile().'<br/>';
                echo '当前的后缀是：'.$request -> ext().'<br/>';
                echo '当前的操作是：'.$request -> action().'<br/>';
                echo '当前的请求方式是：'.$request -> method().'<br/>';*/

        //http://localhost/phplearning/tp5/public/?name=%E6%99%9A%E9%A3%8E%E6%99%B4&password=123456&sex=%E7%94%B7
//        echo $request->param('name');
//        dump($request->param(),'<hr/>');
//        dump($request->param(false),'<br/>');
//        dump($request->param(true),'<hr/>');

//        dump(input(''));
//        dump(input('param.name'));

//        dump($request->get(['name'=>'thinkphp']));
//        dump($request->ext());
    }

    public function db()
    {
        //插入数据
//        $result = Db::execute('insert into think_data (name,status) values ("周杰伦",1)');
//        $result = Db::execute('insert into think_data (name,status) values ("frame",1)');
//        $result = Db::execute('insert into think_data (name,status) values ("6666",1)');
//        dump($result);
        //修改数据
//        $result = Db::execute('update think_data set name = "张学友",status = 0 where id = 1');
//        dump($result);

        //删除数据
//        $result = Db::execute('delete from think_data where id =1 ');
//        dump($result);

        //查询数据

        $result = Db::query('select * from think_data');
        dump($result);
//        print_r($result);

    }

}
