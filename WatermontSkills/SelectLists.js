var SkillSet = new Array(12);
SkillSet["Empty"]=["Select a Skill"];
SkillSet["Entering"]=["Crying","Needs Prompting","In Immediately","Steps","Ladder","Sitting on Wall","Jumping From Wall",
    "Sitting Dive From Wall","Kneeling Dive From Wall","Standing Dive From Wall","Sitting From Block",
    "Standing from Block","Racing Start"];
SkillSet["Exiting"]=["Steps With Assistance","Ladder with Assistance","Wall with Assistance","Steps Independently",
    "Ladder Independently", "Wall Independently"];
SkillSet["Floating"]=["Back Head Up","Back Ears In","Back with Assistance","Back Independently", "Front With Assistance",
    "Front Independently"];
SkillSet["Bubbles"] = ["Attempts","Mouth In", "Mouth and Nose In", "Face In", "Rotary Breathing"];
SkillSet["Back on wall", "Back "]
function listChange(selectObj) {
    var idx = selectObj.selectedIndex;
    var which = selectObj.options[idx].value;
    var slist = SkillSet[which];

    var cSelect=document.getElementById("Skill_List");
    var len=cSelect.options.length;
    while (cSelect.options.length > 0) {
        cSelect.remove(0);
    }
    var newOption;
    for (var i=0; i<slist.length; i++) {
        newOption = document.createElement("option");
        newOption.value = slist[i];  // assumes option string and value are the same
        newOption.text=slist[i];
        // add the new option
        try {
            cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
        }
        catch (e) {
            cSelect.appendChild(newOption);
        }
    }
}

