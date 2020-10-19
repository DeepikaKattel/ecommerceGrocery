$.ajax({
    type: 'GET',
    url: '/department',
    success: function (data) {
        $('#departmentList').html(data.view);
    },
    error: function (data) {
        console.log("Error from the server");
    }
});