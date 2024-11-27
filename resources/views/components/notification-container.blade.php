<script>
    const toasts = new Toasts({
        offsetX: 20, // 20px
        offsetY: 20, // 20px
        gap: 20, // The gap size in pixels between toasts
        width: 350, // 300px
        timing: 'ease', // See list of available CSS transition timings
        duration: '.5s', // Transition duration
        dimOld: false, // Dim old notifications while the newest notification stays highlighted
        position: 'top-right' // top-left | top-center | top-right | bottom-left | bottom-center | bottom-right
    });

    @foreach (session()->get('laravel-beasty-notifications') as $notif)
        toasts.push({
            title: 'Error Toast',
            content: 'My notification description.',
            style: 'error',
            dismissAfter: '3s'
        });
    @endforeach
</script>
