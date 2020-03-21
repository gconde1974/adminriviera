<!-- Javascript  depurando js-->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>

<script src="{{ asset('assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script> <!-- Select2 Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $(function() {
        // validation needs name of the element
        // $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();

        //notificaciones
        @if(session('status'))
            $(function() {
                toastr.options.closeButton = true;
                $context = '{{ session('context') }}';
                $message = '{{ session('status') }}';
                $position = '{{ session('position') ? session('position') : '' }}';

                if ($context === '') {
                    $context = 'info';
                }

                if ($position === '') {
                    $positionClass = 'toast-top-center';
                } else {
                    $positionClass = 'toast-' + $position;
                }

                toastr.remove();
                toastr[$context]($message, '', {
                    positionClass: $positionClass
                });
            });
        @endif
    });
</script>
