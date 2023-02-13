<div class="dash-content">
            <div class="add__form">
                <form wire:submit.prevent="updateproduct">
                    
                    <div class="top__">
                        <div class="pro__unity">
                            <div class="pro">
                                <label class="label__" for="">Product name</label>
                                <input class="input__" type="text" name="name" wire:model="name"  >
                            </div>
                            <div class="pro">
                                <label class="label__" for="">Unity</label>
                                <select class="select__" wire:model="unity"> 
                                    <option value="" >--selected</option> 
                                    <option value="gr">gr</option>
                                    <option value="ml">ml</option>
                                </select>
                            </div>
                        </div>
                        <div class="quantity" >
                            
                            <div class="pro">
                                <label class="label__" for="">Quantity</label>
                                <input class="input__" type="text" wire:model="quantity">
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
