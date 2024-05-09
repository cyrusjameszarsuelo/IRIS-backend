var regCode = '';
var provCode = '';
var citymunCode = '';

$('#region').on('change', () => {
    
    regCode = $('#region').find(":selected").data('regcode');
    $('#province').find('option').not(':first').remove();
    $('#city').find('option').not(':first').remove();
    $('#barangay').find('option').not(':first').remove();

    $.ajax({
        url: '/get-province',
        type: 'GET',
        data: { regCode: regCode },
    })

        .done(function (data) {
            $.each(data, (index, value) => {
                $('#province').append(`<option value="${value.id}" data-provcode="${value.provCode}">${value.provDesc}</option>`);
            });
        })
        .fail(function (err) {
            console.log(err);
        });
});

$('#province').on('change', () => {
    provCode = $('#province').find(":selected").data('provcode');
    $('#city').find('option').not(':first').remove();
    $('#barangay').find('option').not(':first').remove();
    $.ajax({
        url: '/get-city',
        type: 'GET',
        data: {
            provCode: provCode,
        },
    })

        .done(function (data) {
            // console.log(data);
            $.each(data, (index, value) => {
                $('#city').append(`<option value="${value.id}" data-citymuncode="${value.citymunCode}">${value.citymunDesc}</option>`);
            });
        })
        .fail(function (err) {
            console.log(err);
        });
});

$('#city').on('change', () => {
    citymunCode = $('#city').find(":selected").data('citymuncode');
    $('#barangay').find('option').not(':first').remove();

    $.ajax({
        url: '/get-barangay',
        type: 'GET',
        data: {
            citymunCode: citymunCode,
        },
    })

        .done(function (data) {
            // console.log(data);
            $.each(data, (index, value) => {
                $('#barangay').append(`<option value="${value.id}">${value.brgyDesc}</option>`);
            });
        })
        .fail(function (err) {
            console.log(err);
        });
});