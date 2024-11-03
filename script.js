document.addEventListener("DOMContentLoaded", function () {
    const moodForm = document.getElementById("moodForm");
    const moodSelection = document.getElementById("mood");
    const submitBtn = document.getElementById("submitBtn");
    const titleForm = document.getElementById("titleForm");

    

    moodSelection.addEventListener("change", function () {
        const mood = moodSelection.value;
        submitBtn.style.transition = 'background-color 1.1s, box-shadow 0.5s, transform 0.5s';
        document.body.style.transition = 'background-color 1.1s';
        document.body.style.backgroundColor = getMoodColor(mood);
        submitBtn.style.backgroundColor = getMoodColor(mood);
        titleForm.style.textShadow = '0px 0px 2px rgba(0, 0, 0)';
        titleForm.style.transition = 'color 1s';
        titleForm.style.color = getMoodColor(mood)
       
        if (getMoodColor(mood) == "") {
            titleForm.style.textShadow = '0px 0px 0px rgba(0, 0, 0, 0.5)';
        }
    });

    function getMoodColor(mood) {
        switch (mood) {
            case "feliz":
                return "rgba(247,255,109)";
            case "triste":
                return "rgba(66, 65, 65)";
            case "energetico":
                return "rgba(255,183,51)";
            case "relajado":
                return "rgba(167,188,224)";
            case "inspirado":
                return "rgba(255,196,205)";
            case "estresado":
                return "rgba(230, 73, 73)";
            default:
                return "";
        }
    }

    moodForm.addEventListener("submit", function (event) {
        if (moodSelection.value === "") {
            alert("Por favor, selecciona un estado de ánimo.");
            event.preventDefault();
        }
    });
});
