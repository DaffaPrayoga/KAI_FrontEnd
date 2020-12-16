<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.matchHeight.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.material.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>

<script type="text/javascript">
    $('.modal').modal();

    $('.dropdown-button').dropdown({
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
        }
    );

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        format: 'yyyy/mm/dd',
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: true, // Close upon selecting a date,
        container: undefined, // ex. 'body' will append picker to body
    });
    $('.datepicker').on('mousedown', function (event) {
        event.preventDefault();
    });
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button,
        container: undefined, // ex. 'body' will append picker to body
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function () {
        } //Function for after opening timepicker
    });
    $('.timepicker').on('mousedown', function (event) {
        event.preventDefault();
    });
    $(document).ready(function () {
        $('select').material_select();
    });

</script>
