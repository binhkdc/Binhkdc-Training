function move_tank(str) {
    let step = 19;
    let angle = 0;
    switch (str) {
        case "down":
            let tank_down = document.getElementById("tanks").offsetTop;
            tank_down = tank_down + step;
            if(tank_down >'192'){
                break;
            }
            document.getElementById('tanks').style.top = tank_down + 'px';
            break;
        case "up":
            let tank_up = document.getElementById("tanks").offsetTop;
            tank_up = tank_up - step;
            if(tank_up<'0'){
                break;
            }
                document.getElementById('tanks').style.top = tank_up + 'px';
            break;
        case "left":
            let tank_left = document.getElementById("tanks").offsetLeft;
            tank_left = tank_left - step;
            if(tank_left<'0'){
                break;
            }
            document.getElementById('tanks').style.left = tank_left + 'px';
            break;
        case "right":
            let tank_right = document.getElementById("tanks").offsetLeft;
            tank_right = tank_right + step;
            if(tank_right >'192'){
                break;
            }
            document.getElementById('tanks').style.left = tank_right + 'px';
            break;
    }
}
