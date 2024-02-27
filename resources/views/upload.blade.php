<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>
    <hr>
    <form action="{{url('upload/save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>
            File: <input type="file" name="photo" id="" onchange="preview(event)">
        </p>
        <p>
            <img src="" id="img" alt="" width="150" >
        </p>
        <p>
            <button>Upload</button>
        </p>
        @if(Session::has('error'))
            <p>
                {{session('error')}}
            </p>
        @endif
        @if(Session::has('success'))
            <p>
                {{session('success')}}
            </p>
        @endif
    </form>
    <script>
        function preview(evt){
            let img = document.getElementById('img');
            img.src = URL.createObjectURL(evt.target.files[0]);
        }
    </script>
</body>
</html>