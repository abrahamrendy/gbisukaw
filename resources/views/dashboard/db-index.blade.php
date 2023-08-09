@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Quill', true)

@section('content_header')
    <h1>Index Page</h1>
@stop

@section('content')

    <!-- MAIN BANNER -->
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Main Banner
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="content-header">
                <div class="container-fluid">
                    <h4>Main Banner</h4>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <form runat="server">
                        <div class="col-md-12">
                            <input accept="image/*" type='file' id="imgInp" />
                        </div>
                        <div class="col-md-6">
                            <img width="100%" id="blah" src="#" alt="your image" />
                        </div>
                    </form>
                    <br>
                    <div class="col-md-12">
                        <div id="editor-container" class="wyswyg-editor" style="background-color: #fff;"></div>
                    </div>
                    <br>
                    <div class="content-header">
                        <h4>Cards</h4>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <label for="main-banner-card-1">Title</label>
                            <input type="text" class="form-control" id="main-banner-card-1" placeholder="asdsf">
                            <label for="main-banner-card-1-content">Content</label>
                            <textarea class="form-control" id="main-banner-card-1-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                        <div class="col-md-4">
                            <label for="main-banner-card-2">Title</label>
                            <input type="text" class="form-control" id="main-banner-card-2" placeholder="asdsf">
                            <label for="main-banner-card-2-content">Content</label>
                            <textarea class="form-control" id="main-banner-card-2-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                        <div class="col-md-4">
                            <label for="main-banner-card-3">Title</label>
                            <input type="text" class="form-control" id="main-banner-card-3" placeholder="asdsf">
                            <label for="main-banner-card-3-content">Content</label>
                            <textarea class="form-control" id="main-banner-card-3-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PASTOR MESSAGE -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Pastor Message
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="content-header">
                <div class="container-fluid">
                    <h4>Pastor Message</h4>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div id="pastor-message" class="wyswyg-editor" style="background-color: #fff;"></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ONLINE SERVICES -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Online Services
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="content-header">
                <div class="container-fluid">
                    <h4>Online Services</h4>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <label for="online-services-1">Title</label>
                            <input type="text" class="form-control" id="online-services-1" placeholder="asdsf">
                            <label for="online-services-1-content">Content</label>
                            <textarea class="form-control" id="online-services-1-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                        <div class="col-md-4">
                            <label for="online-services-2">Title</label>
                            <input type="text" class="form-control" id="online-services-2" placeholder="asdsf">
                            <label for="online-services-2-content">Content</label>
                            <textarea class="form-control" id="online-services-2-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                        <div class="col-md-4">
                            <label for="online-services-3">Title</label>
                            <input type="text" class="form-control" id="online-services-3" placeholder="asdsf">
                            <label for="online-services-3-content">Content</label>
                            <textarea class="form-control" id="online-services-3-content" placeholder="asdsf" rows="3"></textarea> 
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <br>

    

    <br>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        var main_banner = new Quill('#editor-container', {
            modules: {
              toolbar: [
                      [{ 'font': [] }, { 'size': [] }],
                      [ 'bold', 'italic', 'underline', 'strike' ],
                      [{ 'color': [] }, { 'background': [] }],
                      [{ 'script': 'super' }, { 'script': 'sub' }],
                      [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
                      [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
                      [ 'direction', { 'align': [] }],
                      [ 'link', 'image', 'video', 'formula' ],
                      [ 'clean' ]
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        var pastor_message = new Quill('#pastor-message', {
            modules: {
              toolbar: [
                      [{ 'font': [] }, { 'size': [] }],
                      [ 'bold', 'italic', 'underline', 'strike' ],
                      [{ 'color': [] }, { 'background': [] }],
                      [{ 'script': 'super' }, { 'script': 'sub' }],
                      [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
                      [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
                      [ 'direction', { 'align': [] }],
                      [ 'link', 'image', 'video', 'formula' ],
                      [ 'clean' ]
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });
        
        imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
            blah.src = URL.createObjectURL(file)
          }
        }
    </script>
@stop