### Restful简介
```REST``` 是一套风格约定，是一种架构规范，```RESTful``` 是它的形容词形式；比如一套实现了 ```REST``` 风格的接口，可以称之为 ```RESTful``` 接口。
### 一些约定
- API中的URL来定位请求资源，为名词复数
- URL中更加逻辑进行多层嵌套
- API请求中的HTTP方法用来定义行为
- 版本号：通过HTTP头信息、子域名或URL来判断

URL中只能含有名词复数、不能有行为动作如get/delete/update/add/search等，错误例子
```
/getUsers
/addUser
/deleteUser
/updateUser
```
正确例子：
```
GET         /users                  获取全部用户
POST        /users                  新建用户
DELETE      /users/1                删除ID为1的用户
PUT/PATCH   /users/1                更新ID为1的用户
GET         /classes/11/students/22 获取班级ID为11的学号为22的学生信息
```
HTTP请求方法
方法 | 副作用 | 幂等方法
- | :-: | -: | -:
GET | N | Y
POST | Y | N
PUT | Y| N 
DELETE | Y | N

- 【GET】获取资源，无副作用，幂等方法
```
GET     /users      获取全部用户
```
多次调用相同效果
- 【POST】创建资源，有副作用，非幂等方法
```
POST    /users      新建用户
```
多次调用会产生多条数据，顾要有防重机制
- 【PUT/PATCH】更新资源，有副作用，非幂等方法
```
PUT     /users/1    更新ID为1的用户信息
```
多次调用会产生不同的效果，PUT用于全量更新，PATCH用于部分更新
- 【DELETE】删除资源，有副作用，非幂等方法
```
DELETE  /users/1    删除ID为1的用户信息
```
多次调用产生不同效果，如第一次成功，以后返回404

### 其它
REST 风格的接口地址，表示的可能是单个资源，也可能是资源的集合，这个时候就需要良好的接口参数设计，如搜索、排序、分页等，示例
```
GET    /users?keyword=xiaoli&sort=asc&limit10&offset=0
```