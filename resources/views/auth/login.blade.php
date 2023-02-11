
<x-app-layout>
<style>
    .bg{
        background-image: url("{{asset('db_cl-01.png')}}")
    }
</style>
<div class="bg" style="background-image:url('{{asset('imgs/admin/db_cl-01.png')}}')">
        <div class="form__">
            <div class="img__">
                <img src="./db_cl-02.png" alt="">
            </div>
            <form action="{{route('login')}}" method="POST" >
                @csrf 
                <div class="input__">
                    <label for="">Email</label>
                    <input name="email" type="email" placeholder="Email" :value="old('email')" required autofocus>
                </div>
                <div class="input__">
                    <label for="">Password</label>
                    <input name="password" type="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <a href="{{route('password.request')}}" style="color:gray;">Forgot password</a>
                <div class="submit_button">
                    <button name="login" >Login</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
