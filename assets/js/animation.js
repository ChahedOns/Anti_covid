
function update_users_count() {
    $('#cc.compteur b').animate({
        counter: ~~(Math.random() * 258)
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
    $('#mr.compteur b').animate({
        counter: ~~(Math.random() * 7)
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
    $('#gr.compteur b').animate({
        counter: ~~(Math.random() * 3)
    }, {
        durtion: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
};

update_users_count();
