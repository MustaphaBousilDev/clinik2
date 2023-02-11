<div class="dash-content" style="height: 100vh;">
    <div class="add__form">

            <div class="top__">
                <div class="quantity">
                    <div class="pro">
                        <label class="label__" for="">First name</label>
                        <input class="input__" type="text" name="first_name"   wire:model="first_name" disabled>
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Last name</label>
                        <input class="input__" type="text" name="second_name"  wire:model="second_name" disabled>
                    </div>
                </div>
                <div class="pro__unity">
                    <div class="pro">
                        <label class="label__" for="">Email adress</label>
                        <input class="input__" type="email" name="email" wire:model="email" disabled>
                    </div>
                    <div class="pro">
                        <label class="label__" for="">Post</label>
                        <select class="select__" name="role" wire:model="role" disabled>
                            <option selected disabled ></option>
                            <option value="ADM">admin</option>
                            <option value="EMP">employee</option>
                            <option value="USR">user</option>
                        </select>
                    </div>
                </div>
                <div class="save__bottom">
                    <a href="{{route('admin.employee.edit',$employee->id)}}">
                        <button class="save">Edit</button>
                    </a>
                    <a href="{{route('admin.employee')}}">
                        <button class="cancel" type="button">back</button>
                    </a>

                </div>
            </div>
    </div>
</div>
