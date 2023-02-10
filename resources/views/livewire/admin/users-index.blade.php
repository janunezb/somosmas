<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese Nombre o Documento">
        </div>
        <div class="card-header">
            <a class="btn btn-secondary" href="admin.create">Agregar Colaborador</a>
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Foto</th>
                            <th>Fecha Nacimiento</th>
                            <th>Fecha Ingreso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->documento}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->cargo}}</td>
                                <td> 
                                    <div >
                                    @if (is_file('images/fotos/'.$user->foto))
                                     <img src="../images/fotos/{{$user->foto}}" alt="" style="width:60px;height:60px border-radius:50%;"> 
                                    @else
                                    <img src="{{asset('images/fotonone.jpeg')}}" class="usuario" alt="" style="width:60px;height:60px border-radius:50%;">
                                    @endif
                                    </div>
                                </td>
                                <td>{{$user->fecha_nacimiento}}</td>
                                <td>{{$user->fecha_ingreso}}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                                </td>
                            </tr>
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
