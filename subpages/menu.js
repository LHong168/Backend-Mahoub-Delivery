var count = 0;
var fees = 1.50;
var sum = fees;
var check = false;

function calFunction(numItem) {
    let checkItem = document.getElementById('check-items');

    let newDiv = document.createElement('div');
    newDiv.setAttribute("id", "tempDiv");
    newDiv.setAttribute(
        "style",
        "width: 80%; margin: auto; margin-top: 0.5em; display: flex; font-size: 1.5em;"
    );
    Menu[numItem][3]++;

    let ele = checkDup(numItem);

    if (check == true) {
        let text = `${Menu[numItem][1]} x${Menu[numItem][3]}`;

        let list = document.querySelectorAll("#left");
        list[ele].innerHTML = text;
    }

    else {

        let leftDiv = document.createElement('div');
        let rightDiv = document.createElement('div');
    
        leftDiv.setAttribute('id', 'left');
        leftDiv.setAttribute('class', numItem);
    
        leftDiv.setAttribute(
            "style",
            "width: 80%;"
        );
    
        leftDiv.append(Menu[numItem][1]);
    
        rightDiv.setAttribute(
            "style",
            "width: 30%;"
        );

        rightDiv.append(Menu[numItem][2] + '$');

        newDiv.append(leftDiv);
        newDiv.append(rightDiv);

        checkItem.appendChild(newDiv);
    }
    
    sum += parseInt(Menu[numItem][2]);
    document.getElementById('total').innerHTML = sum;
    
    count++;
    document.getElementById('count').innerHTML = count + " items";
}

function checkDup(item) {
    let list = document.querySelectorAll("#left");

    for(let n = 0; n < list.length; n++) {
        if (list[n].className == item) {
            check = true;
            return n;
        }
    }
    return check = false;
}

function removeItem() {

    let list = document.querySelectorAll("#tempDiv");
    for(let n = 0; n < list.length; n++) {
        list[n].remove();
    }

    for (var i = 0; i < Object.keys(Menu).length; i++) {
        Menu[i][3] = 0;
    }

    sum = fees;
    document.getElementById('total').innerHTML = sum;

    count = 0;
    document.getElementById('count').innerHTML = count + " items";
    
}

//Time Open or close

// window.onload = function() {
//     let time = document.getElementById('open-close');
//     const d = new Date();
//     let hour = d.getHours();
//     let day = d.getDay();

//     if (day >= 1 && day <= 5 && hour >= 8 && hour <= 20) {
//         time.innerHTML = 'OPEN';
//         time.style.backgroundColor = "green";
//     }
//     else {
//         time.innerHTML = 'CLOSED';
//         time.style.backgroundColor = "red";
//     }
// }

function checkOrder() {
    const item = document.getElementById('check-items');

    if (item.childNodes.length == 1) {
        document.getElementById('missing').innerHTML = "Please add items in order to proceed";
    }
    else {
        document.getElementById('missing').innerHTML = "";
        setTimeout(function() {
            document.getElementById('order').style.display= 'none';
            document.getElementById('done').style.display= 'block';
            removeItem();

            setTimeout(function() {
                document.getElementById('done').style.display= 'none';
                document.getElementById('order').style.display= 'block';
            }, 1000)

        }, 1000);

    }
    
}

