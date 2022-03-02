function addNewRegulation() {
    document.getElementById("add-regulation").style.display = "block";
}

function closeAddRegulation() {
    document.getElementById("add-regulation").style.display = "none";
}

function addNewSubject() {
    document.getElementById("add-subject").style.display = "block";
}

function closeAddSubject() {
    document.getElementById("add-subject").style.display = "none";
}

function addItemRow(){
    $("<tbody>").load("add-item.php", function() {
        $("#add-subject-table").append($(this).html());
    });	
}
function addregulation(){
    $("<div>").load("new-reg.php", function() {
        $("#regulation-input").append($(this).html());
    });	
}