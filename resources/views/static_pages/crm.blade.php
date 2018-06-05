@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>注册</h5>
            </div>
/* 此处如果需要填入的字段，需在数据库表中有相对应的表，值等信息。那么就需要在填充数据的时候设计好数据库。
           .还需要在控制器里添加处理的相关逻辑。
            */

            <div class="panel-body">
                <form action="{{ route('users.store') }}" method="post">
                    <div class="form-group">
                        <label for"name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                    </div>


                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" />
                    </div>


                    <div class="form-group">
                        <label for="password_confirmation">邮箱：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" />
                    </div>

                    <button type="submit" class="btu btu-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop