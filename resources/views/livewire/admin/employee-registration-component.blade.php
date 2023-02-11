@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-success">
            {{ $error }}
        </div>
    @endforeach
@endif

<div class="dash-content">
            <!-- <div class="products" style="">
                <input type="checkbox">
                <div class="content__product" style="width: 70%;padding-right:20px ;">
                    <div>
                        <img src="asset('imgs/admin/db_cl-05.png')">
                        <p>Product A</p>
                    </div>
                    <div style="justify-content: flex-end;">
                        <p>real time stock (gr)</p>
                    </div>
                </div>
                <div class="actions">
                    <i class="bi bi-gear-fill"></i>
                    <i class="bi bi-trash3-fill"></i>
                    <i class="bi bi-eye"></i>
                    <i class="bi bi-printer"></i>
                </div>
            </div> -->
            @if (session('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
            @foreach($employees as $employee)
                <div class="products" style="">
                        <input type="checkbox">
                        <div class="content__product" style="width: 70%;padding-right:20px ;">
                            <div>
                                <img src="asset('imgs/admin/db_cl-05.png')">
                                <p>{{$employee->name}}</p>
                            </div>
                            <div style="justify-content: flex-end;">
                                <p>{{$employee->utype}}</p>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="{{ route('admin.employee.edit', $employee->id) }}" class="text-light text-decoration-none"><i class="bi bi-gear-fill"></i></a>
                            <form action="{{ route('admin.employee.destroy', $employee->id) }}" method="post" >
                                @csrf
                                @method('delete')
                                <button type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                            <a href="{{ route('admin.employee.view', $employee->id) }}" class="text-light text-decoration-none"><i class="bi bi-eye"></i></a>

                            <i class="bi bi-printer"></i>
                        </div>
                        </div>
    @endforeach
                    <a href="{{route('admin.employe.add')}}" class="btn__add">Add New</a>
                </div>

