//create events

init();
getEvents();

selectedis(12, 02, 2022);


//helpers

function init() {
    event_id_global = 0;
    global_day_selected = 12;
    global_month_selected = 02;
    global_year_selected = 2022;    
    
    // handle arrows
    document.querySelector(".arrow_left").addEventListener("click", function () {prevMonth();}, false); document.querySelector(".arrow_right").addEventListener("click", function () {nextMonth();}, false);
}

function getEvents(month, year) {
    createEvent(4, 13, "primary", "test", "test", "test");
    createEvent(5, 17, "secondary", "evenement", "test", "test");
    
    updateEvent();
}

Number.prototype.mod = function (n) {
  return ((this % n) + n) % n;
};

function nextMonth() {
    removeAllEvents();
    removeDatesEventsListeners();
    resetCalendarDates();
    
    selectedis(1, 1 + (global_month_selected % 12), global_year_selected + (global_month_selected == 12? 1 : 0));
    
    getEvents();
}

function prevMonth() {
    removeAllEvents();
    removeDatesEventsListeners();
    resetCalendarDates();
    
    selectedis(1, 1 + (global_month_selected - 2).mod(12), global_year_selected + (global_month_selected == 1? -1 : 0));
    
    getEvents();
}

function selectedis(number, month, year) {
    document.querySelector(".days :nth-child("+number+")").children[0].classList.add("actual");
    document.querySelector(".month").textContent = month_to_string(month) + " " + year;
    select_nb_days(numberofdays(month, year));
    
    global_day_selected = number;
    global_month_selected = month;
    global_year_selected = year;
}

function select_nb_days(nb) {
    let min = 1;
    switch (nb) {
        case 28:
            grey_day_and_replace(29, min);
            min += 1;
        case 29:
            grey_day_and_replace(30, min);
            min += 1;
        case 30:
            grey_day_and_replace(31, min);
            min += 1;
            break;
        case 31:
            return;
    }
    
    grey_day_and_replace(32, min);
    min += 1;
    
    grey_day_and_replace(33, min);
    min += 1;
    
    grey_day_and_replace(34, min);
    min += 1;
    
    grey_day_and_replace(35, min);
}

function grey_day_and_replace(which, to) {
    let toReplace = document.querySelector(".days :nth-child("+which+")");
    if (!toReplace.classList.contains("outside")) {
        toReplace.classList.add("outside");
    }
    toReplace.children[0].textContent = to;
}

function ungrey_day_and_replace(which, to) {
    let toReplace = document.querySelector(".days :nth-child("+which+")");
    if (toReplace.classList.contains("outside")) {
        toReplace.classList.remove("outside");
    }
    toReplace.children[0].textContent = to;
}

function month_to_string(month) {
    switch (month) {
        case 1:
            return "Janvier";
            break;
        case 2:
            return "Février";
            break;
        case 3:
            return "Mars";
            break;
        case 4:
            return "Avril";
            break;
        case 5:
            return "Mai";
            break;
        case 6:
            return "Juin";
            break;
        case 7:
            return "Juillet";
            break;
        case 8:
            return "Aout";
            break;
        case 9:
            return "Septembre";
            break;
        case 10:
            return "Octobre";
            break;
        case 11:
            return "Novembre";
            break;
        case 12:
            return "Décembre";
            break;
    }
}

function bisextile_jours(year) {
    if ((year % 4 == 0 && ! (year % 100 == 0)) || (year % 400 == 0)) {
        return 29;
    } else {
        return 28;
    }
}

function numberofdays(month, year) {
    switch (month) {
        case 1:
            return 31;
            break;
        case 2:
            return bisextile_jours(year);
            break;
        case 3:
            return 31;
            break;
        case 4:
            return 30;
            break;
        case 5:
            return 31;
            break;
        case 6:
            return 30;
            break;
        case 7:
            return 31;
            break;
        case 8:
            return 31;
            break;
        case 9:
            return 30;
            break;
        case 10:
            return 31;
            break;
        case 11:
            return 30;
            break;
        case 12:
            return 31;
            break;
    }
}

