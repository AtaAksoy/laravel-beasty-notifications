<div>
    <link rel="stylesheet" href="{{ asset('ataaaksoy/laravel-beasty-notifications/css/notification.css') }}">
    <script src="{{ asset('ataaaksoy/laravel-beasty-notifications/js/notification.js') }}"></script>

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
    
        @foreach (session()->get('laravel-beasty-notifications', []) as $notif)
            toasts.push({
                title: '{{ $notif->title }}',
                content: '{{ $notif->body }}',
                style: '{{ $notif->type }}',
                dismissAfter: '3s'
            });

        @endforeach


        @if (session()->has('laravel-beasty-notifications'))
            @php
                session()->forget('laravel-beasty-notifications');
            @endphp
        @endif
    </script>
</div>

