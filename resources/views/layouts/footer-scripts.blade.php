<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
<script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Page JS -->
<script src="{{ asset('assets/js/ui-navbar.js') }}"></script>
<!-- Page JS -->
<script src="{{ asset('assets/js/charts-apex.js') }}"></script>
<script src="{{ asset('assets/js/cards-advance.js') }}"></script>
<script src="{{ asset('assets/vendor/js/chart.js') }}"></script>
<script src="{{ asset('assets/js/dashboards-crm.js') }}"></script>



@yield('js')



<!-- notification reload -->
<script>
    setInterval(function() {
        $("#notifications_count").load(window.location.href + " #notifications_count");
        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
    }, 10000); //reload every 10 seconds
</script>


<!-- deleteSelected -->
<script type="text/javascript">
    //when check all
    function CheckAll(className, elem) {
        var elements = document.getElementsByClassName(className);
        var l = elements.length;
        if (elem.checked) {
            for (var i = 0; i < l; i++) {
                elements[i].checked = true;
            }
        } else {
            for (var i = 0; i < l; i++) {
                elements[i].checked = false;
            }
        }
    }

    //when check show or hide button
    function showBtnDeleteSelected()
    {
        var selected = new Array();
        $("#example1 input[type=checkbox]:checked").each(function() {
            selected.push(this.value);
        });
        if (selected.length > 0) {
            document.getElementById('btn_delete_selected').style.display = "inline-block";
        } else {
            document.getElementById('btn_delete_selected').style.display = "none";
        }
    }

    //when click button show modal
    $(function() {
        $("#btn_delete_selected").click(function() {
            var selected = new Array();
            $("#example1 input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });
            if (selected.length > 0) {
                $('#delete_selected').modal('show')
                $('input[id="delete_selected_id"]').val(selected);
            }
        });
    });
</script>