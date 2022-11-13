@extends('frontend.layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="py-4">
    <section class="section">
        <div class="container">

            <h3 class="text-center">Upload Your File</h3>
            <div id="drop_zone">
                <p>Drop file here</p>
                <p>or</p>
                <p><button type="button" id="btn_file_pick" class="btn btn-primary"><span
                            class="glyphicon glyphicon-folder-open"></span> Select File</button></p>
                <p id="file_info"></p>
                <a href="{{ url('/upload') }}">
                    <p><button type="button" id="btn_file_pick" class="btn btn-primary"><span
                                class="glyphicon glyphicon-folder-open"></span> Delete</button></p>
                    <p id="file_info"></p>
                </a>


                <div class="row justify-content-center">
                    <div>

                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="text" placeholder="Title" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="text" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="email" placeholder="Email">
                                    <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                                </div>
                                <div class="form-group col-md-12">
                                    <h5 class="mb-4">Description</h5>
                                    <textarea class="form-control shadow-none" name="comment" rows="7"
                                        required></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <p><button type="button" id="btn_upload" class="btn btn-primary"><span
                            class="glyphicon glyphicon-arrow-up"></span> Upload Your File</button></p>


                <input type="file" id="selectfile">
                <p id="message_info"></p>
            </div>
            <script>
            var fileobj;
            $(document).ready(function() {
                $("#drop_zone").on("dragover", function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    return false;
                });
                $("#drop_zone").on("drop", function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    fileobj = event.originalEvent.dataTransfer.files[0];
                    var fname = fileobj.name;
                    var fsize = fileobj.size;
                    if (fname.length > 0) {
                        document.getElementById('file_info').innerHTML = "File name : " + fname +
                            ' <br>File size : ' + bytesToSize(fsize);
                    }
                    document.getElementById('selectfile').files[0] = fileobj;
                    document.getElementById('btn_upload').style.display = "inline";
                });
                $('#btn_file_pick').click(function() {
                    /*normal file pick*/
                    document.getElementById('selectfile').click();
                    document.getElementById('selectfile').onchange = function() {
                        fileobj = document.getElementById('selectfile').files[0];
                        var fname = fileobj.name;
                        var fsize = fileobj.size;
                        if (fname.length > 0) {
                            document.getElementById('file_info').innerHTML = "File name : " +
                                fname +
                                ' <br>File size : ' + bytesToSize(fsize);
                        }
                        document.getElementById('btn_upload').style.display = "inline";

                    };
                });
                $

                $('#btn_upload').click(function() {
                    if (fileobj == "" || fileobj == null) {
                        alert("Please select a file");
                        return false;
                    } else {
                        ajax_file_upload(fileobj);
                    }
                });
            });

            function ajax_file_upload(file_obj) {
                if (file_obj != undefined) {
                    var form_data = new FormData();
                    form_data.append('upload_file', file_obj);
                    $.ajax({
                        type: 'POST',
                        url: 'upload.php',
                        contentType: false,
                        processData: false,
                        data: form_data,
                        beforeSend: function(response) {
                            $('#message_info').html("Uploading your file, please wait...");
                        },
                        success: function(response) {
                            $('#message_info').html(response);
                            alert(response);
                            $('#selectfile').val('');
                        }
                    });
                }
            }

            function bytesToSize(bytes) {
                var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                if (bytes == 0) return '0 Byte';
                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
            }
            </script>
        </div>
</div>
</div>
</section>
@endsection