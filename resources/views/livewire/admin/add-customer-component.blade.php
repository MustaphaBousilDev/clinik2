<div class="dash-content" >
            <div class="add__form">
                <form action="">
                    <div class="top__">
                        <div class="pro__unity">
                            <div class="pro">
                                <label class="label__" for="">Naam</label>
                                <input class="input__" type="text">
                            </div>
                            <div class="pro">
                                <label class="label__" for="">Voornam</label>
                                <input class="input__" type="text">
                            </div>
                        </div>
                        <div class="pro__unity">
                            <div class="pro">
                                <label class="label__" for="">Geboortedarum</label>
                                <input class="input__" type="text">
                            </div>
                            <div class="pro">
                                <label class="label__" for="">Adres</label>
                                <input class="input__" type="text">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p class="small__header">Traitement list</p>
                            </div>
                            <div class="products">
                                
                                <div class="content__product flex__between">
                                    <div>
                                        <img src="{{asset('imgs/admin/db_cl-09.png')}}">
                                        <p style="width:116px;">traitement name</p>
                                    </div>
                                    <div>
                                        <p>Choice</p>
                                    </div>
                                    <div>
                                        <p>date & time</p>
                                    </div>
                                    <div>
                                        <p>price</p>
                                    </div>
                                    <div>
                                        <p>processing</p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a style="text-decoration:none" href="{{route('admin.customer.management.edit')}}"><i class="bi bi-gear-fill"></i></a>
                                    <i class="bi bi-trash3-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="" style="display:flex;justify-content:space-between">
                            <div>
                                <a href="{{route('admin.invoice')}}" 
                                style="font-size:22px;display:inline-block;color:#fff;background-color:rgb(59, 177, 245);padding:30px;width:40px;height:40px;display:flex;justify-content:center;align-items:center;border-radius:50%;text-decoration:none">
                                +
                                </a>
                            </div>
                            <div>
                            <button style="border:none;outline:none;padding:12px 50px;border-radius:30px;background-color:rgb(59, 177, 245);color:#fff;cursor:pointer;" 
                                class="save" type="submit">Save</button>
                            <a href="">
                                <a href="" class="cancel" style="border:none;outline:none;padding:10px 50px;border-radius:30px;background-color:#dddada;color:#000;cursor:pointer;text-decoration:none;">
                                    Cancel
                                </a>
                            </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
