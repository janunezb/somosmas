<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese Nombre o Documento">
        </div>
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.users.create')}}">Agregar Colaborador</a>
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Correo</th>
                            <th>Fecha Nacimiento</th>
                            <th>Fecha Ingreso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @if ($user->estado == 0)  
                                <tr class="p-3 mb-2 bg-warning text-dark">
                                    <td>{{$user->documento}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->cargo}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->fecha_nacimiento}}</td>
                                    <td>{{$user->fecha_ingreso}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.users.show',$user)}}" >
                                            @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Habilitar</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr >
                                    <td>{{$user->documento}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->cargo}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->fecha_nacimiento}}</td>
                                    <td>{{$user->fecha_ingreso}}</td>
                                    <td width="10px">
                                        <a class="btn btn-outline-primary btn-sm" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.users.show',$user)}}" >
                                            @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Deshabilitar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->render()}}
            </div>
        @else
            <strong>No hay registros</strong>
        @endif
    </div>
</div>