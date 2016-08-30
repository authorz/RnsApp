<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>{{ Lang::get('login.title') }}</title>
        <link rel="stylesheet" type="text/css" href="/css/login.css"/>
        <style>
            body{height:100%;background:#16a085;overflow:hidden;}
            canvas{z-index:-1;position:absolute;}
        </style>
        <script src="/admin/vendor/jquery/jquery.min.js"></script>
        <script src="/plugin/layer/layer.js"></script>
        {{--<script src="/js/verificationNumbers.js" tppabs="js/verificationNumbers.js"></script>--}}
        <script src="/js/Particleground.js" tppabs="js/Particleground.js"></script>
    </head>
    <body>
    <a href="{{ base_path() }}/README.md">README.md</a>
        <form name="login" method="get" id="login">
            <dl class="admin_login">
                <dt>
                    <strong>{{ Lang::get('login.login_title') }}</strong>
                    <em>{{ Lang::get('login.login_title2') }}</em>
                </dt>
                <dd class="user_icon">
                    <input type="text" placeholder="{{ Lang::get('login.input_user') }}" class="login_txtbx" name="username"/>
                </dd>
                <dd class="pwd_icon">
                    <input type="password" placeholder="{{ Lang::get('login.input_pwd') }}" class="login_txtbx" name="password"/>
                </dd>
                <dd class="val_icon">
                    <div class="checkcode">
                        <input type="text"  name="code" id="J_codetext" placeholder="{{ Lang::get('login.input_code') }}" maxlength="4" class="login_txtbx">
                        <img class="J_codeimg" id="myCanvas" src="/admin/coder" onclick="javascript:this.src='/admin/coder?tm='+Math.random();"/>
                        {{--<canvas class="J_codeimg" id="myCanvas" onclick="createCode()">{{ Lang::get('login.canvas_error') }}</canvas>--}}
                    </div>
                    <input type="button" value="{{ Lang::get('login.refresh') }}" class="ver_btn" onclick="javascript:document.getElementById('myCanvas').src='/admin/coder?tm='+Math.random();">
                </dd>
                <dd>
                    <input type="button" value="{{ Lang::get('login.dologin') }}" class="submit_btn"/>
                </dd>
                <dd>
                    <p>{{ Lang::get('login.copyright') }}</p>
                    <p>{{ Lang::get('login.code') }}</p>
                </dd>
            </dl>
        </form>
        <script>
            $(document).ready(function() {
                $('body').particleground({
                    dotColor: '#5cbdaa',
                    lineColor: '#5cbdaa'
                });
                $(".submit_btn").click(function(){
                    $.ajax({
                        url : '/admin/operate/is_login',
                        type : 'POST',
                        data : new FormData($("#login")[0]),
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        processData : false,
                        contentType : false,
                        success : function(responseStr) {
                            if(responseStr.state == 1){
                                location.href = '/admin/index';
                            }else{
                                layer.alert(responseStr.content);
                            }

                        },
                        error : function(responseStr) {

                        }
                    });
                });
            });
        </script>
    </body>
</html>
