@extends('admin.master.component.standard')

{{-- CREAMOS UN PARENT COMPONENT CON SUPERESTRUCTURA Y VARIABLE DE PLAIN PARA CASOS EXTREMOS? --}}
@section('componenthtml')

    <div class="row justify-content-center">
        <div class="col-xl-6">

            <h4>Primer bloque</h4>

            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" class="field" name="image" data-name="image" value="{{$fields->image ?? ''}}">
                    <label for="image">Imagen</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="appendix" placeholder="" value="{{ $fields->appendix ?? '' }}">
                    <label for="appendix">Volanta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="title" rows="2" placeholder="">{{ $fields->title ?? '' }}</textarea>
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="subtitle" rows="2" placeholder="">{{ $fields->subtitle ?? '' }}</textarea>
                    <label for="subtitle">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" name="link" class="field" value="{{$fields->link ?? ''}}" />
                    <label for="link">Link</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <div class="css-control css-control-info css-checkbox">
                        <input class="css-control-input2 field" name="blank" type="checkbox" id="blank"  {{ gg($fields->blank)==1?'checked=""':'' }}  value="1">
                        <span class="css-control-indicator"></span> Abrir en pestaña nueva
                    </div>
                </div>
            </div>

            <h4>Segundo bloque</h4>

            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="appendix2" placeholder="" value="{{ $fields->appendix2 ?? '' }}">
                    <label for="appendix">Volanta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="title2" rows="2" placeholder="">{{ $fields->title2 ?? '' }}</textarea>
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="subtitle2" rows="2" placeholder="">{{ $fields->subtitle2 ?? '' }}</textarea>
                    <label for="subtitle">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" name="link2" class="field" value="{{$fields->link2 ?? ''}}" />
                    <label for="link2">Link</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <div class="css-control css-control-info css-checkbox">
                        <input class="css-control-input2 field" name="blank" type="checkbox" id="blank"  {{ gg($fields->blank)==1?'checked=""':'' }}  value="1">
                        <span class="css-control-indicator"></span> Abrir en pestaña nueva
                    </div>
                </div>
            </div>

            <h4>Tercer bloque</h4>

            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="appendix3" placeholder="" value="{{ $fields->appendix3 ?? '' }}">
                    <label for="appendix">Volanta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="title3" rows="2" placeholder="">{{ $fields->title3 ?? '' }}</textarea>
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="subtitle3" rows="2" placeholder="">{{ $fields->subtitle3 ?? '' }}</textarea>
                    <label for="subtitle">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" name="link3" class="field" value="{{$fields->link3 ?? ''}}" />
                    <label for="link3">Link</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <div class="css-control css-control-info css-checkbox">
                        <input class="css-control-input2 field" name="blank" type="checkbox" id="blank"  {{ gg($fields->blank)==1?'checked=""':'' }}  value="1">
                        <span class="css-control-indicator"></span> Abrir en pestaña nueva
                    </div>
                </div>
            </div>

            <h4>Cuarto bloque</h4>

            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="appendix4" placeholder="" value="{{ $fields->appendix4 ?? '' }}">
                    <label for="appendix">Volanta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="title4" rows="2" placeholder="">{{ $fields->title4 ?? '' }}</textarea>
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="subtitle4" rows="2" placeholder="">{{ $fields->subtitle4 ?? '' }}</textarea>
                    <label for="subtitle">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" name="link4" class="field" value="{{$fields->link4 ?? ''}}" />
                    <label for="link4">Link</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <div class="css-control css-control-info css-checkbox">
                        <input class="css-control-input2 field" name="blank" type="checkbox" id="blank"  {{ gg($fields->blank)==1?'checked=""':'' }}  value="1">
                        <span class="css-control-indicator"></span> Abrir en pestaña nueva
                    </div>
                </div>
            </div>

            <h4>Quinto bloque</h4>

            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="appendix5" placeholder="" value="{{ $fields->appendix5 ?? '' }}">
                    <label for="appendix">Volanta</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="title5" rows="2" placeholder="">{{ $fields->title5 ?? '' }}</textarea>
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <textarea class="form-control field" name="subtitle5" rows="2" placeholder="">{{ $fields->subtitle5 ?? '' }}</textarea>
                    <label for="subtitle">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" name="link5" class="field" value="{{$fields->link5 ?? ''}}" />
                    <label for="link5">Link</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <div class="css-control css-control-info css-checkbox">
                        <input class="css-control-input2 field" name="blank" type="checkbox" id="blank"  {{ gg($fields->blank)==1?'checked=""':'' }}  value="1">
                        <span class="css-control-indicator"></span> Abrir en pestaña nueva
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


@section('componentvalidations')

    <script type="text/javascript">

        component_rules = {
            'title': {
                required: true,
                minlength: 3
            },
            // 'slug': {
            //     required: true,
            //     pattern: /^[A-Za-z\d-.]+$/
            // },
            // 'layout': {
            //     required: true
            // }
        }

        component_messages = {
            'title': {
                required: 'Debe ingresar un título',
                minlength: 'El título debe tener al menos 3 caracteres'
            },
            // 'slug': {
            //     required: 'Debe ingresar un slug',
            //     pattern: 'El slug contiene caracteres inválidos'
            // },
            // 'layout': 'Debe seleccionar una plantilla'
        }

    </script>

@endsection


@section('componentjs')


<script type="text/javascript">

    $(document).ready(function() {

        $('input[data-name="image"]').formImage({
            service: {
                url: '{{ route('service.uploader.image.upload') }}',
                archive: 'contents',
                validation: {
                    rules: [
                        {'image': 'max:102400|dimensions:min_width=100,min_height=100'}
                    ],
                    messages: [
                        {'image.image': 'El archivo seleccionado no es una imagen.'},
                        {'image.mimes': 'La imagen debe ser jpeg,png,jpg,gif o svg.'},
                        {'image.dimensions': 'La imagen debe tener al menos 100px de ancho X 100px de alto.'},
                        {'image.max': 'La imagen debe pesar 10MB como máximo.'}
                    ]
                }
            }
        });

        $('input[name="link"],input[name="link2"],input[name="link3"],input[name="link4"],input[name="link5"]').formLink({
            service: {
                search: '{{route('admin.folder.search')}}',
                getbyid: '{{route('admin.folder.getby.id')}}'
            }
        });


    });

</script>


@endsection
