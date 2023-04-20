<div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-personal"data-toggle="modal"data-target="#myModal{{ $registro->id }}">
    Actualizar
</button>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="myModal{{ $registro->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar formación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <div class="row justify-content-center">
                <div class=" justify-content-center ">
                    <div class="col-12">
                        <img class="d-block w-100" src="../storage/images/banners/{{ $registro->ruta }}" alt="">
                    </div>
                </div>
            </div> --}}
            {!!Form::model($registro,['wire:submit.prevent'=>'update','method'=>'put', 'enctype' => 'multipart/form-data'])!!}
                 <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-2">
                            {!! Form::label('orden', 'Posición') !!}
                            <select name="orden.{{ $registro->id }}"wire:click="$emit('EveOrden', {{ $registro->orden }}) "
                                class="form-control" style="width:4rem" >
                                @foreach ($orden as $o)
                                    @if ($o->orden == $registro->orden)
                                        <option value="{{ $o->orden }}" selected>{{ $o->orden }} </option>
                                    @else
                                        <option value="{{ $o->orden }}">{{ $o->orden }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-8">
                            {!! Form::label('titulo', 'Nombre') !!}
                            {!! Form::text('titulo' . $registro->id, $registro->titulo, ['class' => 'form-control','wire:model'=>'titulo',]) !!}
                            @error('titulo' . $registro->id)
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12" wire:ignore>
                            {!! Form::label('contenido', 'Contenido') !!}
                            {!! Form::textarea('cuerpo',null, ['class'=>
                                'form-control',
                                'wire:model'=>'cuerpo',
                                'placeholder'=>'Ingrese la noticia',
                                'id'=>"cuerpo$registro->id"]) !!}
                                @error('cuerpo')
                                    <span class="text-danger">{{$message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12" >
                            {!! Form::label('adjunto', 'Adjunto') !!}
                            {!! Form::text('adjunto' . $registro->id, $registro->adjunto, ['class' => 'form-control']) !!}
                            @error('adjunto' . $registro->id)
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    {{--
                    
                    --}}
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-gris" data-dismiss="modal">Close</button>
                    <button type="submit" formmethod="post" class="btn btn-personal">Guardar cambios</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

</div>