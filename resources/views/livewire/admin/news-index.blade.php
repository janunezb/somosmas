<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese Nombre o Documento">
        </div>
        <div class="card-header">
            <a class="btn btn-enviar" href="{{route('admin.news.create')}}">Agregar Noticia</a>
            {{-- <button type="button" class="btn btn-enviar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Noticia modal @mdo</button>
            <button type="button" class="btn btn-enviar" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </button> --}}
            @livewire('admin.create-new')
        </div>
        @if ($news->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            {{-- <th>Contenido</th> --}}
                            <th>Adjunto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                            @if ($new->estado == 0)
                                <tr class="p-3 mb-2 bg-warning text-dark">
                                    <td>{{$new->titulo}}</td>
                                    {{-- <td>{{$new->contenido}}</td> --}}
                                    <td>{{$new->adjunto}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.news.edit',$new)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.news.show',$new)}}" >
                                            @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Habilitar</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr >
                                    <td>{{$new->titulo}}</td>
                                    {{-- <td>{{$new->contenido}}</td> --}}
                                    <td>{{$new->adjunto}}</td>
                                    <td width="10px">
                                        <a class="btn btn-outline-primary btn-sm" href="{{route('admin.news.edit',$new)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.news.show',$new)}}" >
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
                {{$news->render()}}
            </div>
        @else
            <strong>No hay registros</strong>
        @endif
    </div>
    {{-- //modal --}}


    {{-- //fin modal --}}

</div>
