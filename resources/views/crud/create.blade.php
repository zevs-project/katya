<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="/style/crud/update.css">
    <link rel="stylesheet" href="/style/crud/common.css">
    <link rel="stylesheet" href="/style/fontawesome/all.css">
</head>

<body>

    <div class="wrapper" id="createWrapper">
        <h2 class="title">CRUD panel</h2>
        <a href="{{ url()->previous() }}">Попередня</a>
        <div id="readWrapper" class="update_wrapper">
            <div class="message"></div>
            <form enctype="multipart/form-data" class="update_form" id="createForm" action="/crud/create/{{ $table }}"
                method="post">
                {{ csrf_field() }}
                @foreach ($fields as $field)
                    @continue($field === "created_at" || $field === "updated_at" || $field === "id")
                    <fieldset class="field_section">
                        @if (array_key_exists($field, $relationships))
                            <span class="field_title">{{ $field }}</span>
                            <select class="row" name="{{ $field }}">
                                @foreach ($relationships[$field] as $values)
                                    @foreach ($values as $key => $value)
                                        @continue($key === 'id')
                                        <option value="{{ $values['id'] }}">{{ $value }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        @else
                            <span class="field_title">{{ $field }}</span>
                            <textarea id="{{ $field }}" name="{{ $field }}" class="row" type="text"
                                rows="5">{{ $field }}</textarea>
                        @endif
                    </fieldset>
                @endforeach
                <input type="submit" name="create" id="create">
            </form>
        </div>

        <div class="message_wrapper">
            <div class="message"></div>
            <div class="close">
                <span class="line right"></span>
                <span class="line left"></span>
            </div>
        </div>

    </div>

    @push('scripts')    
        <script src="/js/ckeditor.js"></script>
        <script src="/js/crud/create.js"></script>
        <script src="/js/crud/libs.js"></script>
        <script>

            let editor;
            ClassicEditor
                .create(document.querySelector('#content'), {
                    simpleUpload: {
                        uploadUrl: {
                            url: '/crud/uploadImage'
                        }
                    }
                })
                .then(newEditor => {
                    editor = newEditor;
                })
                .catch(error => {
                    console.error(error);
                });
            
        </script>
    @endpush

    @stack('scripts')
</body>

</html>
