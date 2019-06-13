# MsgSystem
+ 项目基本信息及功能
   + 本项目是我在大二学期对于PHP学习前后端的一个阶段性课程作业，虽然所使用的技术很局限很陈旧，但也记录了我的一个成长历程
   + 主要功能是通过链接数据库，对用户个人信息及发言做一个管理，较PHP经典留言板多了一些功能
+ 作者：shoubai
+ 时间：2019-6-1

## 环境安装
- Apache/2.4.39 (Win64)
- mysql  Ver 15.1
或者直接安装集成包xampp

## 项目结构与构建思路
```console
│  README.md
│
├─Controller
│  │  .gitignore                               不上传uploads文件
│  │  changeSure.php                           修改个人信息的逻辑判断
│  │  chartAdd.php                             向数据库中写入从聊天室发来的数据
│  │  chartList.php                            向数据库中查询需要返回前端的数据
│  │  guestEditSure.php                        用户留言编辑逻辑判断
│  │  guestSure.php                            用户回复留言逻辑判断
│  │  logSure.php                              用户登陆逻辑判断
│  │  regSure.php                              用户注册逻辑判断
│  │  sendbtn.js                               聊天室js代码
│  │
│  └─uploads                                   用户注册界面存储的头像文件夹
│
├─Model
│  ├─front                                     注册登陆界面前端UI
│  │  ├─css
│  │  │
│  │  ├─fonts
│  │  │ 
│  │  ├─img                                    前端相关背景img
│  │  │
│  │  ├─js
│  │  │
│  │  └─sass
│  │                  
│  │
│  ├─lib
│  │      config.php                            链接数据库 Mysql.php中的类及session开启
│  │      jq.js                                 Jquery文件
│  │      MySQL.php                             对数据库中的数据处理的类
│  └─sql
│         phpcourse.sql                         项目所使用的数据库
│
└─Views
    │  change.php                               个人信息修改页面
    │  chart.php                                聊天室界面
    │  fileSure.php                             头像文件上传的类
    │  guestBook.php                            留言板界面
    │  guestDel.php                             删除留言界面
    │  guestEdit.php                            编辑留言界面
    │  login.php                                登陆界面
    │  login1.php                               登陆界面（基础版）
    │  logout.php                               用户退出
    │  mine.php                                 个人信息界面
    │  register.php                             注册界面 
    │  register1.php                            注册界面（基础版）

```


## 运行流程
- 开启Apach及Mysql服务
- 在本地服务中打开login.php开始注册 可以选择数据库中已经存在的一些用户信息 也可以选择注册
- 进入guestBook.php界面 此界面将展示数据中个用户的留言以及自己的留言提交功能
   - 对于用户自己的发言才有权限进行修改和删除
- 可以在guestBook.php界面的右上角打开聊天室以及个人中心
   - 在聊天室和个人中心中也有相应超链接进行跳转
   - 在个人中心页面可以修改个人信息
- 退出

## 借鉴
- 项目结构为MVC 在此感谢我的朋友@jon-zhang提出的建议
- 项目前端UI是在网上找的开放的资源 
