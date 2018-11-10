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
SkillSet["Kicking"] =  ["---Back---","On Wall", "With Float", "Propels With Float", "Independent", "---Front---", "On Wall"
    ,"With Float", "Propels With Float", "Independent", "Independent with Face In", "Independent w/ bubbles", "Independent w/ rotary breathing"];
SkillSet["Arms"] = ["---Front---","On Wall", "With Float Under Arms", "With Float in Hand", "Propel w/ Float", "Float w/ Rotary Breathing","Propel independently",
            "Propel Independently w/ face in", "Propel Independently w/ Bubbles", "Propel Independently with Breathing", "---Back---" ,"On Wall", "With Float Under Arms", "With Float in Hand", "Propel w/ Float", "Propel independently"];
SkillSet["Breaststroke"]= ["Flutter kick", "Partial Flutter Kick", "Both Feet Inwards", "One Foot Inwards", "Legal On wall", "Legal on Float", "Kick Independently"
                    "Arms Standing", "Arms with Float","Legal Arms with Float", "Legal Arms and breathing with float", "Arms Independent",
                    "Legal Arms Independent", "Legal Arms and Breath"];
SkillSet["Butterfly"] = "Flutter kick", "Partial Flutter Kick", "Both Feet Inwards", "One Foot Inwards", "Legal On wall", "Legal on Float", "Kick Independently"
"Arms Standing", "Arms with Float","Legal Arms with Float", "Legal Arms and breathing with float", "Arms Independent",
    "Legal Arms Independent", "Legal Arms and Breath"];
SkillSet["Starts"] = ["Free", "Back", "Breast", "Fly"];
SkillSet["Finishes"]= ["Free", "Back", "Breast", "Fly"];
SkillSet["Turns"] = ["Free", "Back", "Breast", "Fly", "IM"];
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

