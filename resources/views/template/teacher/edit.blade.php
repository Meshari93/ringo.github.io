@include('layouts.inc.head')
@include('layouts.inc.header')
@include('layouts.inc.sidebar')


<div  class="content-wrapper">
<section class="content-header">
    <h3>
        <i class="fa fa-suitcase"></i> Teachers
    </h3>
</section>

<section class="content">

  <div class="btn-group pull-right no-print">
    <a  href="{{ url('/teachers') }}" class="floatRTL btn btn-danger btn-flat pull-right ">Cansel Edit</a>
  </div>

  <div class="box col-xs-6">
    <div class="box-header">
        <h3 class="box-title ">Add teacher</h3>
    </div>
    <div class="box-body ">
      <form role="form" class="form-horizontal " method="POST" action="update" >
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="fullName" class="col-sm-2 control-label ng-binding">Full name * </label>
          <div class="col-sm-6">
            <input id="name" type="text" name="fullName"  class="form-control" required="" value="{{ $teacherEdit->fullName}}" >
          </div>
        </div>
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
          <label for="username" class="col-sm-2 control-label ">Username * </label>
          <div class="col-sm-6">
            <input id="username" type="text" class="form-control" name="username"  required="" value="{{ $teacherEdit->username}}">
          </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-sm-2 control-label">Email address *</label>
          <div class="col-sm-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $teacherEdit->email}}" required="">
          </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-sm-2 control-label">Password *</label>
          <div class="col-sm-6">
            <input id="password" type="password" class="form-control" name="password" required=""  >
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <input type="hidden" name="rule" value="teacher">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary " >Update Teacher</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
</div>



@include('layouts.inc.footer')
