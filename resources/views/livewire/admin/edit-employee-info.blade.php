<div class="dash-content" style="height: 100vh;">
    <div class="add__form">
        <form wire:submit.prevent="updateInfo">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="error">{{$error}}</p>
                @endforeach
            @endif
            <div class="top__">
                <div class="quantity">
                    <div class="pro">
                        <label class="label__" for="">First name</label>
                        <input class="input__" type="text" name="first_name"   wire:model="first_name">
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Last name</label>
                        <input class="input__" type="text" name="second_name"  wire:model="second_name">
                    </div>
                </div>
                <div class="pro__unity">
                    <div class="pro">
                        <label class="label__" for="">Email adress</label>
                        <input class="input__" type="email" name="email" wire:model="email">
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Post</label>
                        <select class="select__" name="role" wire:model="role">
                            <option selected disabled ></option>
                            <option value="ADM">admin</option>
                            <option value="EMP">employee</option>
                            <option value="USR">user</option>
                        </select>
                    </div>
                </div>
                <div class="quantity">
                    <div class="pro">
                        <label class="label__" for="">new Password</label>
                        <input class="input__" type="text" name="newPassword" wire:model="new_password">
                    </div>
                    <div class="pro">
                        <label class="label__" for="">new Password</label>
                        <input class="input__" type="text" name="newPasswordConfirm" wire:model="confirm_password">
                    </div>
                </div>
                <div class="save__bottom">
                    <button class="save" type="submit">Save changes</button>
                    <a href="{{route('admin.employee')}}">
                        <button class="cancel"  type="button">Cancel</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
