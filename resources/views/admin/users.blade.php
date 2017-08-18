
@extends('layouts.admin')

@section('title', '用户')

@section('content')
    <div class="content">
        <div class="header">

            <h1 class="page-title">Users</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li class="active">Users</li>
            </ul>

        </div>
        <div class="main-content">

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> 添加用户</button>
                <button class="btn btn-default">导入</button>
                <button class="btn btn-default">导出</button>
                <div class="btn-group">
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th style="width: 3.5em;"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Tompson</td>
                    <td>the_mark7</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ashley</td>
                    <td>Jacobs</td>
                    <td>ash11927</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Audrey</td>
                    <td>Ann</td>
                    <td>audann84</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>John</td>
                    <td>Robinson</td>
                    <td>jr5527</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Aaron</td>
                    <td>Butler</td>
                    <td>aaron_butler</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Chris</td>
                    <td>Albert</td>
                    <td>cab79</td>
                    <td>
                        <a href="user.html"><i class="fa fa-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>

            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>

            <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Delete Confirmation</h3>
                        </div>
                        <div class="modal-body">
                            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>


            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">添加用户</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane active in" id="home">
                                    <form id="togglingForm" method="post" action="{{url('/adduser')}}">
                                        <div class="form-group">
                                            <label>用户名</label>
                                            <input name="username" type="text" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>手机</label>
                                            <input name="mobile" type="text" value="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>密码</label>
                                            <input name="password" type="text" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>确认密码</label>
                                            <input name="repassword" type="text" value="" class="form-control">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span id="returnMessage" > </span>
                    <button type="button" class="btn btn-default left" data-dismiss="modal">关闭</button>
                    <input type="submit" class="btn btn-primary save">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

@endsection

@section('extend_css')
    <script>
        var form = $('#togglingForm');
        $(document).ready(function() {
            form.bootstrapValidator({
                excluded: [':disabled'],
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },

                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: '姓名不能为空'
                            },
                            stringLength: {
                                min: 6,
                                max: 18,
                                message: '用户名长度必须在6到18位之间'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: '用户名只能包含大写、小写、数字和下划线'
                            }
                        }
                    },
                    mobile: {
                        validators: {
                            notEmpty: {
                                message: '手机不能为空'
                            },
                            regexp: {
                                regexp: /^1[3|4|5|8][0-9]\d{4,8}$/,
                                message: '手机号格式不正确'
                            }
                        }
                    }

                }
            })





            //提交表单
            $('.save').click(function(){
                var bv = form.data('bootstrapValidator');
                bv.validate();
                if(bv.isValid()){
                    $.ajax({
                        url: '{{url('/adduser')}}',
                        async: false,//同步，会阻塞操作
                        type: 'GET',//PUT DELETE POST
                        data: form.serialize(),
                        complete: function (msg) {

                        },
                        success: function (result) {
                            if (result.status) {
                                window.location.reload();
                            } else {
                                $("#returnMessage").hide().html('<label class="label label-danger">'+result.msg+'</label>').show(300);
                            }
                        }, error: function () {
                            $("#returnMessage").hide().html('<label class="label label-danger">修改失败!</label>').show(300);
                        }
                    })
                }
            })

        });
    </script>
@endsection
