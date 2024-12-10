@extends('front.layouts.app')

@section('content')


<section>
<div class="user-reg">
        <h2 class="user-head">Login</h2>
        <form action="#" method="post" id="loginForm">
            <div class="form-groupp">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-groupp">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-groupp">
                <button type="submit" class="btnn bgg-royal-blue">Login</button>
            </div>
        </form>
    </div>


</section>



@endsection