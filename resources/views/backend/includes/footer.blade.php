
{{--jQuery--}}
<script src="{{ asset('assets/js/jQuery.min.js') }}"></script>
{{--Boostrap bundle --}}
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
{{-- Lord icon --}}
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
{{-- Select 2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- Toast js --}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
{{-- Material datepicker js --}}
<script src="{{ asset('assets/plugins/datepicker/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/materialDateTimePicker.js') }}"></script>
{{-- Dropify js --}}
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
{{-- Panelsnap js --}}
{{--App js--}}
<script src="{{ asset('assets/js/app.js') }}"></script>


{{--Utilities js--}}
@stack('script')

</body>
</html>
