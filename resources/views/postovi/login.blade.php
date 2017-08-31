
{!! Html::style('css/stajl1.css') !!}
  <link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
          <!--  <form class="form-signin"> -->
              {!! Form::open(['route' => 'login.post','class'=>'form-signin']) !!}
                <span id="reauth-email" class="reauth-email"></span>
              <!--  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>-->
                  {{ Form::text('email',null,['class' => 'form-control','type'=>'email','id'=>'inputEmail','placeholder'=>'Email adresa','required'=> 'autofocus']) }}
                <!--<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>-->
                  {{ Form::text('password',null,['class' => 'form-control','type'=>'password','id'=>'inputPassword','placeholder'=>'Password','required']) }}
                <div id="remember" class="checkbox">
                    <label>
                      <!--  <input type="checkbox" value="remember-me"> Remember me-->
                        {{ Form::checkbox('check', 'remember-me') }}
                        Zapamti me
                    </label>
                </div>

                  {{Form::submit('Submitaj',array('class' => 'btn btn-lg btn-primary btn-block btn-signin'))}}
          <!--  </form><!-- /form -->
              {!! Form::close() !!}
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <p>Niste clan??</p>
            <a href="{{route('register')}}" class="btn btn-lg btn-primary btn-block btn-signin"> Uclanite se</a>
        </div><!-- /card-container -->
    </div><!-- /container -->




  <!--    {{Form::label('title', 'Naslov') }}
      {{ Form::text('title',null, array('class' => 'form-control')) }}

      {{Form::label('slug', 'Naslov') }}
      {{ Form::text('slug',null, array('class' => 'form-control')) }}


      {{Form::label('tijelo','Tijelo Bloga:')}}
      {{Form::textarea('tijelo',null, array('class' => 'form-control')) }}

      {{Form::submit('Submitaj',array('class' => 'btn btn-success btn-lg btn-block ','style'=>'margin-top:20px;'))}}
-->
