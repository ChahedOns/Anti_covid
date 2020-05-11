
function update_users_count() {
    $('#cc').animate({
        counter: ~~(Math.random() * 1040)
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
    $('#gr').animate({
        counter: ~~(Math.random() * 656)
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
    $('#mr').animate({
        counter: ~~(Math.random() * 45)
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
};

update_users_count();