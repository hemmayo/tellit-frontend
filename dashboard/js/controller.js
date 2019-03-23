isJSON = (str) => {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

notifyError = (res) => {
    response = res.responseText,
        errorLevel = 'error'
    if (isJSON(res.responseText)) {
        res = JSON.parse(res.responseText)
        if (!res.valid) {
            response = res.message
            errorLevel = 'warn'
        }
    }
    if (!response) {
        response = res.statusText
    }

    errorLevel = (res.status === 202) ? 'success' : errorLevel

    $.notify(response, errorLevel);
}

/**
 * Create report controller
 */
$('#create-report-form').submit(function (e) {
    e.preventDefault();
    var data = $('#create-report-form').serialize();
    $.ajax({
            type: "POST",
            url: "controller.php?create_report",
            data: data,
            dataType: "json",
            beforeSend() {
                $('#create-report-form #button').text("Please wait...")
            }
        })
        .done((res) => {
            $.notify('Your report has been sent!', 'success');
            setTimeout(
                () => window.location.href = './', 1500
            )
        })
        .fail((res) => {
            notifyError(res)
        })
        .always(() => {
            $('#create-report-form #button').text("Create report")
        });
});

function objectifyForm(formArray) {//serialize data function

    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
      returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
  }


/**
 * Save NGO profile controller
 */
$('#ngo-profile-form').submit(function (e) {
    e.preventDefault();
    // var data = $('#ngo-profile-form').serialize();
    var values = $('input:checkbox:checked.selectedCategories').map(function () {
        return this.value;
      }).get();
    //   data = {
    //       cacNumber: 
    //   }
    sC = document.createElement('input')
    sC.value = values
    sC.setAttribute('name', 'categories')
    sC.setAttribute('hidden', 'hidden')
    $('#ngo-profile-form').append(sC)
    var data = $('#ngo-profile-form').serializeArray();
    data = objectifyForm(data)
    console.log(data)
    $.ajax({
            type: "POST",
            url: "controller.php?create_ngo_profile",
            data: {data},
            dataType: "json",
            beforeSend() {
                $('#ngo-profile-form #button').text("Please wait...")
            }
        })
        .done((res) => {
            $.notify('Your profile has been saved!', 'success');
            setTimeout(
                () => window.location.href = './', 1500
            )
        })
        .fail((res) => {
            notifyError(res)
        })
        .always(() => {
            $('#ngo-profile-form #button').text("Complete profile")
        });
});
