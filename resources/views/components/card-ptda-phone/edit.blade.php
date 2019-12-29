@extends('admin.master.component.standard')

{{-- CREAMOS UN PARENT COMPONENT CON SUPERESTRUCTURA Y VARIABLE DE PLAIN PARA CASOS EXTREMOS? --}}
@section('componenthtml')

    <div class="row justify-content-center">
        <div class="col-xl-6">

            <div class="form-group">
                <div class="form-material">
                    <input type="hidden" class="field" name="image" data-name="image" value="{{$fields->image ?? ''}}">
                    <label for="image">Imagen</label>
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
                    <textarea class="form-control field" name="description" rows="2" placeholder="">{{ $fields->description ?? '' }}</textarea>
                    <label for="description">Subtítulo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-material">
                    <input type="text" class="form-control field" name="cta" placeholder=""  value="{{ $fields->cta ?? '' }}">
                    <label for="cta">Etiqueta del Link</label>
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
                        {'image': 'max:102400|dimensions:min_width=600,min_height=280'}
                    ],
                    messages: [
                        {'image.image': 'El archivo seleccionado no es una imagen.'},
                        {'image.mimes': 'La imagen debe ser jpeg,png,jpg,gif o svg.'},
                        {'image.dimensions': 'La imagen debe tener al menos 600px de ancho X 280px de alto.'},
                        {'image.max': 'La imagen debe pesar 10MB como máximo.'}
                    ]
                }
            }
        });

        $('textarea[name="title"], textarea[name="description"]').summernote({
            lang: 'es-ES',
            placeholder: '',
            toolbar: [
                ['insert', ['link', 'table', 'hr']],
                ['para', ['style', 'ul', 'ol', 'paragraph']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                //['fontsize', ['fontsize']],
                ['color', ['color']],
                ['misc', ['undo', 'redo', 'codeview']],
                // ['height', ['height']]
            ],
            styleTags: ['p', 'blockquote', 'h2'],
            //colors: [["#464646", "#001a33"]]
        });

        $('input[name="link"]').formLink({
            service: {
                search: '{{route('admin.folder.search')}}',
                getbyid: '{{route('admin.folder.getby.id')}}'
            }
        });


    });

</script>


@endsection