function createEvent(from, to, severity, title, content, url, prevList = null) {
    let newElement = document.createElement('div');
    
    if (prevList != null) {
        for (let k = 0; k < prevList.length; k ++) {
            newElement.classList.add(prevList[k]);
        }
    }
    
    if (Math.floor((to - 1) / 7) != Math.floor((from - 1) / 7) || prevList != null) {
        newElement.classList.add("event-link");
    }
    
    newElement.id = "eventno-" + event_id_global;
    event_id_global += 1;
    newElement.classList.add("event");
    if (severity == "success") {
        newElement.classList.add("bg-success");  
    } else if (severity == "warning") {
        newElement.classList.add("bg-warning");  
    } else if (severity == "danger") {
        newElement.classList.add("bg-danger");  
    } else if (severity == "info") {
        newElement.classList.add("bg-info");  
    } else if (severity == "primary") {
        newElement.classList.add("bg-primary");  
    } else if (severity == "secondary") {
        newElement.classList.add("bg-secondary");  
    }
    
    let thisend = true;
    let prevListNull = true;
    
    if (to - from != 0) {
        if (Math.floor((to - 1) / 7) > Math.floor((from - 1) / 7) + 1) {
            newElement.classList.add("eventno-" + (event_id_global + 1));
        }
        if (Math.floor((to - 1) / 7) > Math.floor((from - 1) / 7) + 2) {
            newElement.classList.add("eventno-" + (event_id_global + 2));
        }
        if (Math.floor((to - 1) / 7) > Math.floor((from - 1) / 7) + 3) {
            newElement.classList.add("eventno-" + (event_id_global + 3));
        }
        if (Math.floor((to - 1) / 7) != Math.floor((from - 1) / 7)) {
            newElement.classList.add("eventno-" + event_id_global);
            frombis = Math.floor((from - 1) / 7) * 7 + 8;
            if (prevList == null) {
                prevList = ["eventno-" + (event_id_global - 1)];
            } else {
                prevListNull = false;
                prevList.push("eventno-" + (event_id_global - 1));
            }
            createEvent(frombis, to, severity, title, content, url, prevList);
        }
        let tobis = to;
        while (Math.floor((tobis - 1) / 7) != Math.floor((from - 1) / 7)) {
            tobis = (Math.floor((tobis - 1) / 7) * 7);
            thisend = false;
        }
        newElement.classList.add("span-" + (tobis - from + 1));
    }
    newElement.textContent = title;
    
    if (!thisend) {
        if (!prevListNull) {
            newElement.classList.add("all-day");
        } else {
            newElement.classList.add("begin");
        }
    } else {
        if (prevListNull) {
            newElement.classList.add("end");
        }
    }
    
    
    let insertinto = document.querySelector(".days :nth-child(" + from + ")");
    
    insertinto.append(newElement);
}


//iterate over eventno-x to find some with span-x and complete the table

