# https://www.tinymce.com/docs/configure/integration-and-setup/
if @tinymce and tinymce.init
  tinymce.init
    selector: '.implement-html-editor-as-basic'
    toolbar: 'undo redo'
    menubar: false
  tinymce.init
    selector: '.implement-html-editor-as-middle'
    plugins: [
      'advlist autolink lists link image charmap print preview anchor'
      'searchreplace visualblocks code fullscreen'
      'insertdatetime media table contextmenu paste code'
    ]
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
