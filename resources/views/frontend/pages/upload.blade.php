@extends('frontend.layouts.app')
@section('content')
    <div class="header text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="mb-4">Upload</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-default" href="{{ route('home') }}">Home
                                &nbsp; &nbsp; /</a></li>
                        <li class="list-inline-item text-primary">File Upload</li>
                    </ul>
                </div>
            </div>
        </div>

        <svg class="header-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="header-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
                stroke-width="2" />
        </svg>
    </div>
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
                                        <input class="form-control shadow-none" type="text" placeholder="Title"
                                            required>
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
                                        <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
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