function updateEvent() {
    x = 0;
    eventnoProposal = document.getElementById('eventno-' + x);
    while (eventnoProposal != null) {
        let tcl = eventnoProposal.classList;
        let found_span = -1;
        for (let i = 0; i < tcl.length; i++) {
            if (eventnoProposal.classList[i].search("span-[2-7]") != -1) {
                found_span = eventnoProposal.classList[i].substring(5);
            }
        }
        //if there is a span-x
        if (found_span != -1) {
            insertHere = eventnoProposal.parentElement.nextElementSibling;

            //repeat this for each span-x's x iteration
            for (let j = 1; j < found_span; j++) {
                newChild = document.createElement('div');
                newChild.textContent = 'hidden';
                if (j == found_span - 1 && eventnoProposal.classList.contains("end")) {
                    newChild.classList.add("end");
                } else {
                    newChild.classList.add("all-day");
                }
                newChild.classList.add("event-link");
                newChild.classList.add("eventno-" + x);
                if (eventnoProposal.classList.contains("event-link")) {
                    let k = 1;
                    while (eventnoProposal.classList.contains("eventno-" + (x + k))) {
                        newChild.classList.add("eventno-" + (x + k));
                        k += 1;
                    }
                    k = 1;
                    while (eventnoProposal.classList.contains("eventno-" + (x - k))) {
                        newChild.classList.add("eventno-" + (x - k));
                        k += 1;
                    }
                }
                if (insertHere.childElementCount == 1) {
                    insertHere.append(newChild);
                } else {
                    if (insertHere.children[1].classList.contains("event")) {
                        insertHere.insertBefore(newChild, insertHere.children[1]);
                    } else {
                        insertHere.append(newChild);
                    }
                }

                //go to the next insert place
                insertHere = insertHere.nextElementSibling;
            }
        }
        x += 1;
        eventnoProposal = document.getElementById('eventno-' + x);
    }

    // iterate over hidden elements to add mouseenter and mouseleave event listener

    const trootevents = document.querySelectorAll(".event");

    for (let i = 0; i < trootevents.length; i++) {
      trootevents[i].addEventListener("mouseenter", OnEnterRootHiddenEvent(trootevents[i]), false);
      trootevents[i].addEventListener("mouseleave", OnLeaveRootHiddenEvent(trootevents[i]), false);
    }

    const tx = document.getElementsByClassName("event-link");

    for (let i = 0; i < tx.length; i++) {
      tx[i].addEventListener("mouseenter", OnEnterHiddenEvent(tx[i]), false);
      tx[i].addEventListener("mouseleave", OnLeaveHiddenEvent(tx[i]), false);
    }

    function OnEnterHiddenEvent(el) {
        let element = el;
        return function () {
            let tcl = element.classList;
            for (let i = 0; i < tcl.length; i++) {
                if (tcl[i].substring(0, 8) == "eventno-") {
                    document.getElementById(tcl[i]).classList.add("hover");
                }
            }
        }
    }

    function OnLeaveHiddenEvent(el) {
        let element = el;
        return function () {
            let tcl = element.classList;
            for (let i = 0; i < tcl.length; i++) {
                if (tcl[i].substring(0, 8) == "eventno-") {
                    document.getElementById(tcl[i]).classList.remove("hover");
                }
            }
        }
    }
    function OnEnterRootHiddenEvent(el) {
        let element = el;
        return function () {
            element.classList.add("hover");
        }
    }

    function OnLeaveRootHiddenEvent(el) {
        let element = el;
        return function () {
            element.classList.remove("hover");
        }
    }


    // iterate over dates to add event listeners for actual date

    const tdates = document.getElementsByClassName("date");

    for (let i = 0; i < tdates.length; i++) {
      tdates[i].addEventListener("click", OnClickDateEvent(tdates[i]), false);
    }

    //iterate over events to add active events

    const tevents = document.querySelectorAll(".event:not(.event-link)");

    for (let i = 0; i < tevents.length; i++) {
      tevents[i].addEventListener("click", OnClickEvent(tevents[i]), false);
    }

    const teventsPrime = document.getElementsByClassName("event-link");

    for (let i = 0; i < teventsPrime.length; i++) {
      teventsPrime[i].addEventListener("click", OnClickEvent(teventsPrime[i]), false);
    }

    function OnClickEvent(el) {
        let element = el;
        return function () {
            let allEventsActived = document.querySelectorAll("li div.active");
            if (allEventsActived != null) {
                for (let i = 0; i < allEventsActived.length; i++) {
                    allEventsActived[i].classList.remove("active");
                }
            }
            let allEventsHovered = document.querySelectorAll("li div.hover");
            if (allEventsHovered != null) {
                for (let i = 0; i < allEventsHovered.length; i++) {
                    allEventsHovered[i].classList.add("active");
                }
            }
        }
    }
}

function removeAllEvents() {
    event_id_global = 0;
    
    let to_remove = document.querySelectorAll(".event");
    for (let i = 0; i < to_remove.length; i++) {
        to_remove[i].parentNode.removeChild(to_remove[i]);
    }
    let to_remove_2 = document.querySelectorAll(".event-link");
    for (let i = 0; i < to_remove_2.length; i++) {
        to_remove_2[i].parentNode.removeChild(to_remove_2[i]);
    }
}

function resetCalendarDates(nb) {
    let min = 29;
    
    ungrey_day_and_replace(29, min);
    min += 1;

    ungrey_day_and_replace(30, min);
    min += 1;

    ungrey_day_and_replace(31, min);
    min = 1;
    
    grey_day_and_replace(32, min);
    min += 1;
    
    grey_day_and_replace(33, min);
    min += 1;
    
    grey_day_and_replace(34, min);
    min += 1;
    
    grey_day_and_replace(35, min);
}

function OnClickDateEvent(el) {
    let element = el;
    return function () {
        document.querySelector(".date.actual").classList.remove("actual");
        element.classList.add("actual");
    }
}

function removeDatesEventsListeners() {
    let to_remove = document.getElementsByClassName("date");
    for (let i = 0; i < to_remove.length; i++) {
        var elClone = to_remove[i].cloneNode(true);
        to_remove[i].parentNode.replaceChild(elClone, to_remove[i]);
    }
}