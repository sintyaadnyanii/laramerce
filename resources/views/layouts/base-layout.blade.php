<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('base_head')
    <link rel="stylesheet" href="{{ asset('dist/css/_app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
</head>

<body>
    @yield('base_body')

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @yield('base_script')
    <script src="https://cdn.tiny.cloud/1/1cwcv7fb2ka7wchr47abco6ychaqqw5fpjdp5ssh1ea863qp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    </script>
</body>

</html>
