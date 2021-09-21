// di chuyen xe tank
function move_tank(str) {
    let step = 19;
    switch (str) {
        case "down":
            let tank_down = document.getElementById("tank").offsetTop;
            tank_down = tank_down + step;
            if(tank_down > '192'){
                document.getElementById('tank').style.top = '28px';
            }else {
                document.getElementById('tank').style.top = tank_down + 'px';
                break;
            }
        case "up":
            let tank_up = document.getElementById("tank").offsetTop;
            tank_up = tank_up - step;
            if(tank_up<'0'){
                break;
            }else {
                document.getElementById('tank').style.top = tank_up + 'px';
                break;
            }

        case "left":
            let tank_left = document.getElementById("tank").offsetLeft;
            tank_left = tank_left - step;
            if(tank_left<'0'){
                document.getElementById('tank').style.left ='161px';
            }else {
                document.getElementById('tank').style.left = tank_left + 'px';
                break;
            }
        case "right":
            let tank_right = document.getElementById("tank").offsetLeft;
            tank_right = tank_right + step;
            if(tank_right>'192'){
                document.getElementById('tank').style.left ='9px';
            }else {
                document.getElementById('tank').style.left = tank_right + 'px';
                break;
            }
    }
}

