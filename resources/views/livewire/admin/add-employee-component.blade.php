<div class="dash-content" style="height: 100vh;">
    <div class="add__form">
        <form action="{{route("admin.employee.save")}}" method="POST">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="error">{{$error}}</p>
                @endforeach
            @endif
            <div class="top__">
                <div class="quantity">
                    <div class="pro">
                        <label class="label__" for="">First name</label>
                        <input class="input__" type="text" name="first_name" required>
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Last name</label>
                        <input class="input__" type="text" name="second_name" required>
                    </div>
                </div>
                <div class="pro__unity">
                    <div class="pro">
                        <label class="label__" for="">Email adress</label>
                        <input class="input__" type="email" name="email" required>
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Post</label>
                        <select class="select__" name="role" required>
                            <option selected disabled ></option>
                            <option value="EMP">employee</option>
                            <option value="USR">user</option>
                            <option value="ADM">admin</option>
                        </select>
                    </div>
                </div>
                <div class="quantity">
                    <div class="pro">
                        <label class="label__" for="" >Password</label>
                        <input class="input__" type="text" name="password" required minlength="8">
                    </div>
                </div>
                <div class="save__bottom">
                    <button class="save" type="submit">Save</button>
                    <a href="">
                        <button class="cancel">Cancel</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
