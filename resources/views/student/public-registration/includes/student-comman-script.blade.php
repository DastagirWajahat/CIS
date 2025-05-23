<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function () {
        //date
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; // January is 0!

        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        var today = yyyy + '-' + mm + '-' + dd;
        $("#reg_date").val(today);
        $(".reg_date").val(today);
        /*enddate*/

        document.getElementById('guardian-detail').style.display = 'block';
    });

    /*Change Field Value on Capital Letter When Keyup*/
    $(function () {
        $('.upper').keyup(function () {
            this.value = this.value.toUpperCase();
        });
    });
    /*end capital function*/

    function loadSemesters(facultySelect) {
    var facultyId = facultySelect.value;
    console.log('Selected Faculty ID:', facultyId);

    // Use the full path explicitly
    $.ajax({
        url: '/col/public/get-semesters/' + facultyId,
        method: 'GET',
        dataType: 'json',  // Explicitly specify JSON
        success: function(response) {
            console.log('AJAX Response:', response);
            var semesterSelect = document.querySelector('.semester');
            semesterSelect.innerHTML = '';  // Clear existing options

            if (response.semesters && response.semesters.length > 0) {
                response.semesters.forEach(function(valueObj) {
                    var option = document.createElement('option');
                    option.value = valueObj.id;
                    option.text = valueObj.semester;
                    semesterSelect.add(option);
                });
            } else {
                console.log('No semesters found');
                // Optionally add a default "No semesters" option
                var option = document.createElement('option');
                option.text = 'No semesters available';
                semesterSelect.add(option);
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", xhr.responseText);
            console.error("Status:", status);
            console.error("Error:", error);
        }
    });
}



    /*copy Father Detail on Guardian Detail*//*guardian_is*/
    function FatherAsGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        if (f.guardian_is.value == 'father_as_guardian') {
            f.guardian_first_name.value = f.father_first_name.value;
            f.guardian_middle_name.value = f.father_middle_name.value;
            f.guardian_last_name.value = f.father_last_name.value;
            f.guardian_relation.value = "FATHER";
            f.mother_as_guardian.checked == false;
            f.other_guardian.checked == false;
        }
    }

    /*copy Mother Detail on Guardian Detail*/
    function MotherAsGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        if (f.guardian_is.value == 'mother_as_guardian') {
            f.guardian_first_name.value = f.mother_first_name.value;
            f.guardian_middle_name.value = f.mother_middle_name.value;
            f.guardian_last_name.value = f.mother_last_name.value;
            f.guardian_relation.value = "MOTHER";
            f.father_as_guardian.checked == false;
            f.other_guardian.checked == false;
        }
    }

    /*Blank Guardian Detail to Enter New*/
    function OtherGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        if (f.guardian_is.value == 'other_guardian') {
            f.guardian_first_name.value = "";
            f.guardian_middle_name.value = "";
            f.guardian_last_name.value = "";
            f.guardian_mobile_1.value = "";
            f.guardian_relation.value = "";
            f.father_as_guardian.checked == false;
            f.mother_as_guardian.checked == false;
        }
    }

    if (!ace.vars['touch']) {
        $('.chosen-select').chosen({allow_single_deselect: true});
        //resize the chosen on window resize

        $(window)
            .off('resize.chosen')
            .on('resize.chosen', function () {
                $('.chosen-select').each(function () {
                    var $this = $(this);
                    $this.next().css({'width': $this.parent().width()});
                })
            }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
            if (event_name != 'sidebar_collapsed') return;
            $('.chosen-select').each(function () {
                var $this = $(this);
                $this.next().css({'width': $this.parent().width()});
            })
        });
    }

</script>
