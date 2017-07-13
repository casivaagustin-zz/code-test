(function ($, document) {
    $(document).ready(function () {
        var response = $('.response');
        var loading = $(' .loading');

        var handleClick = function () {
            var data = $('.data').val();

            if (data == '') {
                response.html("");
                response.append($("<div class='alert alert-danger' role='alert'>Your data is empty, please give me your data.</div>"));
                response.addClass('show');
                return false;
            }

            loading.addClass('show');

            $.get('/process.php', {'data': data}, function (data) {
                //Handle Success
                data = $.parseJSON(data);
                response.html("");
                response.append($('<div />').html("<span class='label'>Full Name:</span> " + data.full_name));
                response.append($('<div />').html("<span class='label'>Phone:</span> " + data.phone_number));
                response.append($('<div />').html("<span class='label'>Email:</span> " + data.email));
                response.append($('<div />').html("<span class='label'>Address:</span> " + data.address));
                response.addClass('show');
                loading.removeClass('show');
            }).fail(function () {
                response.html("");
                response.append($("<div class='alert alert-danger' role='alert'>Something went wrong :(.</div>"));
                response.addClass('show');
                loading.removeClass('show');
            });
            return false;
        };

        var submit = $('.submit');
        submit.click(handleClick);
    });
})(jQuery, document);