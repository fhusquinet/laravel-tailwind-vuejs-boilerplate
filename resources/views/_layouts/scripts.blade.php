<script type="text/javascript">

    window.base_url = '{{ url('/') }}';
    
    window.alerts = [];
    
    @if ( session()->has('message-error') ) 
        window.alerts.push({type: 'error', message: '{{ session()->get('message-error') }}'});
    @endif
    
    @if ( session()->has('message-success') ) 
        window.alerts.push({type: 'success', message: '{{ session()->get('message-success') }}'});
    @endif
    
    @if ( session()->has('message-warning') ) 
        window.alerts.push({type: 'warning', message: '{{ session()->get('message-warning') }}'});
    @endif
    
    @if ( session()->has('message-info') ) 
        window.alerts.push({type: 'info', message: '{{ session()->get('message-info') }}'});
    @endif
    
    @if ( session()->has('message-show') ) 
        window.alerts.push({type: 'show', message: '{{ session()->get('message-show') }}'});
    @endif

    @stack ('inline-scripts')

</script>

<script src='https://cdn.polyfill.io/v2/polyfill.min.js'></script>
<script src="{{ asset(mix('js/manifest.js')) }}" type="text/javascript"></script>
@stack ('preappscripts')
<script src="{{ asset(mix('js/vendor.js')) }}" type="text/javascript"></script>
<script src="{{ asset(mix('js/app.js')) }}" type="text/javascript"></script>