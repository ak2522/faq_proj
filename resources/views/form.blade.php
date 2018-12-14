@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/" method="post" id="form">
                    {{ csrf_field() }}
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">

                    <label for="prefix" style="margin-top:10px;">prefix:</label>
                    <select name="prefix" class="form-control">
                        <option value="Mr.">Mr.</option>
                        <option value="Miss.">Miss.</option>
                        <option value="Mrs.">Mrs.</option>
                    </select>

                    <div class="g-recaptcha" data-sitekey="6LcmYoEUAAAAANnIp0Rh_xvDEw6FLXSQgkx0cRs3"></div>

                </form>
            </div>
        </div>
    </div>

@endsection