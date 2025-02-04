//start knowledge
document.querySelectorAll('.remove-tag').forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.remove();
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const yesKnowledge = document.getElementById("yesKnowledge");
    const noKnowledge = document.getElementById("noKnowledge");
    const employmentAdd = document.getElementById("knowledgeAdd");

    function toggleKnowledgeAdd() {
        if (noKnowledge.checked) {
            knowledgeAdd.style.display = "none";
        } else {
            knowledgeAdd.style.display = "block";
        }
    }

    yesKnowledge.addEventListener("change", toggleKnowledgeAdd);
    noKnowledge.addEventListener("change", toggleKnowledgeAdd);

    // Səhifə yüklənəndə yoxla
    toggleKnowledgeAdd();
});
//start knowledge
document.querySelectorAll('.lang-remove-tag').forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.remove();
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const yesLang = document.getElementById("yesLang");
    const noLang = document.getElementById("noLang");
    const langAdd = document.getElementById("langAdd");

    function toggleLangAdd() {
        if (noLang.checked) {
            langAdd.style.display = "none";
        } else {
            langAdd.style.display = "block";
        }
    }

    yesLang.addEventListener("change", toggleLangAdd);
    noLang.addEventListener("change", toggleLangAdd);

    // Səhifə yüklənəndə yoxla
    toggleLangAdd();
});

//start hobby
document.querySelectorAll('.hobby-remove-tag').forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.remove();
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const yesHobby = document.getElementById("yesHobby");
    const noHobby = document.getElementById("noHobby");
    const hobbyAdd = document.getElementById("hobbyAdd");

    function toggleHobbyAdd() {
        if (noHobby.checked) {
            hobbyAdd.style.display = "none";
        } else {
            hobbyAdd.style.display = "block";
        }
    }

    yesHobby.addEventListener("change", toggleHobbyAdd);
    noHobby.addEventListener("change", toggleHobbyAdd);

    // Səhifə yüklənəndə yoxla
    toggleHobbyAdd();
});
//start social
document.querySelectorAll('.social-remove-tag').forEach(button => {
    button.addEventListener('click', function() {
        this.parentElement.remove();
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const yesSocial = document.getElementById("yesSocial");
    const noSocial = document.getElementById("noSocial");
    const socialAdd = document.getElementById("socialAdd");

    function toggleSocialAdd() {
        if (noSocial.checked) {
            socialAdd.style.display = "none";
        } else {
            socialAdd.style.display = "block";
        }
    }

    yesSocial.addEventListener("change", toggleSocialAdd);
    noSocial.addEventListener("change", toggleSocialAdd);

    // Səhifə yüklənəndə yoxla
    toggleSocialAdd();
});

//start work
document.addEventListener("DOMContentLoaded", function () {
    const yesEmployment = document.getElementById("yesEmployment");
    const noEmployment = document.getElementById("noEmployment");
    const employmentAdd = document.getElementById("employmentAdd");

    function toggleEmploymentAdd() {
        if (noEmployment.checked) {
            employmentAdd.style.display = "none";
        } else {
            employmentAdd.style.display = "block";
        }
    }

    yesEmployment.addEventListener("change", toggleEmploymentAdd);
    noEmployment.addEventListener("change", toggleEmploymentAdd);

    // Səhifə yüklənəndə yoxla
    toggleEmploymentAdd();
});
document.addEventListener("DOMContentLoaded", function () {
    const workedYes = document.getElementById("yesCurrentlyWorked");
    const workedNo = document.getElementById("noCurrentlyWorked");
    const workedDateField = document.getElementById("workedDateField");
    const workedNoteField = document.getElementById("workedNoteField");

    function toggleWorked() {
        if (workedYes.checked) {
            workedDateField.style.display = "none";
            workedNoteField.style.display = "none";
        } else {
            workedDateField.style.display = "block";
            workedNoteField.style.display = "block";
        }
    }

    workedYes.addEventListener("change", toggleWorked);
    workedNo.addEventListener("change", toggleWorked);

    // Səhifə yüklənəndə yoxla
    toggleWorked();
});
//end work

//start education
document.addEventListener("DOMContentLoaded", function () {
    const yesStudying = document.getElementById("yesStudying");
    const noStudying = document.getElementById("noStudying");
    const educationAdd = document.getElementById("educationAdd");

    function toggleEducationAdd() {
        if (noStudying.checked) {
            educationAdd.style.display = "none";
        } else {
            educationAdd.style.display = "block";
        }
    }

    yesStudying.addEventListener("change", toggleEducationAdd);
    noStudying.addEventListener("change", toggleEducationAdd);

    // Səhifə yüklənəndə yoxla
    toggleEducationAdd();
});
document.addEventListener("DOMContentLoaded", function () {
    const educationYes = document.getElementById("yesCurrentlyStudying");
    const educationNo = document.getElementById("noCurrentlyStudying");
    const graduationDateField = document.getElementById("graduationDateField");

    function toggleGraduationDate() {
        if (educationYes.checked) {
            graduationDateField.style.display = "none";
        } else {
            graduationDateField.style.display = "block";
        }
    }

    educationYes.addEventListener("change", toggleGraduationDate);
    educationNo.addEventListener("change", toggleGraduationDate);

    // Səhifə yüklənəndə yoxla
    toggleGraduationDate();
});
//end education

//start project
document.addEventListener("DOMContentLoaded", function () {
    const yesProject = document.getElementById("yesProject");
    const noProject = document.getElementById("noProject");
    const projectAdd = document.getElementById("projectAdd");

    function toggleProjectAdd() {
        if (noProject.checked) {
            projectAdd.style.display = "none";
        } else {
            projectAdd.style.display = "block";
        }
    }

    yesProject.addEventListener("change", toggleProjectAdd);
    noProject.addEventListener("change", toggleProjectAdd);

    // Səhifə yüklənəndə yoxla
    toggleProjectAdd();
});
document.addEventListener("DOMContentLoaded", function () {
    const projectYes = document.getElementById("yesCurrentlyProject");
    const projectNo = document.getElementById("noCurrentlyProject");
    const projectDateField = document.getElementById("projectDateField");
    // const projectNoteField = document.getElementById("projectNoteField");

    function toggleProject() {
        if (projectYes.checked) {
            projectDateField.style.display = "none";
            // projectNoteField.style.display = "none";
        } else {
            projectDateField.style.display = "block";
            // projectNoteField.style.display = "block";
        }
    }

    projectYes.addEventListener("change", toggleProject);
    projectNo.addEventListener("change", toggleProject);

    // Səhifə yüklənəndə yoxla
    toggleProject();
});
//end project