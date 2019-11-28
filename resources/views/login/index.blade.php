<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>Akademik</title>
  {{ Html::style('semantic/semantic.min.css') }}
</head>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image">
      <img src="{{ asset('logo.png') }}" class="image">
      <div class="content">
        Log-in Admin
      </div>
    </h2>
    {!! Form::open(['url'=>'/login', 'method'=>'post', 'class'=>'ui large form']) !!}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        {!! Form::submit('Login', ['class'=>'ui fluid large teal submit button']) !!}
      </div>

      <div class="ui error message"></div>

    {!! Form::close() !!}

   {{--  <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div> --}}
  </div>
</div>

</body>

</html>
