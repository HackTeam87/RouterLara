<script src="{{asset('adm/js/jquery.min.js')}}"></script>

<script src="{{asset('adm/js/bootstrap.min.js')}}"></script>

<script src="{{asset('adm/js/adminlte.min.js')}}"></script>

<script src="{{asset('adm/js/ckeditor/ckeditor.js')}}"></script>

<script>
    $(function () {

        CKEDITOR.replace('editor1')

        $('.textarea').wysihtml5()
    })
</script>