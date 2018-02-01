
@if($flash = session('info'))

    <script type="text/javascript">
        new PNotify({
            title: 'Info!',
            text: '{{ $flash }}',
            type: 'info',
            styling: 'bootstrap3'
        });
    </script>

@endif

@if($flash = session('danger'))

    <script type="text/javascript">
        new PNotify({
            title: 'Error!',
            text: '{{ $flash }}',
            type: 'error',
            styling: 'bootstrap3'
        });
    </script>

@endif

@if($flash = session('success'))

    <script type="text/javascript">
        new PNotify({
            title: 'Success',
            text: '{{ $flash }}',
            type: 'success',
            styling: 'bootstrap3'
        });
    </script>

@endif