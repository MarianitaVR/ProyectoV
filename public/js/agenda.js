document.addEventListener("DOMContentLoaded", function () {
    const calendarEl = document.getElementById("agenda");
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "es",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth",
        },
        events: "http://localhost:8000/api/calendar",
        dateClick: function (info) {
            location.href = "/calendar/create";
        },
        eventClick: function (info) {
            const event = info.event;

            axios.post("http://localhost:8000/api/calendar/edit/"+event.id).then((res) => {
                location.href = `/calendar/${ res.data.id }`;
            });
        }
    });
    calendar.render();
});
