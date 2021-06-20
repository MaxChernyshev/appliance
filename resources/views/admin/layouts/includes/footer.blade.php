<footer class="main-footer" style="position: fixed; bottom: 0; width: 100%;">
{{--    <strong>Copyright &copy; {{ date('Y') }} <a href="https://maksimchernyshev.com" target="_blank">Maksim Chernyshev</a></strong> All rights reserved.--}}
</footer>


<script src="{{ asset('assets/admin/js/admin.min.js')}}"></script>
<script>
    $('.nav-sidebar a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if (link == location) {
            $(this).addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
        }
    });

    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<script src="{{ asset('assets/admin/ckeditor5/build/ckeditor.js')}}"></script>
<script src="{{ asset('assets/admin/ckfinder/ckfinder.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery/jquery.min.js')}}"></script>

<script>ClassicEditor
        .create(document.querySelector('#content_1'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_1_1'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_2'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_2_1'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_3'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_3_1'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_4'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>
<script>ClassicEditor
        .create(document.querySelector('#content_4_1'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontFamily',
                    'fontSize',
                    'alignment',
                    'fontColor',
                    'fontBackgroundColor',
                    'removeFormat',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'htmlEmbed',
                    'code',
                    'codeBlock',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: mfu151ve8ow9-xrtvimlxpyhi' );
            console.error( error );
        } );
</script>

</body>
</html>
