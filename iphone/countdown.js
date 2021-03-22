CountDownTimer('11/25/2020');

function CountDownTimer(dt) {
    let end = new Date(dt);

    let _second = 1000;
    let _minute = _second * 60;
    let _hour = _minute * 60;
    let _day = _hour * 24;
    let timer;
    const item = document.querySelectorAll('#countdown');
    function showRemaining() {
        const now = new Date();
        let distance = end - now;

        if(distance < 0) {
            clearInterval(timer);
            for(let i = 0; i < item.length; i++) {
                item[i].textContent = 'キャンペーンが終了しました。';
            }
            
            return;
        }

        let days = Math.floor(distance / _day);
        // let hours = Math.floor((distance % _day) / _hour);
        // let minutes = Math.floor((distance % _hour) / _minute);
        // let seconds = Math.floor((distance % _minute) / _second);

    
        for(let i = 0; i < item.length; i++) {
            item[i].innerHTML ='キャンペーン終了まであと<span class="big">' + days + '日</span>';
        }

    }
    timer = setInterval(showRemaining, 1000);
}