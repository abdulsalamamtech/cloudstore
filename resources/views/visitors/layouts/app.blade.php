{{-- THIS APP PAGE YIELD VISITORS (USER AND QUEST) CONTENT --}}


{{-- Header --}}
@include('visitors.partials.header')

{{-- TopNav --}}
@include('visitors.partials.topbar')

{{-- NavBar --}}
@include('visitors.partials.navbar')


{{-- Alertify Js --}}
<script>
    alertify.set('notifier','position', 'top-right');
</script>


{{-- For Success Messages --}}
@if (session('success'))
    <script> alertify.success( @json(session('success', 'Good!')) );</script>
@endif

{{-- For Error Messages --}}
@if (session('error'))
    <script> alertify.error( @json(session('error', 'There was an error!')) );</script>
@endif



{{-- Yield Content --}}
@yield('content')



{{-- Footer --}}
@include('visitors.partials.footer')
