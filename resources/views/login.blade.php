<!DOCTYPE html>
<html lang="en">

<head>

    <title>Inventory Management System</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
   
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="center" style="margin-top: 20%; text-align: center;">
                    <h2>Inventory Management System</h2>
                </div>
                <div class="login-panel panel panel-default" style="margin-top: 15%">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/login" >
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                @include('layouts.alert')                               
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

</body>

</html>
